<?php /* Smarty version Smarty-3.1.11, created on 2016-05-24 11:58:35
         compiled from "templates/plantillas/modulos/grupos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78857939156e25418422f81-55897863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2bb656661bb38e2380c9e73b2e6bf4ed3d86b0b' => 
    array (
      0 => 'templates/plantillas/modulos/grupos/lista.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78857939156e25418422f81-55897863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56e254184c85a9_62209995',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e254184c85a9_62209995')) {function content_56e254184c85a9_62209995($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblGrupos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Ciclo</th>
					<th>Grado</th>
					<th>Nivel</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idGrupo'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ciclo'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['grado'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nivel'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-primary" action="imprimirAsistencias" title="Imprimir reporte de asistencias" grupo="<?php echo $_smarty_tpl->tpl_vars['row']->value['idGrupo'];?>
"><i class="fa fa-print"></i></button>
							<button type="button" class="btn btn-primary" action="asistencias" title="Registro de asistencias" grupo="<?php echo $_smarty_tpl->tpl_vars['row']->value['idGrupo'];?>
"><i class="fa fa-thumbs-o-up"></i></button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" grupo="<?php echo $_smarty_tpl->tpl_vars['row']->value['idGrupo'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>