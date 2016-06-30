<?php
global $objModulo;
switch($objModulo->getId()){
	case 'reporteGeneral':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from estado");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("estados", $datos);
		
		$rs = $db->Execute("select * from departamento");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("departamentos", $datos);
		
		$rs = $db->Execute("select * from area");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("areas", $datos);
	break;
	case 'listaReporteGeneral':
		$db = TBase::conectaDB();
		$estado = $_POST['estado'] == ''?'%':$_POST['estado'];
		$departamento = $_POST['departamento'] == ''?'%':$_POST['departamento'];
		$area = $_POST['area'] == ''?'%':$_POST['area'];
		
		$fechaInicio = $_POST['fechaInicio'] == ''?date("Y-m-d"):$_POST['fechaInicio'];
		$fechaFin = $_POST['fechaFin'] == ''?date("Y-m-d"):$_POST['fechaFin'];
		
		$rs = $db->Execute("select *, b.clave as claveDepto, c.nombre as area, d.nombre as estado, e.comentario as motivo from infraccion a join departamento b using(idDepartamento) join area c using(idArea) join estado d using(idEstado) left join rechazada e using(idInfraccion) where idEstado like '".$estado."' and idDepartamento like '".$departamento."' and idArea like '".$area."' and fecha between '".$fechaInicio."' and '".$fechaFin."'");
		
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'creportes':
		switch($objModulo->getAction()){
			case 'generalExcel':
				require_once(getcwd()."/repositorio/excel/general.php");		
				$doc = new RGeneral();
				
				$db = TBase::conectaDB();
				$estado = $_POST['estado'] == ''?'%':$_POST['estado'];
				$departamento = $_POST['departamento'] == ''?'%':$_POST['departamento'];
				$area = $_POST['area'] == ''?'%':$_POST['area'];
				
				$fechaInicio = $_POST['fechaInicio'] == ''?date("Y-m-d"):$_POST['fechaInicio'];
				$fechaFin = $_POST['fechaFin'] == ''?date("Y-m-d"):$_POST['fechaFin'];
				
				$rs = $db->Execute("select *, b.clave as claveDepto, c.nombre as area, d.nombre as estado from infraccion a join departamento b using(idDepartamento) join area c using(idArea) join estado d using(idEstado) where idEstado like '".$estado."' and idDepartamento like '".$departamento."' and idArea like '".$area."' and fecha between '".$fechaInicio."' and '".$fechaFin."'");
				
				$datos = array();
				while(!$rs->EOF){
					array_push($datos, $rs->fields);
					$rs->moveNext();
				}

				$doc->generar($datos);
				
				$documento = $doc->output();
				$result = array("doc" => $documento, "band" => $documento <> '');
				
				print json_encode($result);
			break;
			case 'generalPDF':
				require_once(getcwd()."/repositorio/pdf/general.php");
				
				$obj = new RGeneral();
				$db = TBase::conectaDB();
				$estado = $_POST['estado'] == ''?'%':$_POST['estado'];
				$departamento = $_POST['departamento'] == ''?'%':$_POST['departamento'];
				$area = $_POST['area'] == ''?'%':$_POST['area'];
				
				$fechaInicio = $_POST['fechaInicio'] == ''?date("Y-m-d"):$_POST['fechaInicio'];
				$fechaFin = $_POST['fechaFin'] == ''?date("Y-m-d"):$_POST['fechaFin'];
				
				$rs = $db->Execute("select *, b.clave as claveDepto, c.nombre as area, d.nombre as estado from infraccion a join departamento b using(idDepartamento) join area c using(idArea) join estado d using(idEstado) where idEstado like '".$estado."' and idDepartamento like '".$departamento."' and idArea like '".$area."' and fecha between '".$fechaInicio."' and '".$fechaFin."'");
				
				$datos = array();
				while(!$rs->EOF){
					array_push($datos, $rs->fields);
					$rs->moveNext();
				}
				
				$obj->generar($datos);
				$documento = $obj->Output();
				
				
				if ($documento == '')
					$result = array("doc" => "", "band" => false);
				else
					$result = array("doc" => $documento, "band" => true);

				print json_encode($result);

			break;
		}
	break;
}