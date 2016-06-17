<?php /* Smarty version Smarty-3.1.11, created on 2016-03-15 13:47:15
         compiled from "templates/plantillas/modulos/ciclos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178282699456e245494c06a8-54248963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a2f8836daea7a3e2ba62e4a78ceaa222e70f294' => 
    array (
      0 => 'templates/plantillas/modulos/ciclos/panel.tpl',
      1 => 1457984103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178282699456e245494c06a8-54248963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56e245494fcdb2_42038508',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e245494fcdb2_42038508')) {function content_56e245494fcdb2_42038508($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de ciclos escolares</h1>
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
						<label for="selEstado" class="col-lg-2">Estado</label>
						<div class="col-lg-3">
							<select id="selEstado" name="selEstado">
								<option value="A">Activo
								<option value="C">Cerrado
							</select>
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