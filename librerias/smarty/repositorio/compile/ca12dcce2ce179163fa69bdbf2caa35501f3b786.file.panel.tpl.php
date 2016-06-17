<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 08:35:44
         compiled from "templates/plantillas/modulos/asignaturas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2011165360573e91621297e6-47173276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca12dcce2ce179163fa69bdbf2caa35501f3b786' => 
    array (
      0 => 'templates/plantillas/modulos/asignaturas/panel.tpl',
      1 => 1463750456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2011165360573e91621297e6-47173276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573e91621a4734_58236862',
  'variables' => 
  array (
    'nombrePlan' => 0,
    'grados' => 0,
    'row' => 0,
    'plan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573e91621a4734_58236862')) {function content_573e91621a4734_58236862($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Asignaturas <small><?php echo $_smarty_tpl->tpl_vars['nombrePlan']->value;?>
</small></h1>
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
						<label for="selEstado" class="col-lg-2">Grado</label>
						<div class="col-lg-3">
							<select id="selGrado" name="selGrado" class="form-control">
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
						<label for="txtClave" class="col-lg-2">Clave</label>
						<div class="col-lg-8">
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
					<input type="hidden" id="plan" value="<?php echo $_smarty_tpl->tpl_vars['plan']->value;?>
"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>