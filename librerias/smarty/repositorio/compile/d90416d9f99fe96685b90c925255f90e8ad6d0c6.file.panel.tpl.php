<?php /* Smarty version Smarty-3.1.11, created on 2016-06-16 23:05:28
         compiled from "templates/plantillas/modulos/estados/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1667239845576373627b1512-03077349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd90416d9f99fe96685b90c925255f90e8ad6d0c6' => 
    array (
      0 => 'templates/plantillas/modulos/estados/panel.tpl',
      1 => 1466136248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1667239845576373627b1512-03077349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57637362808ff3_08392356',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57637362808ff3_08392356')) {function content_57637362808ff3_08392356($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Definición de estados de infracciones</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Modificar</a></li>
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
						<label for="txtColor" class="col-lg-2">Color</label>
						<div class="col-lg-4">
							<input class="form-control" id="txtColor" name="txtColor">
						</div>
					</div>
					<div class="form-group">
						<label for="selTermino" class="col-lg-2">¿Es de termino?</label>
						<div class="col-lg-8">
							<select id="selTermino" name="selTermino">
								<option value="N">No
								<option value="S">Si
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