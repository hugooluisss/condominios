<?php /* Smarty version Smarty-3.1.11, created on 2016-03-25 12:03:18
         compiled from "templates/plantillas/modulos/permisos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74619798656f57d513db0d8-44530395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '191f0c9d4eaa0a0707638078857c9bc01ff8000f' => 
    array (
      0 => 'templates/plantillas/modulos/permisos/lista.tpl',
      1 => 1458928992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74619798656f57d513db0d8-44530395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f57d51469d31_62784037',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f57d51469d31_62784037')) {function content_56f57d51469d31_62784037($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblPermisos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Fecha</th>
					<th>Días</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idPermiso'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['dias'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" permiso="<?php echo $_smarty_tpl->tpl_vars['row']->value['idPermiso'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>