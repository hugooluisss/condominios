<?php /* Smarty version Smarty-3.1.11, created on 2016-06-18 09:26:19
         compiled from "templates/plantillas/modulos/infracciones/listaAutorizaciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1247321514576558bbadece4-06756888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae87d2b61b1e3608aab13834197cd03c6de2300f' => 
    array (
      0 => 'templates/plantillas/modulos/infracciones/listaAutorizaciones.tpl',
      1 => 1466259976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1247321514576558bbadece4-06756888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_576558bbb6f330_54460021',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576558bbb6f330_54460021')) {function content_576558bbb6f330_54460021($_smarty_tpl) {?><table id="tblLista" class="table table-bordered table-hover">
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
					<button type="button" class="btn btn-success" action="autorizar" title="Autorizar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-check"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>