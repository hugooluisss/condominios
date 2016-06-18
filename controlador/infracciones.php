<?php
global $objModulo;
switch($objModulo->getId()){
	case 'registroInfracciones':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from departamento");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("departamentos", $datos);
		
		$rs = $db->Execute("select * from area");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("areas", $datos);
	break;
	case 'listaInfraccionesRegistradas':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select *, b.clave as claveDepto, c.nombre as area from infraccion a join departamento b using(idDepartamento) join area c using(idArea) where idEstado = 1");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cinfracciones':
		switch($objModulo->getAction()){
			case 'registrar':
				global $userSesion;
				$obj = new TInfraccion();
				
				$obj->setId($_POST['id']);
				$obj->setDepartamento($_POST['departamento']);
				$obj->setEstado(1); #siempre es uno cuando se registra la 
				$obj->setArea($_POST['area']);
				$obj->setFecha($_POST['fecha']);
				$obj->setHora($_POST['hora']);
				$obj->setServidor($_POST['servidor']);
				$obj->setCamara($_POST['camara']);
				$obj->setDescripcion($_POST['descripcion']);
				$obj->setUsuario($userSesion->getId());
				$obj->setInciso($_POST['inciso']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TInfraccion($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}