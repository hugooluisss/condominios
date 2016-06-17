<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 23:15:29
         compiled from "templates/plantillas/modulos/ventaUniformes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1681384806573c8090e84bd4-12125000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85ddeb79d66728fc1b20146a033c96c36378549c' => 
    array (
      0 => 'templates/plantillas/modulos/ventaUniformes/lista.tpl',
      1 => 1463771227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681384806573c8090e84bd4-12125000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573c8090ee8ff1_54576441',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573c8090ee8ff1_54576441')) {function content_573c8090ee8ff1_54576441($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblVentas" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Fecha</th>
					<th>Cliente</th>
					<th>Monto</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idVenta'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" venta="<?php echo $_smarty_tpl->tpl_vars['row']->value['idVenta'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>