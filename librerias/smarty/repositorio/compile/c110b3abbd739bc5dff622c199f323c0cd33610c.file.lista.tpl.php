<?php /* Smarty version Smarty-3.1.11, created on 2016-06-17 12:07:20
         compiled from "templates/plantillas/modulos/departamentos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80780369857642dbf8023a6-28992760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c110b3abbd739bc5dff622c199f323c0cd33610c' => 
    array (
      0 => 'templates/plantillas/modulos/departamentos/lista.tpl',
      1 => 1466183238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80780369857642dbf8023a6-28992760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57642dbf868593_00776394',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57642dbf868593_00776394')) {function content_57642dbf868593_00776394($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblLista" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Clave</th>
					<th>Condominio</th>
					<th>Inquilino</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idDepartamento'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['condominio'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['inquilino'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador='<?php echo $_smarty_tpl->tpl_vars['row']->value['idDepartamento'];?>
'><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>