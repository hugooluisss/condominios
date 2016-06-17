<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 13:01:07
         compiled from "templates/plantillas/modulos/rutas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69550579556f2b72f561e95-60081798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '533de6686e66ad1bb98f57607b0f25dd245ca8c9' => 
    array (
      0 => 'templates/plantillas/modulos/rutas/lista.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69550579556f2b72f561e95-60081798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f2b72f5e1156_84352893',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f2b72f5e1156_84352893')) {function content_56f2b72f5e1156_84352893($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblRutas" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Costo</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idRuta'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['costo'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-primary btn-circle" action="inscritos" title="Inscritos" ruta='<?php echo $_smarty_tpl->tpl_vars['row']->value['idRuta'];?>
'><i class="fa fa-users"></i></button>
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" ruta="<?php echo $_smarty_tpl->tpl_vars['row']->value['idRuta'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>