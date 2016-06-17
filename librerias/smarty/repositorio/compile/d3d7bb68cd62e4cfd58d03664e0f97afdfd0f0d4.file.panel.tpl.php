<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 13:00:49
         compiled from "templates/plantillas/modulos/optativas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35042480856f03f8a499061-94374841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3d7bb68cd62e4cfd58d03664e0f97afdfd0f0d4' => 
    array (
      0 => 'templates/plantillas/modulos/optativas/panel.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35042480856f03f8a499061-94374841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f03f8a527da2_78903786',
  'variables' => 
  array (
    'ciclos' => 0,
    'row' => 0,
    'niveles' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f03f8a527da2_78903786')) {function content_56f03f8a527da2_78903786($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de clases optativas</h1>
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
						<label for="selCiclo" class="col-lg-2">Ciclo</label>
						<div class="col-lg-3">
							<select id="selCiclo" name="selCiclo" class="form-control">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciclos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCiclo'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selNivel" class="col-lg-2">Nivel</label>
						<div class="col-lg-3">
							<select id="selNivel" name="selNivel" class="form-control">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['niveles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idNivel'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtNombre" name="txtNombre" autocomplete="off">
						</div>
					</div>
					<div class="form-group">
						<label for="txtResponsable" class="col-lg-2">Responsable</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtResponsable" name="txtResponsable" autocomplete="off">
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
</div>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).('/modulos/optativas/modal.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>