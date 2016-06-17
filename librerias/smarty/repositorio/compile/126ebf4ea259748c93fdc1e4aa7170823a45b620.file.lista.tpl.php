<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 13:00:42
         compiled from "templates/plantillas/modulos/inscripciones/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80539154356ec4d7d56f6a2-68468404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '126ebf4ea259748c93fdc1e4aa7170823a45b620' => 
    array (
      0 => 'templates/plantillas/modulos/inscripciones/lista.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80539154356ec4d7d56f6a2-68468404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56ec4d7d59bc20_61683221',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ec4d7d59bc20_61683221')) {function content_56ec4d7d59bc20_61683221($_smarty_tpl) {?><table id="tblEstudiantes" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Folio</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idEstudiante'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['app'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apm'];?>
</td>
				<td class="text-right">
					<input class="form-control folio text-right" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['folio'];?>
" inscripcion="<?php echo $_smarty_tpl->tpl_vars['row']->value['idInscripcion'];?>
"/>
				</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-primary" action="constancia" title="Constancia de inscripcion" inscripcion="<?php echo $_smarty_tpl->tpl_vars['row']->value['idInscripcion'];?>
"><i class="fa fa-file-pdf-o"></i></button>
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" inscripcion="<?php echo $_smarty_tpl->tpl_vars['row']->value['idInscripcion'];?>
"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>