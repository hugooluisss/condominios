<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 08:35:19
         compiled from "templates/plantillas/modulos/planEstudios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1272951995573e8201a52628-55804460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7a7ae7b9372074eea3105cf8857302708766f61' => 
    array (
      0 => 'templates/plantillas/modulos/planEstudios/panel.tpl',
      1 => 1463750456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1272951995573e8201a52628-55804460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573e8201a8fd08_92829518',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573e8201a8fd08_92829518')) {function content_573e8201a8fd08_92829518($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Planes de estudios</h1>
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
						<label for="txtClave" class="col-lg-2">Clave</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtClave" name="txtClave">
						</div>
					</div>
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtNombre" name="txtNombre">
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