<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 08:36:33
         compiled from "templates/plantillas/modulos/editoriales/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:497700656573e97bbb372f9-05590150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f275e87f29532d44389c88e2b923003950112dc' => 
    array (
      0 => 'templates/plantillas/modulos/editoriales/lista.tpl',
      1 => 1463750456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497700656573e97bbb372f9-05590150',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573e97bbb95511_72925182',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573e97bbb95511_72925182')) {function content_573e97bbb95511_72925182($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblEditoriales" class="table table-bordered table-hover">
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idEditorial'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" editorial="<?php echo $_smarty_tpl->tpl_vars['row']->value['idEditorial'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>