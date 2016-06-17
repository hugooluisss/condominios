<?php
//require_once('Image_Barcode-1.1.0/Barcode.php');
/*
 * Created on 11/02/2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class RListaAsistencias extends tFPDF{
	private $grupo;
	private $mes;
	private $anio;
	private $conDatos;
	
	public function RListaAsistencias($anio, $mes, $grupo, $conDatos = true){
		parent::tFPDF('P', 'mm', 'Letter');
		$this->AddFont('Sans','', 'DejaVuSans.ttf', true);
		$this->AddFont('Sans','B', 'DejaVuSans-Bold.ttf', true);
		$this->AddFont('Sans','U', 'DejaVuSans-Oblique.ttf', true);
		$this->AddFont('Sans','BU', 'DejaVuSans-BoldOblique.ttf', true);
		$this->grupo = new TGrupo($grupo);
		$this->mes = $mes;
		$this->anio = $anio;
		
		$this->conDatos = $conDatos;
		
		$this->cleanFiles();
	}	
	
	public function Header(){   	
    	$this->SetFont('Arial', 'B', 14);
    	$this->Cell(0, 6, "INSTITUTO CULTURAL LEONARDO DA VINCI", 0, 1, 'C');
    	$this->Cell(0, 6, utf8_decode("CICLO ESCOLAR ".$this->grupo->ciclo->getNombre()), 0, 1, 'C');
    	
    	$db = TBase::conectaDB();
    	$rs = $db->Execute("select a.*, b.nombre as nivel from grado a join nivel b using(idNivel) where idGrado = ".$this->grupo->getGrado());
    	$this->Cell(0, 6, utf8_decode($rs->fields['nombre'].' '.$this->grupo->getNombre().'   '.$rs->fields['nivel']), 0, 1, 'C');
    	$this->Cell(0, 6, utf8_decode("LISTA DE ASISTENCIA"), 0, 1, 'C');
    	$this->Cell(0, 6, $this->getMes($this->mes), 0, 1, 'C');
    	
    	$this->Ln(10);
    	
    	$this->Image('repositorio/formato/davinciFormato.jpg', 10, 5, 30, 40);
    	$this->Image('repositorio/formato/gobiernoFormato.jpg', 180, 5, 30, 30);
    	
    	$this->SetFont('Sans', '', 12);
	}
	
	public function generar(){
		$this->AddPage();
		$this->SetFillColor(182, 182, 182);
		$this->Cell(8, 5, "", 1, 0, 'C', true);
		$this->SetFont('Arial', 'B', 10);
		$this->Cell(80, 5, "NOMBRE DEL ALUMNO", 1, 0, 'C', true);
		
		$this->SetFont('Arial', '', 7);
		for($dia = 1 ; $dia < 32 ; $dia++){
			$this->Cell(3.5, 5, $dia, 1, 0, 'C', true);
		}
		
		$this->Ln(5);
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idEstudiante from inscripcion where idGrupo = ".$this->grupo->getId());
		$estudiante = new TEstudiante;
		$cont = 0;
		while(!$rs->EOF){
			$estudiante->setId($rs->fields['idEstudiante']);
			$cont++;
			$this->Cell(8, 5, $cont, 1, 0, 'R');
			$this->Cell(80, 5, utf8_decode(strtoupper($estudiante->getApp()." ".$estudiante->getApm()." ".$estudiante->getNombre())), 1, 0, 'L');
			for($dia = 1 ; $dia < 32 ; $dia++){
				$asistio = false;
				if ($this->conDatos){
					$aux = $db->Execute("select idInscripcion from asistencia where fecha = '".($this->anio.'-'.$this->mes.'-'.$dia)."' and idInscripcion in (select idInscripcion from inscripcion where idEstudiante = ".$rs->fields['idEstudiante']." and idGrupo = ".$this->grupo->getId().")");
					$asistio = !$aux->EOF;
				}
				$this->Cell(3.5, 5, !$asistio?'':'X', 1, 0, 'C');
			}
			$this->Ln(5);
			$rs->moveNext();
		}
	}
	
	function Footer(){
	}
	
	private function getMes($mes){
		switch($mes){
			case 1: return "Enero";
			case 2: return "Febrero";
			case 3: return "Marzo";
			case 4: return "Abril";
			case 5: return "Mayo";
			case 6: return "Junio";
			case 7: return "Julio";
			case 8: return "Agosto";
			case 9: return "Septiembre";
			case 10: return "Octubre";
			case 11: return "Noviembre";
			case 12: return "Diciembre";
		}
		
		return '';
	}
	
	private function cleanFiles(){
    	$t = time();
    	$dir = "temporal";
    	$h = opendir($dir);
    	while($file=readdir($h)){
        	if(substr($file,0,3)=='tmp' && substr($file,-4)=='.pdf'){
            	$path = $dir.'/'.$file;
            	if($t-filemtime($path)>3600)
                	@unlink($path);
        	}
    	}
    	closedir($h);
	}
	
	public function Output(){
		$file = "temporal/".basename(tempnam("temporal/", 'tmp'));
		rename($file, $file.'.pdf');
		$file .= '.pdf';
		$this->cleanFiles();
		parent::Output($file, 'F');
		chmod($file, 0555);
		//header('Location: temporal/'.$file);
		
		return $file;
	}
}
?>