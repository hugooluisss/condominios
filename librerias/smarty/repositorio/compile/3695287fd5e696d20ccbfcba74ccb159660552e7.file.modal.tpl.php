<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 13:01:04
         compiled from "templates/plantillas/modulos/rutas/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48854912556f2b72d3ec534-93086779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3695287fd5e696d20ccbfcba74ccb159660552e7' => 
    array (
      0 => 'templates/plantillas/modulos/rutas/modal.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48854912556f2b72d3ec534-93086779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f2b72d3f0a58_42011765',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f2b72d3f0a58_42011765')) {function content_56f2b72d3f0a58_42011765($_smarty_tpl) {?><div id="winEstudiantesRutas" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-toogle="modal">
    <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Estudiantes registrados en la ruta</h1>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="txtEstudiante" class="col-lg-3">Estudiante</label>
					<div class="col-lg-9">
						<input class="form-control" id="txtEstudiante" name="txtEstudiante">
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-xs-12" id="dvListaEstudiantes"></div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>