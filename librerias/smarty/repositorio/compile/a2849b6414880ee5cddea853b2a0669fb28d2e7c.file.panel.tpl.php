<?php /* Smarty version Smarty-3.1.11, created on 2016-05-17 11:18:49
         compiled from "templates/plantillas/modulos/tipoprendas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76597740357356347e60473-47952817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2849b6414880ee5cddea853b2a0669fb28d2e7c' => 
    array (
      0 => 'templates/plantillas/modulos/tipoprendas/panel.tpl',
      1 => 1463416306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76597740357356347e60473-47952817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57356347e9af35_58886746',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57356347e9af35_58886746')) {function content_57356347e9af35_58886746($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración del catálogo de tipo de prendas</h1>
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