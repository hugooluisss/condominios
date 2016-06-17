<?php /* Smarty version Smarty-3.1.11, created on 2016-05-20 08:35:19
         compiled from "templates/plantillas/modulos/planEstudios/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1011342845573e82ac6c9708-85232084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77dfc3643a7c0847f8d1b45b7b83de3e7be50861' => 
    array (
      0 => 'templates/plantillas/modulos/planEstudios/lista.tpl',
      1 => 1463750456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1011342845573e82ac6c9708-85232084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573e82ac74a737_24362064',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573e82ac74a737_24362064')) {function content_573e82ac74a737_24362064($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblPlanes" class="table table-bordered table-hover">
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
							<button type="button" class="btn btn-default" action="asignaturas" title="Lista de asignaturas" plan="<?php echo $_smarty_tpl->tpl_vars['row']->value['idPlan'];?>
">A</button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" plan="<?php echo $_smarty_tpl->tpl_vars['row']->value['idPlan'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>