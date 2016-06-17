<?php /* Smarty version Smarty-3.1.11, created on 2016-03-21 11:37:10
         compiled from "templates/plantillas/modulos/niveles/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1483027156e869e56555c5-28225961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c61c5f1fada35a543e7eafbc13424ece72c136c9' => 
    array (
      0 => 'templates/plantillas/modulos/niveles/panel.tpl',
      1 => 1458093999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1483027156e869e56555c5-28225961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56e869e56acc06_16338883',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e869e56acc06_16338883')) {function content_56e869e56acc06_16338883($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de Niveles Educativos</h1>
	</div>
</div>

<div class="box">
	<div class="box-body">
		<table id="tblNiveles" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Inicial</th>
					<th>Consecutivo</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idNivel'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['inicial'];?>
</td>
						<td>
							<input class="input-control text-right consecutivo" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['consecutivo'];?>
" anterior="<?php echo $_smarty_tpl->tpl_vars['row']->value['consecutivo'];?>
" idNivel="<?php echo $_smarty_tpl->tpl_vars['row']->value['idNivel'];?>
" />
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>