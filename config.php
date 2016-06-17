<?php
define('SISTEMA', 'Armoni House');
define('VERSION', 'v 1.0');
define('ALIAS', '');
define('AUTOR', 'Hugo Luis Santiago Altamirano');
define('EMAIL', 'hugooluisss@gmail.com');
define('EMAILSOPORTE', 'hugooluisss@gmail.com');
define('STATUS', 'En desarrollo');

define('LAYOUT_DEFECTO', 'layout/default.tpl');
define('LAYOUT_AJAX', 'layout/update.tpl');

#Login y su controlador
$conf['inicio'] = array(
	'descripcion' => '',
	'seguridad' => false,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('login.js'),
	'capa' => 'layout/login.tpl');

$conf['logout'] = array(
	'controlador' => 'login.php',
	#'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Salir del sistema',
	'seguridad' => false,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);
	
$conf['clogin'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Inicio de sesion',
	'seguridad' => false,
	'capa' => LAYOUT_AJAX);
	
$conf['bienvenida'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/bienvenida.tpl',
	'descripcion' => 'Bienvenida al sistema',
	'seguridad' => true,
	'capa' => LAYOUT_DEFECTO);

$conf['admonUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Administración de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('usuarios.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/lista.tpl',
	'descripcion' => 'Lista de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cusuarios'] = array(
	'controlador' => 'usuarios.php',
	'descripcion' => 'Controlador de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Datos de usuario desde el panel*/
$conf['usuarioDatosPersonales'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/datosPersonales.tpl',
	'descripcion' => 'Cambiar datos personales',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('datosUsuario.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['admonUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Administración de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('usuarios.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['panelPrincipal'] = array(
	#'controlador' => 'index.php',
	'vista' => 'inicio.tpl',
	'descripcion' => 'Vista del panel',
	'seguridad' => true,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);
	
#Estados
$conf['estados'] = array(
	'controlador' => 'estados.php',
	'vista' => 'estados/panel.tpl',
	'descripcion' => 'Administración de estados',
	'seguridad' => true,
	'js' => array('estado.class.js'),
	'jsTemplate' => array('estados.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['listaEstados'] = array(
	'controlador' => 'estados.php',
	'vista' => 'estados/lista.tpl',
	'descripcion' => 'Lista de estados',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cestados'] = array(
	'controlador' => 'estados.php',
	'descripcion' => 'Controlador de estados',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
#Areas
$conf['areas'] = array(
	'controlador' => 'areas.php',
	'vista' => 'areas/panel.tpl',
	'descripcion' => 'Administración de areas',
	'seguridad' => true,
	'js' => array('area.class.js'),
	'jsTemplate' => array('areas.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['listaAreas'] = array(
	'controlador' => 'areas.php',
	'vista' => 'areas/lista.tpl',
	'descripcion' => 'Lista de areas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['careas'] = array(
	'controlador' => 'areas.php',
	'descripcion' => 'Controlador de areas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

#Departamentos
$conf['departamentos'] = array(
	'controlador' => 'departamentos.php',
	'vista' => 'departamentos/panel.tpl',
	'descripcion' => 'Administración de departamentos',
	'seguridad' => true,
	'js' => array('departamento.class.js'),
	'jsTemplate' => array('departamentos.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['listaDepartamentos'] = array(
	'controlador' => 'departamentos.php',
	'vista' => 'departamentos/lista.tpl',
	'descripcion' => 'Lista de departamentos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cdepartamentos'] = array(
	'controlador' => 'departamentos.php',
	'descripcion' => 'Controlador de departamentos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>