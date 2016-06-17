<?php
/**
* TDepartamento
* Se refiere al espacio donde viven los inquilinos
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TDepartamento{
	private $idCondominio;
	private $clave;
	private $condominio;
	private $ubicacion;
	private $inquilino;
	private $correo;
	private $referencia;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TDepartamento($id = ''){
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
		$rs = $db->Execute("select * from departamento where idDepartamento = ".$id);
		
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
		return $this->idDepartamento;
	}
	
	/**
	* Establece la clave
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setClave($val = ''){
		$this->clave = $val;
		
		return true;
	}
	
	/**
	* Retorna la clave
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getClave(){
		return $this->clave;
	}
	
	/**
	* Establece la clave del condominio
	*
	* @autor Hugo
	* @access public
	* @param float $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCondominio($val = ''){
		$this->condominio = $val;
		return true;
	}
	
	/**
	* Retorna la clave del condominio
	*
	* @autor Hugo
	* @access public
	* @return float Texto
	*/
	
	public function getCondominio(){
		return $this->condominio;
	}
	
	/**
	* Establece la ubicacion
	*
	* @autor Hugo
	* @access public
	* @param float $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setUbicacion($val = ''){
		$this->ubicacion = $val;
		return true;
	}
	
	/**
	* Retorna la ubicacion
	*
	* @autor Hugo
	* @access public
	* @return float Texto
	*/
	
	public function getUbicacion(){
		return $this->ubicacion;
	}
	
	/**
	* Establece la referencia para los pagos
	*
	* @autor Hugo
	* @access public
	* @param float $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setReferencia($val = ''){
		$this->referencia = $val;
		return true;
	}
	
	/**
	* Retorna la ubicacion
	*
	* @autor Hugo
	* @access public
	* @return float Texto
	*/
	
	public function getReferencia(){
		return $this->referencia;
	}
	
	/**
	* Establece el nombre del inquilino
	*
	* @autor Hugo
	* @access public
	* @param float $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setInquilino($val = ''){
		$this->inquilino = $val;
		return true;
	}
	
	/**
	* Retorna el nombre del inquilino
	*
	* @autor Hugo
	* @access public
	* @return float Texto
	*/
	
	public function getInquilino(){
		return $this->inquilino;
	}
	
	/**
	* Establece el correo electrónico a donde se envian los reportes
	*
	* @autor Hugo
	* @access public
	* @param float $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCorreo($val = ''){
		$this->correo = $val;
		return true;
	}
	
	/**
	* Retorna el correo electrónico
	*
	* @autor Hugo
	* @access public
	* @return float Texto
	*/
	
	public function getCorreo(){
		return $this->correo;
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
			$rs = $db->Execute("INSERT INTO departamento(clave) VALUES('".$this->getClave()."');");
			if (!$rs) return false;
				
			$this->idDepartamento = $db->Insert_ID();
		}		
		
		if ($this->getId() == '')
			return false;

			
		$rs = $db->Execute("UPDATE departamento
			SET
				clave = '".$this->getClave()."',
				condominio = '".$this->getCondominio()."',
				ubicacion = '".$this->getUbicacion()."',
				inquilino = '".$this->getInquilino()."',
				correo = '".$this->getCorreo()."',
				referencia = '".$this->getReferencia()."'
			WHERE idDepartamento = ".$this->getId());
			
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
		$rs = $db->Execute("delete from departamento where idDepartamento = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>