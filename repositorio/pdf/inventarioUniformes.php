<?php
include_once(getcwd()."/repositorio/pdf/plantilla.php");

class RInventario extends RPlantilla{
	public function RInventario($preciolista = true){
		$this->preciolista = $preciolista;
		parent::RPlantilla();
	}	
	
	public function Header(){   	
    	parent::Header("Inventario de uniformes");
    	
    	$this->SetFont('Arial', '', 10);
		$this->Cell(20, 5, "Fecha");
		$this->Cell(30, 5, utf8_decode(date("Y-m-d")), 'B');
		$this->Cell(10, 5, "");
		$this->Ln(10);
	}
	
	public function generar(){
		#if ($grupo == '') return false;
		$this->AddPage();
		$db = TBase::conectaDB();
		
		$this->SetFillColor(182, 182, 182);
		$this->SetFont('Arial', 'B', 10);
		$this->Cell(20, 5, "CLAVE", 1, 0, 'C', true);
		if ($this->preciolista){
			$this->Cell(60, 5, "NOMBRE", 1, 0, 'C', true);
			$this->Cell(30, 5, "PL", 1, 0, 'C', true);
		}else
			$this->Cell(90, 5, "NOMBRE", 1, 0, 'C', true);
		$this->Cell(30, 5, "PV", 1, 0, 'C', true);
		$this->Cell(30, 5, "TALLA", 1, 0, 'C', true);
		$this->Cell(30, 5, "EXIST", 1, 0, 'C', true);
		
		$this->SetFont('Arial', '', 7);
		
		$this->Ln(5);
		$rs = $db->Execute("select a.*, b.existencia, c.nombre as talla from uniforme a join existencias b using(idUniforme) join talla c using(idTalla);");
		$cont = 0;
		$estudiante = new TEstudiante;
		
		while(!$rs->EOF){
			$estudiante->setId($rs->fields['idEstudiante']);
			$cont++;
			$this->Cell(20, 5, utf8_decode($rs->fields['clave']), 1, 0, 'L');
			if ($this->preciolista){
				$this->Cell(60, 5, utf8_decode($rs->fields['nombre']), 1, 0, 'L');
				$this->Cell(30, 5, number_format($rs->fields['preciolista'], 2, '.', ','), 1, 0, 'R');
			}else
				$this->Cell(90, 5, utf8_decode($rs->fields['nombre']), 1, 0, 'L');
			$this->Cell(30, 5, number_format(sprintf("%.2f", $rs->fields['precioventa'] + $rs->fields['adicional']), 2, '.', ','), 1, 0, 'R');
			$this->Cell(30, 5, utf8_decode($rs->fields['talla']), 1, 0, 'L');
			$this->Cell(30, 5, $rs->fields['existencia'], 1, 1, 'R');
			
			$rs->moveNext();
		}
	}
	
	function Footer(){
	    // Go to 1.5 cm from bottom
	    $this->SetY(-10);
	    $this->SetFont('Arial', 'I', 7);
		
		if ($this->preciolista)
		    $this->Write(5, utf8_decode("PL: Precio de lista; PV: Precio de venta incluido el adicional"));
		else
			$this->Write(5, utf8_decode("PV: Precio de venta incluido el adicional"));
    }
}
?>