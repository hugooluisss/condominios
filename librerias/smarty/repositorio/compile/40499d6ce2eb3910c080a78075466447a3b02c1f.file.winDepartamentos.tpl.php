<?php /* Smarty version Smarty-3.1.11, created on 2016-06-23 09:14:31
         compiled from "templates/plantillas/modulos/infracciones/winDepartamentos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9841950855764c8d6a29479-69782220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40499d6ce2eb3910c080a78075466447a3b02c1f' => 
    array (
      0 => 'templates/plantillas/modulos/infracciones/winDepartamentos.tpl',
      1 => 1466603771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9841950855764c8d6a29479-69782220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5764c8d6a2e134_95746258',
  'variables' => 
  array (
    'departamentos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5764c8d6a2e134_95746258')) {function content_5764c8d6a2e134_95746258($_smarty_tpl) {?><div class="modal fade" id="winDepartamentos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Departamentos</h1>
			</div>
			<div class="modal-body">
				<table id="tblDepartamentos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Clave</th>
							<th>Condominio</th>
							<th>Inquilino</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departamentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idDepartamento'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['condominio'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['inquilino'];?>
</td>
								<td style="text-align: right">
									<button type="button" class="btn btn-default" action="seleccionar" title="Seleccionar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-hand-pointer-o"></i></button>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>