<?php /* Smarty version Smarty-3.1.11, created on 2016-06-21 20:16:52
         compiled from "templates/plantillas/modulos/areas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7252802115764101eb6a2d7-94823047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd398945fb0b432fc6a68cce4ac83cdb9d95d796' => 
    array (
      0 => 'templates/plantillas/modulos/areas/panel.tpl',
      1 => 1466554258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7252802115764101eb6a2d7-94823047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5764101eb840c9_85000113',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5764101eb840c9_85000113')) {function content_5764101eb840c9_85000113($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Áreas/Reglamentos</h1>
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
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtIncisos" class="col-lg-2">Incisos</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtIncisos" name="txtIncisos" value="1">
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