<?php
/**
* Tarea
* Corresponde a las áreas del condominio, tambien puede hacer referencia a los reglamentos ya que estos son por área
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TArea{
	private $idArea;
	private $nombre;
	private $incisos;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TArea($id = ''){
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
		$rs = $db->Execute("select * from area where idArea = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
		
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
		return $this->idArea;
	}
	
	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNombre($val = ''){
		$this->nombre = $val;
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Establece la cuota
	*
	* @autor Hugo
	* @access public
	* @param float $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setIncisos($val = 0){
		$this->incisos = $val;
		return true;
	}
	
	/**
	* Retorna la cuota
	*
	* @autor Hugo
	* @access public
	* @return float Texto
	*/
	
	public function getIncisos(){
		return $this->incisos == ''?0:$this->incisos;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO area(nombre) VALUES('".$this->getNombre()."');");
			if (!$rs) return false;
				
			$this->idArea = $db->Insert_ID();
		}		
		
		if ($this->getId() == '')
			return false;

			
		$rs = $db->Execute("UPDATE area
			SET
				nombre = '".$this->getNombre()."',
				incisos = '".$this->getIncisos()."'
			WHERE idArea = ".$this->getId());
			
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
		$rs = $db->Execute("delete from area where idArea = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>