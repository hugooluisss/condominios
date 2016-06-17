<?php /* Smarty version Smarty-3.1.11, created on 2016-05-19 13:00:49
         compiled from "templates/plantillas/modulos/optativas/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63743676756f1680327a4b4-94221263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09b18ab05e82fb6e4e8b718f06f8a118c1691fa8' => 
    array (
      0 => 'templates/plantillas/modulos/optativas/modal.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63743676756f1680327a4b4-94221263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56f1680327ed63_75477523',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f1680327ed63_75477523')) {function content_56f1680327ed63_75477523($_smarty_tpl) {?><div id="winEstudiantesOptativa" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-toogle="modal">
    <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Estudiantes inscritos a la optativa</h1>
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