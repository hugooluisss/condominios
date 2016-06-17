<?php /* Smarty version Smarty-3.1.11, created on 2016-05-24 20:06:52
         compiled from "templates/plantillas/modulos/reportes/estudiantes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181866900573fef158da9b7-67035033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '096660283d27382c73dc5e6f45491368c8e158f7' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/estudiantes.tpl',
      1 => 1464138365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181866900573fef158da9b7-67035033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_573fef158db725_24156562',
  'variables' => 
  array (
    'grupos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573fef158db725_24156562')) {function content_573fef158db725_24156562($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Reportes de estudiantes</h1>
	</div>
</div>

<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#cuidados">Cuidados de estudiantes</a>
			</h4>
		</div>
		<div id="cuidados" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2">Grupo</div>
					<div class="col-md-6">
						<select id="selGrupo" name="selGrupo" class="form-control">
							<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grupos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idGrupo'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['grupo'];?>
 del grado <?php echo $_smarty_tpl->tpl_vars['row']->value['grado'];?>
 de <?php echo $_smarty_tpl->tpl_vars['row']->value['nivel'];?>
 del ciclo <?php echo $_smarty_tpl->tpl_vars['row']->value['ciclo'];?>

							<?php } ?>
						</select>
					</div>
					<div class="col-md-2">
						<input type="button" class="btn btn-primary" value="generar" id="btnEnviar">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#rutas">Rutas de transporte</a>
			</h4>
		</div>
		<div id="rutas" class="panel-collapse collapse">
			<div class="panel-body">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2">Grupo</div>
						<div class="col-md-6">
							<select id="selGrupo" name="selGrupo" class="form-control">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grupos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idGrupo'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['grupo'];?>
 del grado <?php echo $_smarty_tpl->tpl_vars['row']->value['grado'];?>
 de <?php echo $_smarty_tpl->tpl_vars['row']->value['nivel'];?>
 del ciclo <?php echo $_smarty_tpl->tpl_vars['row']->value['ciclo'];?>

								<?php } ?>
							</select>
						</div>
						<div class="col-md-2">
							<input type="button" class="btn btn-primary" value="generar" id="btnEnviar">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>