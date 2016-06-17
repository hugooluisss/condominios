<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 08:35:44
         compiled from "templates/plantillas/modulos/asignaturas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:912400688573e92f484d969-59902466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3619c05c87bd28e73f33d3817599b5e051901da4' => 
    array (
      0 => 'templates/plantillas/modulos/asignaturas/lista.tpl',
      1 => 1463750456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '912400688573e92f484d969-59902466',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573e92f48eabb9_10762031',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573e92f48eabb9_10762031')) {function content_573e92f48eabb9_10762031($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblAsignaturas" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nivel</th>
					<th>Grado</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nivel'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['grado'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success btn-circle" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" asignatura="<?php echo $_smarty_tpl->tpl_vars['row']->value['idAsignatura'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>