<?php
//require_once('Image_Barcode-1.1.0/Barcode.php');
/*
 * Created on 11/02/2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templatess
 */
class RGeneral extends tFPDF{
	public function RGeneral(){
		parent::tFPDF('P', 'mm', 'Letter');
		$this->AddFont('Sans','', 'DejaVuSans.ttf', true);
		$this->AddFont('Sans','B', 'DejaVuSans-Bold.ttf', true);
		$this->AddFont('Sans','U', 'DejaVuSans-Oblique.ttf', true);
		$this->AddFont('Sans','BU', 'DejaVuSans-BoldOblique.ttf', true);
		
		$this->cleanFiles();
	}
	
	public function Header(){
		parent::Header();
		
		#$this->Image('repositorio/formato/logo.jpg', 180, 10, 30, 35);
		$this->SetFont('Arial', 'B', 20);
		$this->Ln(5);
		$this->Cell(0, 5, utf8_decode("Reporte de infracciones"), 0, 0, 'C');
		$this->Ln(20);
		$this->SetFont('Arial', '', 9);
		$this->Cell(0, 5, utf8_decode("Del ".$_POST['fechaInicio']." al ".$_POST['fechaFin']), 0, 0, 'L');
		$this->Ln(10);
		$this->SetFont('Arial', 'B', 8);
		$this->Cell(25, 5, utf8_decode("Fecha / Hora"), 1, 0, 'C');
		$this->Cell(10, 5, utf8_decode("Depto"), 1, 0, 'C');
		$this->Cell(47, 5, utf8_decode("Condominio"), 1, 0, 'C');
		$this->Cell(50, 5, utf8_decode("Inquilino"), 1, 0, 'C');
		$this->Cell(30, 5, utf8_decode("Reglamento"), 1, 0, 'C');
		$this->Cell(5, 5, utf8_decode("OC"), 1, 0, 'C');
		$this->Cell(15, 5, utf8_decode("Monto"), 1, 0, 'C');
		$this->Cell(15, 5, utf8_decode("Estado"), 1, 1, 'C');
		
	}
	
	public function generar($datos){
		$this->AddPage();
		foreach($datos as $obj){
			$this->SetFont('Arial', '', 6);
			$this->Cell(25, 5, utf8_decode($obj['fecha']." / ".$obj['hora']), 0, 0, 'L');
			$this->Cell(10, 5, utf8_decode($obj['claveDepto']), 0, 0, 'C');
			$this->Cell(47, 5, utf8_decode($obj['condominio']), 0, 0, 'L');
			$this->Cell(50, 5, utf8_decode($obj['inquilino']), 0, 0, 'L');
			$this->Cell(30, 5, utf8_decode($obj['area']), 0, 0, 'L');
			$this->Cell(5, 5, utf8_decode($obj['ocasion']), 0, 0, 'C');
			$this->Cell(15, 5, utf8_decode("$ ".sprintf("%02s", $obj['monto'])), 0, 0, 'R');
			$this->Cell(15, 5, utf8_decode($obj['estado']), 0, 1, 'C');
		}
	}
	
	function Footer(){
		parent::Footer();
		
		// Go to 1.5 cm from bottom
	    $this->SetY(-15);
	    // Select Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Print centered page number
	    $this->Cell(0,10, utf8_decode('Pág '.$this->PageNo()), 0, 0, 'C');
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