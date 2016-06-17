<?php /* Smarty version Smarty-3.1.11, created on 2016-04-02 15:49:53
         compiled from "templates/plantillas/modulos/grupos/listaAsistencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55947839457003ac01b6478-47421055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5731d2489f19b4e3181a0d44917131a6ba00bcde' => 
    array (
      0 => 'templates/plantillas/modulos/grupos/listaAsistencia.tpl',
      1 => 1459633772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55947839457003ac01b6478-47421055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57003ac027d948_95508679',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'fecha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57003ac027d948_95508679')) {function content_57003ac027d948_95508679($_smarty_tpl) {?><table id="tblEstudiantes" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>¿Asistió?</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
				<td>
					<input type="checkbox" inscripcion="<?php echo $_smarty_tpl->tpl_vars['row']->value['idInscripcion'];?>
" fecha="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
" action="setAsistencia" <?php if ($_smarty_tpl->tpl_vars['row']->value['asistio']==true){?>checked<?php }?>/>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>