<?php /* Smarty version Smarty-3.1.11, created on 2016-05-17 11:10:30
         compiled from "templates/plantillas/modulos/uniformes/listaTallas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1560899384573b2f68b26427-01433370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53a93723abd73e12b860ad4381a253caf47d50dc' => 
    array (
      0 => 'templates/plantillas/modulos/uniformes/listaTallas.tpl',
      1 => 1463501427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1560899384573b2f68b26427-01433370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573b2f68b27127_93399781',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b2f68b27127_93399781')) {function content_573b2f68b27127_93399781($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblTallas" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Cantidad</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td>
							<input type="number" class="form-control text-right cantidad" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' value="<?php if ($_smarty_tpl->tpl_vars['row']->value['cantidad']==''){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
<?php }?>"/>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>