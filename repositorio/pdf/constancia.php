<?php
//require_once('Image_Barcode-1.1.0/Barcode.php');
/*
 * Created on 11/02/2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class RConstancia extends tFPDF{
	private $cotizacion;
	
	public function RConstancia(){
		parent::tFPDF('P', 'mm', 'Letter');
		$this->AddFont('Sans','', 'DejaVuSans.ttf', true);
		$this->AddFont('Sans','B', 'DejaVuSans-Bold.ttf', true);
		$this->AddFont('Sans','U', 'DejaVuSans-Oblique.ttf', true);
		$this->AddFont('Sans','BU', 'DejaVuSans-BoldOblique.ttf', true);
		$this->cleanFiles();
	}	
	
	public function Header($nombre){   	
    	$this->SetFont('Arial', 'B', 20);
    	$this->Ln(10);
    	$this->Image('repositorio/formato/plantillaInscripcion.jpg', 10, 10, 200, 255);
    	$this->SetFont('Sans', '', 12);
	}
	
	public function generar($id){
		$this->AddPage();
		
		if ($id == '') return '';
		$db = TBase::conectaDB();
		$this->SetFont('Sans', '', 8);
		$rs = $db->Execute("select idEstudiante, idGrupo, fecha, folio from inscripcion where idInscripcion = ".$id);
		$fecha = $rs->fields['fecha'];
		$folio = $rs->fields['folio'];
		
		$aux = $db->Execute("select count(*) as total from inscripcion where idEstudiante = ".$rs->fields['idEstudiante']);
		
		if ($aux->fields['total'] == 1)
			$this->setXY(94.5, 20);
		else
			$this->setXY(94.5, 30.5);
		
		$this->Cell(0, 5, "X");
		
		$this->setXY(143, 24); $this->Cell(0, 5, $folio);
		
		$estudiante = new TEstudiante($rs->fields['idEstudiante']);
		$grupo = new TGrupo($rs->fields['idGrupo']);
		
		$rs = $db->Execute("select idNivel, nombre from grado where idGrado = ".$grupo->getGrado());
		
		if (file_exists("repositorio/estudiantes/img_".$estudiante->getId().".JPG"))
			$this->Image("repositorio/estudiantes/img_".$estudiante->getId().".JPG", 17, 11.7, 23, 27);
		
		if ($rs->fields['idNivel'] == 1)
			$this->setXY(50.5, 20);
		else
			$this->setXY(50.5, 30.5);
			
		$this->Cell(0, 5, "X");
		
		$fecha = explode(" ", $fecha);
		$this->setXY(60.2, 36.8); $this->Cell(0, 5, $rs->fields['nombre']);
		$this->setXY(90, 36.8); $this->Cell(0, 5, $fecha[0]);
		$this->setXY(155, 30.5); $this->Cell(0, 5, $grupo->ciclo->getNombre());
		
		$this->setXY(145, 50); $this->Cell(0, 5, $estudiante->getNombre());
		$this->setXY(10, 50); $this->Cell(0, 5, $estudiante->getApp());
		$this->setXY(75, 50); $this->Cell(0, 5, $estudiante->getApm());
		
		$nacimiento = explode("-", $estudiante->getFechaNacimiento());
		$this->setXY(21, 68); $this->Cell(0, 5, $nacimiento[2]);
		$this->setXY(47, 68); $this->Cell(0, 5, $nacimiento[1]);
		$this->setXY(77, 68); $this->Cell(0, 5, $nacimiento[0]);
		$this->setXY(105, 68); $this->Cell(0, 5, $estudiante->getEdad());
		$this->setXY(125, 68); $this->Cell(0, 5, $estudiante->getNombreEstadoNacimiento());
		
		$this->setXY(10, 86); $this->Cell(0, 5, $estudiante->getCalle());
		$this->setXY(80, 86); $this->Cell(0, 5, $estudiante->getNumeroExterior());
		$this->setXY(100, 86); $this->Cell(0, 5, $estudiante->getNumeroInterior());
		$this->setXY(120, 86); $this->Cell(0, 5, $estudiante->getColonia());
		
		$this->setXY(10, 104); $this->Cell(0, 5, $estudiante->getCodigoPostal());
		$this->setXY(37, 104); $this->Cell(0, 5, $estudiante->getDelegacion());
		$this->setXY(157, 104); $this->Cell(0, 5, $estudiante->getCURP());
		
		$rs = $db->Execute("select idResponsable from responsableestudiante where idParentesco = 3 and idEstudiante = ".$estudiante->getId());
		if ($rs->EOF)
			$rs = $db->Execute("select idResponsable from responsableestudiante where idParentesco = 1 and idEstudiante = ".$estudiante->getId());
		$responsable = new TResponsable($rs->fields['idResponsable']);
		$y = 0;
		$this->setXY(10, 127 + $y); $this->Cell(0, 5, $responsable->getApp());
		$this->setXY(50, 127 + $y); $this->Cell(0, 5, $responsable->getApm());
		$this->setXY(100, 127 + $y); $this->Cell(0, 5, $responsable->getNombre());
		$this->setXY(160, 127 + $y); $this->Cell(0, 5, $responsable->getOcupacion());
		
		$this->setXY(10, 145 + $y); $this->Cell(0, 5, $responsable->getEmpresa());
		$this->setXY(95, 145 + $y); $this->Cell(0, 5, $responsable->getTelefono());
		$this->setXY(130, 145 + $y); $this->Cell(0, 5, $responsable->getExtension());
		$this->setXY(155, 145 + $y); $this->Cell(0, 5, $responsable->getPuesto());
		
		$this->setXY(10, 162 + $y); $this->Cell(0, 5, $responsable->getTelefonoContacto());
		$this->setXY(80, 162 + $y); $this->Cell(0, 5, $responsable->getCelular());
		$this->setXY(140, 162 + $y); $this->Cell(0, 5, $responsable->getCorreo());
		
		$rs = $db->Execute("select idResponsable from responsableestudiante where idParentesco = 2 and idEstudiante = ".$estudiante->getId());
		$responsable = new TResponsable($rs->fields['idResponsable']);
		$y = 60;
		$this->setXY(10, 127 + $y); $this->Cell(0, 5, $responsable->getApp());
		$this->setXY(50, 127 + $y); $this->Cell(0, 5, $responsable->getApm());
		$this->setXY(100, 127 + $y); $this->Cell(0, 5, $responsable->getNombre());
		$this->setXY(160, 127 + $y); $this->Cell(0, 5, $responsable->getOcupacion());
		
		$this->setXY(10, 145 + $y); $this->Cell(0, 5, $responsable->getEmpresa());
		$this->setXY(95, 145 + $y); $this->Cell(0, 5, $responsable->getTelefono());
		$this->setXY(130, 145 + $y); $this->Cell(0, 5, $responsable->getExtension());
		$this->setXY(155, 145 + $y); $this->Cell(0, 5, $responsable->getPuesto());
		
		$this->setXY(10, 162 + $y); $this->Cell(0, 5, $responsable->getTelefonoContacto());
		$this->setXY(80, 162 + $y); $this->Cell(0, 5, $responsable->getCelular());
		$this->setXY(140, 162 + $y); $this->Cell(0, 5, $responsable->getCorreo());
		
		
		$this->setXY(18, 245); $this->Cell(0, 5, $estudiante->getNombreSanguineo());
		$this->setXY(37, 245); $this->Cell(0, 5, $estudiante->getEstatura());
		$this->setXY(57, 245); $this->Cell(0, 5, $estudiante->getPeso());
		
		$rs = $db->Execute("select descripcion from cuidado a join estudiantecuidados b using(idCuidado) where idEstudiante = ".$estudiante->getId());
		
		$cuidados = "";
		while(!$rs->EOF){
			$cuidados .= $rs->fields['descripcion'].' ---- ';
			$rs->moveNext();
		}
		
		$this->setXY(75, 245); $this->Cell(0, 5, $cuidados);
		if ($cuidados == '')
			$this->setXY(158, 236.4); 
		else
			$this->setXY(147.5, 236.4); 
			
		$this->Cell(0, 5, "X");
	}
	
	function Footer(){
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