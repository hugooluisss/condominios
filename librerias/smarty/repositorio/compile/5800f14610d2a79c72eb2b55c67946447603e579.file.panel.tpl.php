<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 13:00:40
         compiled from "templates/plantillas/modulos/inscripciones/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168411904556ec46c130bb74-73858816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5800f14610d2a79c72eb2b55c67946447603e579' => 
    array (
      0 => 'templates/plantillas/modulos/inscripciones/panel.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168411904556ec46c130bb74-73858816',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56ec46c1326f21_36193878',
  'variables' => 
  array (
    'grupos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ec46c1326f21_36193878')) {function content_56ec46c1326f21_36193878($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Inscripciones</h1>
	</div>
</div>

<div class="box">
	<div class="box-body">
		<div class="form-group">
			<label for="selGrupo" class="col-lg-2">Grupo</label>
			<div class="col-lg-8">
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
		</div>
	</div>
</div>

<div class="box">
	<div class="box-body">
		<div class="form-group">
			<label for="selGrupo" class="col-lg-2">Agregar a</label>
			<div class="col-lg-8">
				<input type="text" id="txtEstudiante" name="txtEstudiante" value="" class="form-control"/>
			</div>
		</div>
		<br /><br /><br />
		<div class="row">
			<div id="lista" class="col-xs-12"></div>
		</div>
	</div>
</div>
<?php }} ?>