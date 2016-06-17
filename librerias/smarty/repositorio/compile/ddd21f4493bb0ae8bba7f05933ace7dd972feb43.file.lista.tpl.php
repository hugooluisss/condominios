<?php /* Smarty version Smarty-3.1.11, created on 2016-05-17 11:18:53
         compiled from "templates/plantillas/modulos/tipoprendas/tallas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24398821657392a82dd74b3-22840053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddd21f4493bb0ae8bba7f05933ace7dd972feb43' => 
    array (
      0 => 'templates/plantillas/modulos/tipoprendas/tallas/lista.tpl',
      1 => 1463416306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24398821657392a82dd74b3-22840053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57392a82e6ab88_21352512',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57392a82e6ab88_21352512')) {function content_57392a82e6ab88_21352512($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblTallas" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Talla</th>
					<th>Adicional</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idTalla'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['row']->value['adicional']);?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" talla="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTalla'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>