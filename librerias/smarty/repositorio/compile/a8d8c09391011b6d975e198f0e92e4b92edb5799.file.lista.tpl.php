<?php /* Smarty version Smarty-3.1.11, created on 2016-05-24 11:58:21
         compiled from "templates/plantillas/modulos/cuidados/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21929088356e26332876f46-18872084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8d8c09391011b6d975e198f0e92e4b92edb5799' => 
    array (
      0 => 'templates/plantillas/modulos/cuidados/lista.tpl',
      1 => 1457984103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21929088356e26332876f46-18872084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56e263328e2dc1_84781025',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e263328e2dc1_84781025')) {function content_56e263328e2dc1_84781025($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblCuidados" class="table table-bordered table-hover">
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCuidado'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" cuidado="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCuidado'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>