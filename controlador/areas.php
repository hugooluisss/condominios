<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaAreas':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from area");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'careas':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TArea();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setIncisos($_POST['incisos']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TArea($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}