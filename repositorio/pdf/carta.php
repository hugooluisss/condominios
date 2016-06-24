<?php
//require_once('Image_Barcode-1.1.0/Barcode.php');
/*
 * Created on 11/02/2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class RCarta extends tFPDF{
	public function RCarta(){
		parent::tFPDF('P', 'mm', 'Letter');
		$this->AddFont('Sans','', 'DejaVuSans.ttf', true);
		$this->AddFont('Sans','B', 'DejaVuSans-Bold.ttf', true);
		$this->AddFont('Sans','U', 'DejaVuSans-Oblique.ttf', true);
		$this->AddFont('Sans','BU', 'DejaVuSans-BoldOblique.ttf', true);
		$this->cleanFiles();
	}	
	
	public function generar($infraccion){
		$infraccion = new TInfraccion($infraccion);
		$this->AddPage();
		
		$this->SetFont('Arial', 'B', 14);
    	$this->Image('repositorio/formato/logo.jpg', 150, 10, 60, 70);
    	
		$this->Ln(10);
		$this->Cell(0, 6, utf8_decode(date("d")." de ".$this->getMes(date("m"))." de ".date("Y")), 0, 1, 'L');
		$this->Ln(10);
		$this->Cell(0, 6, utf8_decode("SANCIÓN OCASIONAL #".$infraccion->getOcasion()), 0, 1, 'C');
		$this->Ln(10);
		$this->Cell(0, 6, utf8_decode("RESIDENCIAL TAMARINDOS 130 P. EN C."), 0, 1, 'L');
		$this->Cell(0, 6, utf8_decode(strtoupper($infraccion->departamento->getInquilino())), 0, 1, 'L');
		$this->Cell(0, 6, utf8_decode("DEPARTAMENTO ".$infraccion->departamento->getClave()), 0, 1, 'L');
		$this->Cell(0, 6, utf8_decode("PRESENTE"), 0, 1, 'L');
		
		$this->Ln(10);
		
		$this->SetFont('Arial', '', 12);
    	$this->Cell(0, 6, utf8_decode("Estimado Residente(a) :"), 0, 1);
    	$this->Ln(6);
    	$this->MultiCell(0, 6, utf8_decode("Como es de su conocimiento a partir del día 2 de enero del 2015, entró en vigor el nuevo Reglamento del Condominio el cual fue aprobado por ustedes como Condóminos en la Asamblea el 11 de diciembre de 2014 conforme a Ley."), 0, 'J');
    	$this->Ln(6);
    	
    	$this->Write(6, utf8_decode("Por lo anterior, me permito informarle que el día "));
    	$this->SetFont('Arial', 'B', 12);
    	$this->Write(6, utf8_decode(date("d", strtotime($infraccion->getFecha()))." de ".$this->getMes(date("m", strtotime($infraccion->getFecha())))." de ".date("Y", strtotime($infraccion->getFecha()))));
    	$this->SetFont('Arial', '', 12);
    	$this->Write(6, utf8_decode(" infringió el Reglamento de "));
    	$this->SetFont('Arial', 'B', 12);
    	$this->Write(6, utf8_decode($infraccion->area->getNombre()));
    	$this->SetFont('Arial', '', 12);
    	$this->Write(6, utf8_decode(" en su artículo "));
    	$this->SetFont('Arial', 'B', 12);
    	$this->Write(6, utf8_decode($infraccion->getInciso()));
    	$this->SetFont('Arial', '', 12);
    	$this->Write(6, utf8_decode(", debido a que "));
    	$this->SetFont('Arial', 'B', 12);
    	$this->Write(6, utf8_decode($infraccion->getDescripcion()));
    	$this->SetFont('Arial', '', 12); 
    	$this->Ln(12);
    	$this->Write(6, utf8_decode("Por lo anterior, usted se hizo acreedor a una sanción económica de $"));
    	$this->SetFont('Arial', 'B', 12); 
    	$this->Write(6, utf8_decode($infraccion->getMonto()));
    	$this->SetFont('Arial', '', 12); 
    	$this->Write(6, utf8_decode(" pesos."));
    	$this->Ln(12);
    	$this->MultiCell(0, 6, utf8_decode("Lo invitamos a respetar el Reglamento, para evitar siguientes infracciones. \n \nAnexo.- recibo de pago, para que tenga a bien realizarlo antes de fin de mes."), 0, 'J');
    	$this->Ln(24);
    	$this->MultiCell(0, 6, utf8_decode("Atentamente, \n\n\nLa Administración"), 0, 'C');
		
		#Ficha de pago
		$this->AddPage();
		$this->SetFont('Arial', '', 10); 
		$this->MultiCell(0, 6, utf8_decode("PASEO DE LOS TAMARINDOS No. 130, COL. BOSQUES DE LAS LOMAS \nDELEGACION CUAJIMALPA, C.P. 05120, MEXICO, D.F."), 0, 'C');
		
		$this->SetFont('Arial', 'B', 14); 
		$this->Ln(6);
		$this->Cell(0, 6, utf8_decode("SANCIÓN OCASIONAL #".$infraccion->getOcasion()), 0, 1, 'C');
		$this->SetFont('Arial', '', 10); 
		$this->Cell(150, 6); $this->Cell(0, 6, utf8_decode("FECHA"), 0, 1, 'C');
		$this->SetTextColor(255, 0, 0);
		$this->Cell(150, 6); $this->Cell(0, 6, utf8_decode(date("d")." de ".$this->getMes(date("m"))." de ".date("Y")), 1, 1, 'C');
		$this->SetTextColor(0);
		$this->Ln(16);
		$this->SetFont('Arial', 'B', 10); 
		$this->Cell(50, 6, utf8_decode("NOMBRE:"), 0, 0, 'C');
		$this->SetTextColor(255, 0, 0);
		$this->Cell(0, 6, utf8_decode(strtoupper($infraccion->departamento->getCondominio()." / ".$infraccion->departamento->getInquilino())), 'B', 1, 'L');
		$this->SetTextColor(0);
		$this->Ln(8);
		$this->Cell(50, 6, utf8_decode("DEPARTAMENTO No: "), 0, 0, 'C');
		$this->SetTextColor(255, 0, 0);
		$this->Cell(30, 6, utf8_decode(strtoupper($infraccion->departamento->getClave())), 'B', 1, 'L');
		$this->Ln(8);
		$this->SetTextColor(0, 0, 0);
		$y = $this->getY();
		$x = $this->getX();
		$this->Cell(20, 6); $this->MultiCell(50, 6, utf8_decode("SANCIÓN POR INFRINGIR ".strtoupper($infraccion->area->getNombre())), 0, 'J');
		$this->SetTextColor(255, 0, 0);
		$this->setXY($x + 120, $y);
		$this->SetFont('Arial', 'B', 20); 
		$this->Cell(50, 12, utf8_decode("$ ".$infraccion->getMonto()), 1, 0, 'C');
		
		$this->SetFont('Arial', 'B', 8); 
		$this->SetY(-63);
		$this->SetTextColor(0);
		$this->Cell(120, 6); $this->Cell(0, 12, utf8_decode("FAVOR DE DEPOSITAR LA CANTIDAD EXACTA"), 1, 1, 'C');
		$this->Cell(80, 6); 
		$this->SetFont('Arial', 'B', 8); 
		$this->Cell(29, 6, utf8_decode("TOTAL A PAGAR"), 1, 0, 'C');
		$this->Cell(29, 6, utf8_decode("$ ").$infraccion->getMonto(), 1, 0, 'C');
		$this->SetTextColor(255, 0, 0);
		$this->Cell(29, 6, utf8_decode("REFERENCIA"), 1, 0, 'C');
		$this->SetTextColor(0);
		$this->Cell(29, 6, utf8_decode($infraccion->departamento->getReferencia()), 1, 1, 'C');
		$this->Ln(4);
		$this->SetTextColor(255, 0, 0);
		$this->SetFont('Arial', '', 7); 
		$this->MultiCell(0, 3, utf8_decode("REALICE SU PAGO EN BANORTE, CON CHEQUE O EFECTIVO A LA CUENTA No. 135129\nASUNTO. DEPÓSITO A CUENTA DE CONCENTRACIÓN  EMPRESARIAL\nCONCEPTO. CUOTA DE MANTENIMIENTO O CONSUMO DE GAS ETC.\nA NOMBRE DE: RESIDENCIAL TAMARINDOS 130 P EN C,O TRANSFERENCIA ELECTRÓNICA, CLABE: 072180000145261665\nFAVOR DE ENVIAR SU PAGO: E-MAIL. cobranza@solucorp.mx\nLES RECORDAMOS QUE POR SEGURIDAD Y TRANSPARENCIA NO SE RECIBE EFECTIVO, SIN EXCEPCIÓN\n"), 0, 'C');
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