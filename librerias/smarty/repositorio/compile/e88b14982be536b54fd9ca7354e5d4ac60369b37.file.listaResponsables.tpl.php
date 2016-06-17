<?php /* Smarty version Smarty-3.1.11, created on 2016-03-18 08:57:21
         compiled from "templates/plantillas/modulos/estudiantes/listaResponsables.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8048245356eafbdb24a067-97118501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e88b14982be536b54fd9ca7354e5d4ac60369b37' => 
    array (
      0 => 'templates/plantillas/modulos/estudiantes/listaResponsables.tpl',
      1 => 1458312864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8048245356eafbdb24a067-97118501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56eafbdb275919_36415454',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eafbdb275919_36415454')) {function content_56eafbdb275919_36415454($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblResponsables" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idResponsable'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-primary btn-circle" action="seleccionar" title="Seleccionar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-hand-pointer-o"></i></button>
							<button type="button" class="btn btn-success btn-circle" action="modificarResponsable" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminarResponsable" title="Eliminar" responsable="<?php echo $_smarty_tpl->tpl_vars['row']->value['idResponsable'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>