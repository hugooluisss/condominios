<?php /* Smarty version Smarty-3.1.11, created on 2016-05-24 11:58:34
         compiled from "templates/plantillas/modulos/grupos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113890747556e25416c7d318-43556806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b98a8b5d7ce22bcedca2c6700d7dac141f049564' => 
    array (
      0 => 'templates/plantillas/modulos/grupos/panel.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113890747556e25416c7d318-43556806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56e25416cd0832_22691430',
  'variables' => 
  array (
    'ciclos' => 0,
    'row' => 0,
    'grados' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e25416cd0832_22691430')) {function content_56e25416cd0832_22691430($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de grupos</h1>
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
							<select id="selCiclo" name="selCiclo">
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
						<label for="selGrado" class="col-lg-2">Nivel</label>
						<div class="col-lg-3">
							<select id="selGrado" name="selGrado">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idGrado'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nivel'];?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

								<?php } ?>
							</select>
						</div>
					</div>
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
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).('/modulos/grupos/winAsistencia.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).('/modulos/grupos/winImpresion.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>