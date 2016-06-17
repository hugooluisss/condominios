<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 12:59:48
         compiled from "templates/plantillas/modulos/estudiantes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113658614856eb97d41d7586-94246626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38978d6fd7c7b8c2128525ee867939c47a4920a5' => 
    array (
      0 => 'templates/plantillas/modulos/estudiantes/lista.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113658614856eb97d41d7586-94246626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56eb97d4258726_91925253',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb97d4258726_91925253')) {function content_56eb97d4258726_91925253($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<div class="alert alert-info" id="dvInfo">
			<strong>Obteniendo datos</strong> Estoy obteniendo los datos del estudiante, por favor espera un momento...
		</div>
		<table id="tblEstudiantes" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idEstudiante'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['matricula'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['app'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apm'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-primary" action="ficha" title="Ficha técnica" estudiante='<?php echo $_smarty_tpl->tpl_vars['row']->value['idEstudiante'];?>
'><i class="fa fa-sticky-note"></i></button>
							<button type="button" class="btn btn-primary" action="permisos" title="Registro de permisos" estudiante='<?php echo $_smarty_tpl->tpl_vars['row']->value['idEstudiante'];?>
'><i class="fa fa-suitcase"></i></button>
							<button type="button" class="btn btn-primary" action="fotografia" title="Fotografía" estudiante='<?php echo $_smarty_tpl->tpl_vars['row']->value['idEstudiante'];?>
'><i class="fa fa-picture-o"></i></button>
							<button type="button" class="btn btn-primary" action="matricula" title="Cambiar Matrícula" estudiante='<?php echo $_smarty_tpl->tpl_vars['row']->value['idEstudiante'];?>
' matricula="<?php echo $_smarty_tpl->tpl_vars['row']->value['matricula'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['matricula']==''){?>disabled<?php }?>><i class="fa fa-pencil-square-o"></i></button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" estudiante='<?php echo $_smarty_tpl->tpl_vars['row']->value['idEstudiante'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" estudiante="<?php echo $_smarty_tpl->tpl_vars['row']->value['idEstudiante'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>