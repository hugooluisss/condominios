<?php /* Smarty version Smarty-3.1.11, created on 2016-05-24 11:58:20
         compiled from "templates/plantillas/modulos/cuidados/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149411186356e2630472c208-96152917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f5effc4ebc3010838c750cf8306b3176d1c46da' => 
    array (
      0 => 'templates/plantillas/modulos/cuidados/panel.tpl',
      1 => 1457984103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149411186356e2630472c208-96152917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56e2630477ee83_51991411',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e2630477ee83_51991411')) {function content_56e2630477ee83_51991411($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración del catálogo de cuidados a estudiantes</h1>
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
						<div class="col-lg-4">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripcion" class="col-lg-2">Descripcion</label>
						<div class="col-lg-8">
							<textarea id="txtDescripcion" name="txtDescripcion" class="form-control"></textarea>
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