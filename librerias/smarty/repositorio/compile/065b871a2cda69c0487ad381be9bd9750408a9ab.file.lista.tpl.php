<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 13:00:52
         compiled from "templates/plantillas/modulos/optativas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142625214556f04698a62078-54067528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '065b871a2cda69c0487ad381be9bd9750408a9ab' => 
    array (
      0 => 'templates/plantillas/modulos/optativas/lista.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142625214556f04698a62078-54067528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f04698aed3b7_87215228',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f04698aed3b7_87215228')) {function content_56f04698aed3b7_87215228($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblOptativas" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Responsable</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idOptativa'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['responsable'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-primary btn-circle" action="inscritos" title="Inscritos" optativa='<?php echo $_smarty_tpl->tpl_vars['row']->value['idOptativa'];?>
'><i class="fa fa-users"></i></button>
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" optativa="<?php echo $_smarty_tpl->tpl_vars['row']->value['idOptativa'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>