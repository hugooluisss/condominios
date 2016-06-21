<?php
/**
* TInfraccion
* Infraccion
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TInfraccion{
	private $idInfraccion;
	public $departamento;
	public $estado;
	public $usuario;
	public $area;
	private $fecha;
	private $hora;
	private $servidor;
	private $camara;
	private $descripcion;
	private $inciso;
	private $ocasion;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TInfraccion($id = ''){
		$this->departamento = new TDepartamento;
		$this->estado = new TEstado;
		$this->usuario = new TUsuario;
		$this->area = new TArea;
		
		$this->setId($id);
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;

		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from infraccion where idInfraccion = ".$id);
		
		foreach($rs->fields as $field => $val){
			switch($field){
				case 'idDepartamento':
					$this->departamento = new TDepartamento($val);
				break;
				case 'idEstado':
					$this->estado = new TEstado($val);
				break;
				case 'idUsuario':
					$this->usuario = new TUsuario($val);
				break;
				case 'idArea':
					$this->area = new TArea($val);
				break;
				default:
					$this->$field = $val;
			}
		}
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idInfraccion;
	}
	
	/**
	* Establece el departamento a partir de su identificador
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDepartamento($id = ''){
		$this->departamento = new TDepartamento($id);
		return true;
	}
	
	/**
	* Establece el estado a partir de su identificador
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEstado($id = ''){
		$this->estado = new TEstado($id);
		return true;
	}
	
	/**
	* Establece el usuario a partir de su identificador
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setUsuario($id = ''){
		$this->usuario = new TUsuario($id);
		return true;
	}
	
	/**
	* Establece el area a partir de su identificador
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setArea($id = ''){
		$this->area = new TArea($id);
		return true;
	}
	
	/**
	* Establece la fecha
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFecha($val = ''){
		$this->fecha = $val == ''?date('Y-m-d'):$val;
		return true;
	}
	
	/**
	* Retorna la fecha
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFecha(){
		return $this->fecha;
	}
	
	/**
	* Establece la hora
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setHora($val = ''){
		$this->hora = $val == ''?date('H:i'):$val;
		return true;
	}
	
	/**
	* Retorna la hora
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getHora(){
		return $this->hora;
	}
	
	/**
	* Establece el numero de servidor
	*
	* @autor Hugo
	* @access public
	* @param int $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setServidor($val = 0){
		$this->servidor = $val;
		return true;
	}
	
	/**
	* Retorna el servidor
	*
	* @autor Hugo
	* @access public
	* @return int Numero
	*/
	
	public function getServidor(){
		return $this->servidor;
	}
	
	/**
	* Establece el número de cámara
	*
	* @autor Hugo
	* @access public
	* @param int $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCamara($val = 0){
		$this->camara = $val;
		return true;
	}
	
	/**
	* Retorna el número de cámara
	*
	* @autor Hugo
	* @access public
	* @return int Numero
	*/
	
	public function getCamara(){
		return $this->camara;
	}
	
	/**
	* Establece el número de inciso
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setInciso($val = ''){
		$this->inciso = $val;
		return true;
	}
	
	/**
	* Retorna el número de inciso
	*
	* @autor Hugo
	* @access public
	* @return string Numero
	*/
	
	public function getInciso(){
		return $this->inciso;
	}
	
	/**
	* Establece la descripcion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDescripcion($val = ''){
		$this->descripcion = $val;
		return true;
	}
	
	/**
	* Retorna la descripcion
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	/**
	* Establece el monto
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMonto(){
		$db = TBase::conectaDB();
		if ($this->getFecha() == '') return false;
		#if ($this->monto <> '') return true;
		
		#el periodo inicia el dia 25 y termina el 24 del siguiente
		$dia = date("d");
		$now = new DateTime;
		$inicio = new DateTime;
		$fin = new DateTime;
		if ($now->format("d") < 25)
			$inicio->sub(new DateInterval("P1M"));
		else
			$fin->add(new DateInterval("P1M"));
		
		$rs = $db->Execute("select count(*) as total from infraccion where idDepartamento = ".$this->departamento->getId()." and fecha between '".$inicio->format("Y-m-")."25' and '".$fin->format("Y-m-")."24' and idEstado = 2 and idArea = ".$this->area->getId()." and inciso = '".$this->getInciso()."' and not idInfraccion = '".$this->getId()."'");
		
		switch($rs->fields['total']){
			case 0: #es la primera vez
				$this->ocasion = 1;
				$this->monto = $this->area->getCuota() * .1;
			break;
			case 1: #con esta sería la segunda vez
				$this->ocasion = 2;
				$this->monto = $this->area->getCuota() * .5;
			break;
			default:
				$this->ocasion = $rs->fields['total'] + 1;
				$this->monto = $this->area->getCuota();
		}
		
		return true;
	}
	
	/**
	* Retorna la descripcion
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMonto(){
		return $this->monto;
	}
	
	/**
	* Retorna el número de ocasión
	*
	* @autor Hugo
	* @access public
	* @return int Número
	*/
	
	public function getOcasion(){
		return $this->ocasion;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->departamento->getId() == '') return false;
		if ($this->estado->getId() == '') return false;
		if ($this->usuario->getId() == '') return false;
		if ($this->area->getId() == '') return false;
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$this->setMonto();
			$rs = $db->Execute("INSERT INTO infraccion(idDepartamento, idEstado, idUsuario, idArea, monto) VALUES(".$this->departamento->getId().", ".$this->estado->getId().", ".$this->usuario->getId().", ".$this->area->getId().", ".$this->getMonto().");");
			if (!$rs) return false;
				
			$this->idInfraccion = $db->Insert_ID();
		}		
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE infraccion
			SET
				idDepartamento = ".$this->departamento->getId().",
				idEstado = ".$this->estado->getId().",
				idArea = ".$this->area->getId().",
				fecha = '".$this->getFecha()."',
				hora = '".$this->getHora()."',
				servidor = '".$this->getServidor()."',
				camara = '".$this->getCamara()."',
				inciso = '".$this->getInciso()."',
				descripcion = '".$this->getDescripcion()."',
				monto = ".$this->getMonto().",
				ocasion = ".$this->getOcasion()."
			WHERE idInfraccion = ".$this->getId());
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from infraccion where idInfraccion = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>