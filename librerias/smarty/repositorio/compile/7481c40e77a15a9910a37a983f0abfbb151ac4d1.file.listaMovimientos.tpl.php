<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 23:16:07
         compiled from "templates/plantillas/modulos/ventaUniformes/listaMovimientos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1683487241573c855d66eeb6-04736344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7481c40e77a15a9910a37a983f0abfbb151ac4d1' => 
    array (
      0 => 'templates/plantillas/modulos/ventaUniformes/listaMovimientos.tpl',
      1 => 1463771227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1683487241573c855d66eeb6-04736344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573c855d6c4647_64366934',
  'variables' => 
  array (
    'bandExistencias' => 0,
    'lista' => 0,
    'row' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573c855d6c4647_64366934')) {function content_573c855d6c4647_64366934($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['bandExistencias']->value==true){?>
<button type="button" class="btn btn-danger pull-left" id="btnAplicar">Aplicar venta</button>
<?php }?>

<table id="tblMovimientos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Clave</th>
			<th>Descripción</th>
			<th>Exist</th>
			<th>Cant</th>
			<th>Precio</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr <?php if ($_smarty_tpl->tpl_vars['row']->value['existencias']<$_smarty_tpl->tpl_vars['row']->value['cantidad']){?>class="error"<?php }?>>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
			<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['existencias'];?>
</td>
			<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
			<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
			<td class="text-right">
				<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" movimiento="<?php echo $_smarty_tpl->tpl_vars['row']->value['idMovimiento'];?>
"><i class="fa fa-times"></i></button>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<div class="row">
	<div class="col-sm-offset-8 col-sm-4">
		<div class="alert alert-warning text-right">
			<strong>Total</strong> $ <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

		</div>
	</div>
</div><?php }} ?>