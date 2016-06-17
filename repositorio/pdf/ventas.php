<?php
include_once(getcwd()."/repositorio/pdf/plantilla.php");

class RVentas extends RPlantilla{
	public function RVentas($inicio, $fin){
		$this->inicio = $inicio == ''?date("Y-m-d"):$inicio;
		$this->fin = $fin == ''?date("Y-m-d"):$fin;
		
		parent::RPlantilla();
	}	
	
	public function Header(){   	
    	parent::Header("Ventas");
    	
    	$this->SetFont('Arial', '', 10);
		$this->Cell(20, 5, "Fecha");
		$this->Cell(30, 5, utf8_decode(date("Y-m-d")), 'B');
		$this->Cell(10, 5, "");
		$this->Cell(20, 5, utf8_decode("Análisis"));
		$this->Cell(50, 5, utf8_decode($this->inicio.' - '.$this->fin), 'B');
		$this->Cell(10, 5, "");
		$this->Ln(10);
		$this->SetFillColor(182, 182, 182);
		$this->SetFont('Arial', 'B', 10);
		$this->Cell(20, 5, "FECHA", 1, 0, 'C', true);
		$this->Cell(20, 5, "CLAVE", 1, 0, 'C', true);
		$this->Cell(100, 5, utf8_decode("DESCRIPCIÓN"), 1, 0, 'C', true);
		$this->Cell(20, 5, "CANT", 1, 0, 'C', true);
		$this->Cell(20, 5, "PU", 1, 0, 'C', true);
		$this->Cell(20, 5, "TOTAL", 1, 0, 'C', true);
		$this->Ln(5);
	}
	
	public function generar(){
		#if ($grupo == '') return false;
		$this->AddPage();
		$db = TBase::conectaDB();
		
		$this->SetFont('Arial', '', 7);
		
		$rs = $db->Execute("select *, cast(fecha as date) as fecha from venta a join movventa b using(idVenta) where cast(fecha as date) between '".$this->inicio."' and '".$this->fin."' and aplicada = 1 order by fecha;");
		$cont = 0;
		$estudiante = new TEstudiante;
		$total = 0;
		while(!$rs->EOF){
			$estudiante->setId($rs->fields['idEstudiante']);
			$this->Cell(20, 5, $rs->fields['fecha'], 1, 0, 'L');
			$this->Cell(20, 5, utf8_decode($rs->fields['clave']), 1, 0, 'L');
			$this->Cell(100, 5, utf8_decode($rs->fields['descripcion']), 1, 0, 'L');
			$this->Cell(20, 5, number_format($rs->fields['cantidad'], 2, '.', ','), 1, 0, 'R');
			$this->Cell(20, 5, number_format($rs->fields['precio'], 2, '.', ','), 1, 0, 'R');
			$this->Cell(20, 5, number_format(sprintf("%.2f", $rs->fields['cantidad'] * $rs->fields['precio']), 2, '.', ','), 1, 1, 'R');
			$total += $rs->fields['cantidad'] * $rs->fields['precio'];
			
			$rs->moveNext();
		}
		
		$this->SetFont('Arial', 'B', 7);
		$this->Cell(180, 5, "TOTAL ", 0, 0, 'R');
		$this->Cell(20, 5, number_format(sprintf("%.2f", $total), 2, '.', ','), 1, 1, 'R');
	}
	
	function Footer(){
	    // Go to 1.5 cm from bottom
	    $this->SetY(-10);
	    $this->SetFont('Arial', 'I', 7);
		
	    $this->Write(5, utf8_decode("PU: Precio unitario"));
    }
}
?>