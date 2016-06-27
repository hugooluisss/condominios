<?php
global $objModulo;
$repositorio = "repositorio/infracciones/";
$url_repo = $ini['sistema']['url'].$repositorio.($_GET['infraccion'] == ''?$_POST['infraccion']:$_GET['infraccion']).'/';
				
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
	case 'listaAutorizaciones':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select *, b.clave as claveDepto, c.nombre as area from infraccion a join departamento b using(idDepartamento) join area c using(idArea) join estado d using(idEstado) where (idEstado = 1 and fecha between '".(date(Y)-1).date('-m-d')."' and now()) or idEstado = 2");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'listaPorPagar':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select *, b.clave as claveDepto, c.nombre as area from infraccion a join departamento b using(idDepartamento) join area c using(idArea) join estado d using(idEstado) where idEstado = 2");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'listaInfraccionesReactivar':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select *, b.clave as claveDepto, c.nombre as area, d.nombre as estado from infraccion a join departamento b using(idDepartamento) join area c using(idArea) join estado d using(idEstado) where idEstado in (2, 3, 4)");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'listaImagenes':
		$directorio = scandir($repositorio.$_GET['infraccion'].'/');
		$imgs = array();
		foreach($directorio as $archivo){
			if (! ($archivo == '.' or $archivo == '..' or $archivo == 'thumbnail')){
				$img = array();
				$img['nombre'] = $archivo;
				$img['miniatura'] = $url_repo."thumbnail/".$archivo;
				$img['real'] = $url_repo.$archivo;
				
				array_push($imgs, $img);
			}
		}
		
		$smarty->assign("lista", $imgs);
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
			case 'autorizar':
				$obj = new TInfraccion($_POST['id']);
				$obj->estado->setId(2);
				$obj->setMonto();
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'rechazar':
				$obj = new TInfraccion($_POST['id']);
				$obj->estado->setId(3);
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'pagar':
				$obj = new TInfraccion($_POST['id']);
				$obj->estado->setId(4);
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'registrada':
				$obj = new TInfraccion($_POST['id']);
				$obj->estado->setId(1);
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'upload':
				$upload_handler = new UploadHandler(array(
					"upload_dir" => $repositorio.$_GET['infraccion'].'/',
					"upload_url" => $url_repo
				));
			break;
			case 'delImagen':
				if (unlink($repositorio.($_GET['infraccion'] == ''?$_POST['infraccion']:$_GET['infraccion']).'/'.$_POST['nombre'])){
					unlink($repositorio.($_GET['infraccion'] == ''?$_POST['infraccion']:$_GET['infraccion']).'/thumbnail/'.$_POST['nombre']);
					echo json_encode(array("band" => true));
				}else
					echo json_encode(array("band" => false, "mensaje" => "No se pudo borrar el archivo"));
			break;
			case 'generarCarta':
				require_once(getcwd()."/repositorio/pdf/carta.php");
				
				$obj = new RCarta();
				$obj->generar($_POST['id']);
				$documento = $obj->Output();
				
				
				if ($documento == '')
					$result = array("doc" => "", "band" => false);
				else
					$result = array("doc" => $documento, "band" => true);

				print json_encode($result);
			break;
			case 'sendMail':
				$infraccion = new TInfraccion($_POST["id"]);
				
				if ($infraccion->departamento->getCorreo() == '')
					echo json_encode(array("band" => false, "email" => ""));
				else{
					$email = new TMail;
					$email->setTema("Infracción");
					$correos = array();
					foreach(explode(",", $infraccion->departamento->getCorreo()) as $correo){
						foreach(explode(" ", $correo) as $correo2){
							if ($correo2 <> ''){
								array_push($correos, $correo2);
								$email->setDestino($correo2, utf8_decode($infraccion->departamento->getCondominio().' - '.$infraccion->departamento->getInquilino()));
							}
						}
					}
					
					$db = TBase::conectaDB();
					$rs = $db->Execute("select * from configuracion where clave = 'correoGerente'");
					if ($rs->fields['valor'] <> '')
						$email->copiaOculta($rs->fields['valor'], "Gerente");
						
					$email->adjuntar($_POST['pdf']);
					$datos = array();
					$datos['inquilino'] = $infraccion->departamento->getCondominio().' - '.$infraccion->departamento->getInquilino();
					
					$email->setBodyHTML(utf8_decode($email->construyeMail(file_get_contents("repositorio/email/autorizada.txt"), $datos)));
					echo json_encode(array("band" => $email->send(), "email" => $infraccion->departamento->getCorreo(), "correos" => $correos));
				}
			break;
		}
	break;
}