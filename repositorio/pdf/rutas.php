<?php
include_once(getcwd()."/repositorio/pdf/plantilla.php");

class RRutasEstudiantes extends RPlantilla{
	public function RCuidados(){
		parent::RPlantilla();
	}	
	
	public function Header(){   	
    	parent::Header("Rutas - Estudiantes");
	}
	
	public function generar($grupo = ''){
		#if ($grupo == '') return false;
		$this->AddPage();
		$this->grupo = new TGrupo($grupo);
		$db = TBase::conectaDB();
		
		$this->SetFont('Arial', '', 10);
		$this->Cell(20, 5, "Grupo");
		$this->Cell(30, 5, utf8_decode($this->grupo->getNombre()), 'B');
		$this->Cell(10, 5, "");
		$this->Cell(20, 5, "Grado");
		$this->Cell(30, 5, utf8_decode($this->grupo->getNombreGrado()), 'B');
		$this->Cell(10, 5, "");
		$this->Cell(20, 5, "Ciclo");
		$this->Cell(30, 5, utf8_decode($this->grupo->ciclo->getNombre()), 'B', 1);
		$this->Ln(5);
		
		$this->SetFillColor(182, 182, 182);
		$this->Cell(8, 5, "", 1, 0, 'C', true);
		$this->SetFont('Arial', 'B', 10);
		$this->Cell(120, 5, "NOMBRE DEL ALUMNO", 1, 0, 'C', true);
		$this->Cell(70, 5, "RUTA", 1, 0, 'C', true);
		
		$this->Ln(5);
		$rs = $db->Execute("select idEstudiante, idRuta from ruta a join estudianteruta b using(idRuta) join estudiante c using(idEstudiante) where idEstudiante in (select idEstudiante from inscripcion where idGrupo = ".$grupo.")");
		$cont = 0;
		$estudiante = new TEstudiante;
		$ruta = new TRuta;
		$this->SetFont('Arial', '', 7);
		while(!$rs->EOF){
			$estudiante->setId($rs->fields['idEstudiante']);
			$ruta->setId($rs->fields['idRuta']);
			$cont++;
			$this->Cell(8, 5, $cont, 1, 0, 'R');
			$this->Cell(120, 5, utf8_decode(strtoupper($estudiante->getApp()." ".$estudiante->getApm()." ".$estudiante->getNombre())), 1, 0, 'L');
			$this->Cell(70, 5, utf8_decode($ruta->getNombre()), 1, 0, 'L');
			
			$rs->moveNext();
		}
	}
}
?>