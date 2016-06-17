<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 23:25:53
         compiled from "templates/plantillas/modulos/ventaLibros/listaLibros.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1652137120573fe35137ee30-20483163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b2f34f44c45b25e48205e5f91e27bf3c7d87c88' => 
    array (
      0 => 'templates/plantillas/modulos/ventaLibros/listaLibros.tpl',
      1 => 1463804573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652137120573fe35137ee30-20483163',
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
  'unifunc' => 'content_573fe3513fa272_84223265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573fe3513fa272_84223265')) {function content_573fe3513fa272_84223265($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblLibros" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Clave</th>
					<th>Nombre</th>
					<th>Asignatura</th>
					<th>Exist</th>
					<th>P. V.</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['asignatura'];?>
</td>
						<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['existencias'];?>
</td>
						<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['precioventa'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="seleccionar" title="Seleccionar" producto='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
					<i class="fa fa-hand-pointer-o"></i>
				</button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>