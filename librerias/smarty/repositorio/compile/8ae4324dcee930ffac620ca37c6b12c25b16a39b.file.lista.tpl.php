<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 12:44:16
         compiled from "templates/plantillas/modulos/uniformes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:736727981573a08e7a7a1a3-11784688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae4324dcee930ffac620ca37c6b12c25b16a39b' => 
    array (
      0 => 'templates/plantillas/modulos/uniformes/lista.tpl',
      1 => 1463755408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '736727981573a08e7a7a1a3-11784688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573a08e7aa3ed3_73463227',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a08e7aa3ed3_73463227')) {function content_573a08e7aa3ed3_73463227($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblUniformes" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Clave</th>
					<th>Nombre</th>
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
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="existencias" title="Existencias" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="">E</i></button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" uniforme="<?php echo $_smarty_tpl->tpl_vars['row']->value['idUniforme'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>