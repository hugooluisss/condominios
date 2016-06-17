<?php
include_once(getcwd()."/repositorio/pdf/plantilla.php");

class RCuidados extends RPlantilla{
	public function RCuidados(){
		parent::RPlantilla();
	}	
	
	public function Header(){   	
    	parent::Header("Cuidados a estudiantes");
	}
	
	public function generar($grupo = ''){
		#if ($grupo == '') return false;
		$this->AddPage();
		$this->grupo = new TGrupo($grupo);
		$db = TBase::conectaDB();
		
		$rsCuidados = $db->Execute("select * from cuidado");
		
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
		$this->Cell(80, 5, "NOMBRE DEL ALUMNO", 1, 0, 'C', true);
		
		$this->SetFont('Arial', '', 7);
		$rsCuidados->MoveFirst();
		while(!$rsCuidados->EOF){
			$this->Cell(8.5, 5, utf8_decode($rsCuidados->fields['idCuidado']), 1, 0, 'C', true);
			$rsCuidados->moveNext();
		}
		
		$this->Ln(5);
		$rs = $db->Execute("select * from inscripcion a join estudiante b using(idEstudiante) where idGrupo = ".$grupo." and idEstudiante in (select idEstudiante from estudiantecuidados c);");
		$cont = 0;
		$estudiante = new TEstudiante;
		
		while(!$rs->EOF){
			$estudiante->setId($rs->fields['idEstudiante']);
			$cont++;
			$this->Cell(8, 5, $cont, 1, 0, 'R');
			$this->Cell(80, 5, utf8_decode(strtoupper($estudiante->getApp()." ".$estudiante->getApm()." ".$estudiante->getNombre())), 1, 0, 'L');
			
			$rsCuidados->MoveFirst();
			while(!$rsCuidados->EOF){
				$rs2 = $db->Execute("select idCuidado from estudiantecuidados where idEstudiante = ".$rs->fields['idEstudiante']." and idCuidado = ".$rsCuidados->fields['idCuidado']);
				$this->Cell(8.5, 5, $rs2->EOF?'':'X', 1, 0, 'C');
				$rsCuidados->moveNext();
			}
			$rs->moveNext();
		}
	}
	
	function Footer(){
	    // Go to 1.5 cm from bottom
	    $this->SetY(-15);
	    $this->SetFont('Arial', 'I', 8);
	    $db = TBase::conectaDB();
	    $rsCuidados = $db->Execute("select * from cuidado");
	    $s = "CUIDADOS \n";
	    while(!$rsCuidados->EOF){
			$s .= $rsCuidados->fields['idCuidado'].". ".$rsCuidados->fields['nombre']."; ";
			$rsCuidados->moveNext();
		}
		$s = utf8_decode($s);
		
	    $this->Write(5, $s);
    }
}
?>