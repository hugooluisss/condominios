<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 08:27:32
         compiled from "templates/plantillas/modulos/proveedores/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304300266573934d4de2229-98358959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f469fa01bec1f8feefa1e48ef437e315fa45c86' => 
    array (
      0 => 'templates/plantillas/modulos/proveedores/panel.tpl',
      1 => 1463416306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304300266573934d4de2229-98358959',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573934d4e1ab76_68294217',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573934d4e1ab76_68294217')) {function content_573934d4e1ab76_68294217($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de proveedores</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
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
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtTelefono" class="col-lg-2">Teléfono</label>
						<div class="col-lg-4">
							<input class="form-control" id="txtTelefono" name="txtTelefono">
						</div>
					</div>
					<div class="form-group">
						<label for="txtEmail" class="col-lg-2">Email</label>
						<div class="col-lg-4">
							<input class="form-control" id="txtEmail" name="txtEmail">
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