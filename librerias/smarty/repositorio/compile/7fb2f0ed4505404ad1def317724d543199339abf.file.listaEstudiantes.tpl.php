<?php /* Smarty version Smarty-3.1.11, created on 2016-03-23 01:14:34
         compiled from "templates/plantillas/modulos/optativas/listaEstudiantes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138496404456f169bbef3a73-30574417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fb2f0ed4505404ad1def317724d543199339abf' => 
    array (
      0 => 'templates/plantillas/modulos/optativas/listaEstudiantes.tpl',
      1 => 1458717259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138496404456f169bbef3a73-30574417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f169bc029997_51757356',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f169bc029997_51757356')) {function content_56f169bc029997_51757356($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblEstudiantes" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Matrícula</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['matricula'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['app'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apm'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-danger btn-circle" action="eliminarEstudiante" title="Eliminar" estudiante="<?php echo $_smarty_tpl->tpl_vars['row']->value['idEstudiante'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>