<?php /* Smarty version Smarty-3.1.11, created on 2016-06-17 11:28:30
         compiled from "templates/plantillas/modulos/condominios/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:876033133576423081d5618-32507319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ca87c2f5b02fdc18a8db9cc193375134d5fcd59' => 
    array (
      0 => 'templates/plantillas/modulos/condominios/lista.tpl',
      1 => 1466180907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '876033133576423081d5618-32507319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_576423081fff27_18147082',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576423081fff27_18147082')) {function content_576423081fff27_18147082($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblLista" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Clave</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCondominio'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['inquilino'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador='<?php echo $_smarty_tpl->tpl_vars['row']->value['idCondominio'];?>
'><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>