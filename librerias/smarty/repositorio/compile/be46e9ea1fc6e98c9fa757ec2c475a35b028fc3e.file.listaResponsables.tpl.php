<?php /* Smarty version Smarty-3.1.11, created on 2016-05-17 11:19:35
         compiled from "templates/plantillas/modulos/ventaUniformes/listaResponsables.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224737459573aa33e666576-23892095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be46e9ea1fc6e98c9fa757ec2c475a35b028fc3e' => 
    array (
      0 => 'templates/plantillas/modulos/ventaUniformes/listaResponsables.tpl',
      1 => 1463496942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224737459573aa33e666576-23892095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573aa33e6e9099_72179016',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573aa33e6e9099_72179016')) {function content_573aa33e6e9099_72179016($_smarty_tpl) {?><table id="tblPadres" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Responsable</th>
			<th>Estudiante</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['estudiante'];?>
</td>
			<td class="text-right">
				<button type="button" class="btn btn-default" action="seleccionar" title="Seleccionar" responsable='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
					<i class="fa fa-hand-pointer-o"></i>
				</button>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>