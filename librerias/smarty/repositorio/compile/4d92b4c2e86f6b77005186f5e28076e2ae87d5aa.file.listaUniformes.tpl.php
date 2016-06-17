<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 00:17:21
         compiled from "templates/plantillas/modulos/ventaUniformes/listaUniformes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1725874465573c89af4ce654-81869867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d92b4c2e86f6b77005186f5e28076e2ae87d5aa' => 
    array (
      0 => 'templates/plantillas/modulos/ventaUniformes/listaUniformes.tpl',
      1 => 1463720497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1725874465573c89af4ce654-81869867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573c89af4f8a70_48153531',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573c89af4f8a70_48153531')) {function content_573c89af4f8a70_48153531($_smarty_tpl) {?><table id="tblUniformes" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Talla</th>
			<th>Precio</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['talla'];?>
</td>
			<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['precioventa'];?>
</td>
			<td class="text-right">
				<button type="button" class="btn btn-default" action="seleccionar" title="Seleccionar" producto='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
					<i class="fa fa-hand-pointer-o"></i>
				</button>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>