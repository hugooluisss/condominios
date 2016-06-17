<?php /* Smarty version Smarty-3.1.11, created on 2016-05-24 11:58:34
         compiled from "templates/plantillas/modulos/grupos/winAsistencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188587006570033e5b65067-46735658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dd76aa7f259101d410546619e8778c596f4b487' => 
    array (
      0 => 'templates/plantillas/modulos/grupos/winAsistencia.tpl',
      1 => 1460381119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188587006570033e5b65067-46735658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_570033e5b69d06_87251942',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570033e5b69d06_87251942')) {function content_570033e5b69d06_87251942($_smarty_tpl) {?><div id="winAsistencias" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-toogle="modal">
    <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Registro de asistencias</h1>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="txtFecha" class="col-xs-4 col-lg-4">Asistencias del día</label>
							<div class="col-xs-8 col-sm-4">
								<input class="form-control" id="txtFecha" name="txtFecha" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask />
							</div>
						</div>
					</div>
				</div>
				<div id="dvLista"></div>
			</div>
		</div>
    </div>
</div>

<input type="hidden" id="grupo" name="grupo" value="" /><?php }} ?>