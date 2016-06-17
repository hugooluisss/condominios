<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 23:06:33
         compiled from "templates/plantillas/modulos/libros/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2076433568573f5b37897f99-93190813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7211e338fe3922c92e28af6580134e8d4cf530e' => 
    array (
      0 => 'templates/plantillas/modulos/libros/lista.tpl',
      1 => 1463803589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2076433568573f5b37897f99-93190813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573f5b378c5924_29459086',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573f5b378c5924_29459086')) {function content_573f5b378c5924_29459086($_smarty_tpl) {?><div class="box">
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
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" libro="<?php echo $_smarty_tpl->tpl_vars['row']->value['idLibro'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>