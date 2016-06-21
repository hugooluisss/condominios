<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaDepartamentos':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from departamento");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cdepartamentos':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TDepartamento();
				
				$obj->setId($_POST['id']);
				$obj->setInquilino($_POST['inquilino']);
				$obj->setClave($_POST['clave']);
				$obj->setCondominio($_POST['condominio']);
				$obj->setCorreo($_POST['correo']);
				$obj->setReferencia($_POST['referencia']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TDepartamento($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'validaClave':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select idDepartamento from departamento where clave = '".$_POST['txtClave']."' and not idDepartamento = '".$_POST['id']."'");
				
				echo $rs->EOF?"true":"false";
			break;
		}
	break;
}