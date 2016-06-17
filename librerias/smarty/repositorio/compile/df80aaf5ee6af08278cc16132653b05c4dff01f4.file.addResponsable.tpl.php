<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 12:59:46
         compiled from "templates/plantillas/modulos/estudiantes/addResponsable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197626187456e9a86d21c221-16909055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df80aaf5ee6af08278cc16132653b05c4dff01f4' => 
    array (
      0 => 'templates/plantillas/modulos/estudiantes/addResponsable.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197626187456e9a86d21c221-16909055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56e9a86d22c320_91624183',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e9a86d22c320_91624183')) {function content_56e9a86d22c320_91624183($_smarty_tpl) {?><form role="form" id="frmAddParentesco" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="form-group">
		<label for="txtNombre" class="col-lg-4">Nombre</label>
		<div class="col-lg-8">
			<input class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre(s)">
		</div>
	</div>
	<div class="form-group">
		<label for="txtApp" class="col-lg-4">Apellido Paterno</label>
		<div class="col-lg-8">
			<input class="form-control" id="txtApp" name="txtApp" placeholder="Apellido paterno">
		</div>
	</div>
	<div class="form-group">
		<label for="txtApm" class="col-lg-4">Apellido Materno</label>
		<div class="col-lg-8">
			<input class="form-control" id="txtApm" name="txtApm" placeholder="Apellido materno">
		</div>
	</div>
	<div class="form-group">
		<label for="txtOcupacion" class="col-lg-4">Ocupación</label>
		<div class="col-lg-8">
			<input class="form-control" id="txtOcupacion" name="txtOcupacion" placeholder="Ocupación">
		</div>
	</div>
	<div class="form-group">
		<label for="txtEmpresa" class="col-lg-4">Empresa</label>
		<div class="col-lg-8">
			<input class="form-control" id="txtEmpresa" name="txtEmpresa" placeholder="Empresa donde trabaja">
		</div>
	</div>
	<div class="form-group">
		<label for="txtTelefono" class="col-lg-4">Telefono</label>
		<div class="col-lg-5">
			<input class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Teléfono">
		</div>
		<div class="col-lg-3">
			<input class="form-control" id="txtExtension" name="txtExtension" placeholder="Extensión">
		</div>
	</div>
	<div class="form-group">
		<label for="txtPuesto" class="col-lg-4">Puesto</label>
		<div class="col-lg-8">
			<input class="form-control" id="txtPuesto" name="txtPuesto" placeholder="Puesto">
		</div>
	</div>
	<div class="form-group">
		<label for="txtTelefonoContacto" class="col-lg-4">Teléfono</label>
		<div class="col-lg-8">
			<input class="form-control" id="txtTelefonoContacto" name="txtTelefonoContacto" placeholder="Teléfono de contacto">
		</div>
	</div>
	<div class="form-group">
		<label for="txtCelular" class="col-lg-4">Celular</label>
		<div class="col-lg-8">
			<input class="form-control" id="txtCelular" name="txtCelular" placeholder="Celular">
		</div>
	</div>
	<div class="form-group">
		<label for="txtCorreo" class="col-lg-4">Correo electrónico</label>
		<div class="col-lg-8">
			<input class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Correo electrónico">
		</div>
	</div>
	<div class="box-footer">
			<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id"/>
			<input type="hidden" id="tipoParentesco"/>
	</div>
</form><?php }} ?>