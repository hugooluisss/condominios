<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 08:27:32
         compiled from "templates/plantillas/modulos/proveedores/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3696305265739375f38e6b6-77761457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f72edac1474a93b6b995eafdc9dc26213a349281' => 
    array (
      0 => 'templates/plantillas/modulos/proveedores/lista.tpl',
      1 => 1463416306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3696305265739375f38e6b6-77761457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5739375f42dec3_49600992',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5739375f42dec3_49600992')) {function content_5739375f42dec3_49600992($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblProveedores" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idProveedor'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" proveedor="<?php echo $_smarty_tpl->tpl_vars['row']->value['idProveedor'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>