<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 22:31:28
         compiled from "templates/plantillas/modulos/libros/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1521840205573f5aba4c1ee5-90041213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80390529d9d4dc34eb3891e683965578c33be1bd' => 
    array (
      0 => 'templates/plantillas/modulos/libros/panel.tpl',
      1 => 1463801487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1521840205573f5aba4c1ee5-90041213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573f5aba5c3b96_39547199',
  'variables' => 
  array (
    'editoriales' => 0,
    'row' => 0,
    'asignaturas' => 0,
    'plan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573f5aba5c3b96_39547199')) {function content_573f5aba5c3b96_39547199($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Inventario de Libros</h1>
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
						<label for="selEditorial" class="col-lg-2">Editorial</label>
						<div class="col-lg-3">
							<select id="selEditorial" name="selEditorial" class="form-control">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['editoriales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idEditorial'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selAsignatura" class="col-lg-2">Asignaturas</label>
						<div class="col-lg-6">
							<select id="selAsignatura" name="selAsignatura" class="form-control">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['asignaturas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idAsignatura'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value['nivel'];?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value['grado'];?>

								<?php } ?>
							</select>
						</div>
					</div>
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
					<div class="form-group">
						<label for="txtLista" class="col-lg-2">Precio de lista</label>
						<div class="col-lg-2">
							<input class="form-control text-right" id="txtLista" name="txtLista" placeholder="De lista" value="0.00"/>
						</div>
					</div>
					<div class="form-group">
						<label for="txtVenta" class="col-lg-2">Precio de venta</label>
						<div class="col-lg-2">
							<input class="form-control text-right" id="txtVenta" name="txtVenta" placeholder="De venta" value="0.00"/>
						</div>
					</div>
					<div class="form-group">
						<label for="txtExistencias" class="col-lg-2">Existencias</label>
						<div class="col-lg-2">
							<input class="form-control text-right" id="txtExistencias" name="txtExistencias" placeholder="Existencias" value="0"/>
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