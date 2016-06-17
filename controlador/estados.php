<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaEstados':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from estado");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cestados':
		switch($objModulo->getAction()){
			case 'update':
				$obj = new TEstado();
				
				$obj->setId($_POST['id']);
				$obj->setColor($_POST['color']);
				$obj->isTerminal($_POST['termino']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
		}
	break;
}