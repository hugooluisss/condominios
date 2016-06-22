<?php /* Smarty version Smarty-3.1.11, created on 2016-06-20 22:10:07
         compiled from "templates/plantillas/modulos/infracciones/listaPorPagar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15792132365768b00f823577-31396768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '639eef8fadde79c6745f68ada7c2bdf6a8fdc80c' => 
    array (
      0 => 'templates/plantillas/modulos/infracciones/listaPorPagar.tpl',
      1 => 1466478533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15792132365768b00f823577-31396768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5768b00f8d82b2_26514674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5768b00f8d82b2_26514674')) {function content_5768b00f8d82b2_26514674($_smarty_tpl) {?><table id="tblLista" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha/Hora</th>
			<th>Depto</th>
			<th>Condominio</th>
			<th>Inquilino</th>
			<th>Reglamento</th>
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
				<td style="border-left: 5px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['hora'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['claveDepto'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['condominio'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['inquilino'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['area'];?>
 / <?php echo $_smarty_tpl->tpl_vars['row']->value['inciso'];?>
</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-success" action="pagar" title="Pagar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-check"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>