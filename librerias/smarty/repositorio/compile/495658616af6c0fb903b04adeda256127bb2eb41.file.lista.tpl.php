<?php /* Smarty version Smarty-3.1.11, created on 2016-05-17 11:18:50
         compiled from "templates/plantillas/modulos/tipoprendas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:576725765735637f8104a1-29771903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '495658616af6c0fb903b04adeda256127bb2eb41' => 
    array (
      0 => 'templates/plantillas/modulos/tipoprendas/lista.tpl',
      1 => 1463416306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '576725765735637f8104a1-29771903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5735637f8d5fe6_61647777',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5735637f8d5fe6_61647777')) {function content_5735637f8d5fe6_61647777($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblTipos" class="table table-bordered table-hover">
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idTipo'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="tallas" title="Tallas" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>T</button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" tipo="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTipo'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>