<?php /* Smarty version Smarty-3.1.11, created on 2016-06-17 12:23:33
         compiled from "templates/plantillas/modulos/departamentos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49545437157642dbde2c2f1-61771384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd72fa66b2fceac1968b218d57e56ee6e85e4352' => 
    array (
      0 => 'templates/plantillas/modulos/departamentos/panel.tpl',
      1 => 1466184212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49545437157642dbde2c2f1-61771384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57642dbde786b0_15511861',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57642dbde786b0_15511861')) {function content_57642dbde786b0_15511861($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Departamentos</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label for="txtClave" class="col-lg-2">Clave</label>
						<div class="col-lg-4">
							<input class="form-control" id="txtClave" name="txtClave" maxlength="10">
						</div>
					</div>
					<div class="form-group">
						<label for="txtCondominio" class="col-lg-2">Condominio <small>(Clave)</small></label>
						<div class="col-lg-8">
							<input class="form-control" id="txtCondominio" name="txtCondominio" value="" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="txtUbicacion" class="col-lg-2">Ubicación</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtUbicacion" name="txtUbicacion" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="txtInquilino" class="col-lg-2">Inquilino</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtInquilino" name="txtInquilino" value="" placeholder="Nombre completo">
						</div>
					</div>
					<div class="form-group">
						<label for="txtCorreo" class="col-lg-2">Correo</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtCorreo" name="txtCorreo" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="txtReferencia" class="col-lg-2">Referencia</label>
						<div class="col-lg-1">
							<input class="form-control" id="txtReferencia" name="txtReferencia" value="">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>