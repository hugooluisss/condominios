<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 09:42:23
         compiled from "templates/plantillas/modulos/uniformes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:480841182573a08ce704831-77642580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07d45d4c1ffcffacd5f29f37294a2702f0d9f75f' => 
    array (
      0 => 'templates/plantillas/modulos/uniformes/panel.tpl',
      1 => 1463755342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '480841182573a08ce704831-77642580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573a08ce78e6b4_27913432',
  'variables' => 
  array (
    'proveedores' => 0,
    'row' => 0,
    'tipos' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a08ce78e6b4_27913432')) {function content_573a08ce78e6b4_27913432($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de Uniformes</h1>
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
							<input class="form-control" id="txtClave" name="txtClave" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtNombre" name="txtNombre" />
						</div>
					</div>
					<div class="form-group">
						<label for="selProveedor" class="col-lg-2">Proveedor</label>
						<div class="col-lg-4">
							<select id="selProveedor" name="selProveedor" class="form-control">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['proveedores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idProveedor'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selTipo" class="col-lg-2">Tipo</label>
						<div class="col-lg-4">
							<select id="selTipo" name="selTipo" class="form-control">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTipo'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

								<?php } ?>
							</select>
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

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/uniformes/existencias.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>