<?php /* Smarty version Smarty-3.1.11, created on 2016-05-24 21:33:52
         compiled from "templates/plantillas/modulos/reportes/ventas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6765483415744fe54a62fe5-29037932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd276699f52374fe1882c5dad26e32dc92939cf9f' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/ventas.tpl',
      1 => 1464143502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6765483415744fe54a62fe5-29037932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5744fe54a64346_00301061',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5744fe54a64346_00301061')) {function content_5744fe54a64346_00301061($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/davinci/librerias/smarty/plugins/modifier.date_format.php';
?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Reportes de ventas e inventario</h1>
	</div>
</div>

<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#inventarioUniformes">Inventario de uniformes</a>
			</h4>
		</div>
		<div id="inventarioUniformes" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2">
						<input type="button" class="btn btn-primary" value="Generar" id="btnEnviar">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#inventarioLibros">Inventario de libros</a>
			</h4>
		</div>
		<div id="inventarioLibros" class="panel-collapse collapse">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2">
						<input type="button" class="btn btn-primary" value="Generar" id="btnEnviar">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#ventas">Ventas</a>
			</h4>
		</div>
		<div id="ventas" class="panel-collapse collapse">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2">Fechas</div>
					<div class="col-md-4">
						<input type="text" id="txtInicio" name="txtInicio" value="<?php echo smarty_modifier_date_format(time(),"Y-m-d");?>
" />
						<div id="datepicker"></div>
					</div>
					<div class="col-md-4">
						<input type="text" id="txtFin" name="txtFin" value="<?php echo smarty_modifier_date_format(time(),"Y-m-d");?>
" />
						<div id="datepicker"></div>
					</div>
					<div class="col-md-2">
						<input type="button" class="btn btn-primary" value="Generar" id="btnEnviar">
					</div>
				</div>
			</div>
		</div>
	</div>

</div><?php }} ?>