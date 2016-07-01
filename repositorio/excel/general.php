<?php
require_once('Spreadsheet/Excel/Writer.php');

class RGeneral{
	private $libro;
	private $mes;
	private $anio;
	
	public function RGeneral(){
		$this->cleanFiles();
		$file = "temporal/".basename(tempnam("temporal/", 'tmp'));
		rename($file, $file.'.xls');
		$file .= '.xls';
		
		$this->libro = new Spreadsheet_Excel_Writer($file);
		$this->file = $file;
		
		return true;
	}
	
	private function cleanFiles(){
    	$t = time();
    	$dir = "temporal";
    	$h = opendir($dir);
    	while($file=readdir($h)){
        	if(substr($file,0,3)=='tmp' && substr($file,-4)=='.xls'){
         	$path = $dir.'/'.$file;
         	if($t-filemtime($path)>3600)
             	@unlink($path);
        	}
    	}
    	closedir($h);
	}
	
	public function getMesLetra(){
		if ($this->getMes() == '') return false;
		
		$mes = array(
			1  => "Enero",
			2  => "Febrero",
			3  => "Marzo",
			4  => "Abril",
			5  => "Mayo",
			6  => "Junio",
			7  => "Julio",
			8  => "Agosto",
			9  => "Septiembre",
			10 => "Octubre",
			11 => "Noviembre",
			12 => "Diciembre"
		);
		
		return $mes[$this->getMes()];
	}
	
	public function generar($datos){
		$hoja = &$this->libro->addWorksheet();
		
		$head = &$this->libro->addFormat(array('Size' => 8,
			'bold' => 1,
			'Color' => 'red'));
		$this->libro->setCustomColor(15, 192, 192, 192);
				
		$titulo = &$this->libro->addFormat(array('Size' => 8,
			'bold' => 1,
			"Align" => "center",
			"border" => 1,
			"FgColor" => 15));
			
		$encabezado = &$this->libro->addFormat(array('Size' => 10,
			'bold' => 1,
			"Align" => "center",
			"FgColor" => 15));
			
		$hoja->write(2, 1, utf8_decode("REPORTE GENERAL DE INFRACCIONES"), $encabezado); $hoja->mergeCells(2, 1, 2, 9);
		$hoja->write(3, 1, utf8_decode("Generado el: ".date("Y-m-d")), $head); $hoja->mergeCells(3, 1, 3, 9);
			
		$titulo->setAlign("vcenter");
		
		$db = TBase::conectaDB();
		
		$hoja->write(4, 1, utf8_decode("Fecha"), $titulo);
		$hoja->write(4, 2, utf8_decode("Hora"), $titulo);
		$hoja->write(4, 3, utf8_decode("Departamento"), $titulo);
		$hoja->write(4, 4, utf8_decode("Condominio"), $titulo);
		$hoja->write(4, 5, utf8_decode("Inquilino"), $titulo);
		$hoja->write(4, 6, utf8_decode("Reglamento / Área"), $titulo);
		$hoja->write(4, 7, utf8_decode("Inciso"), $titulo);
		$hoja->write(4, 8, utf8_decode("Estado"), $titulo);
		$hoja->write(4, 9, utf8_decode("Monto"), $titulo);
		
		$datosStyle = &$this->libro->addFormat(array('Size' => 8,
			"border" => 1));
		
		$y = 5;
		foreach($datos as $obj){	
			$hoja->write($y, 1, utf8_decode($obj['fecha']), $datosStyle);
			$hoja->write($y, 2, utf8_decode($obj['hora']), $datosStyle);
			$hoja->write($y, 3, utf8_decode($obj['claveDepto']), $datosStyle);
			$hoja->write($y, 4, utf8_decode($obj['condominio']), $datosStyle);
			$hoja->write($y, 5, utf8_decode($obj['inquilino']), $datosStyle);
			$hoja->write($y, 6, utf8_decode($obj['area']), $datosStyle);
			$hoja->write($y, 7, utf8_decode($obj['inciso']), $datosStyle);
			$hoja->write($y, 8, utf8_decode($obj['estado']), $datosStyle);
			$hoja->write($y, 9, utf8_decode($obj['monto']), $datosStyle);
			$y++;
		}
				
		return true;
	}
	
	public function output(){
		if($this->generar())
			$this->libro->close();
		
		chmod($this->file, 0555);
		return $this->file;
	}
}
?>