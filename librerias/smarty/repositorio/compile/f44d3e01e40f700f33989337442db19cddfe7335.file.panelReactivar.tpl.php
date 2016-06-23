<?php /* Smarty version Smarty-3.1.11, created on 2016-06-23 10:31:23
         compiled from "templates/plantillas/modulos/infracciones/panelReactivar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1751798740576bf008d5e537-62124391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f44d3e01e40f700f33989337442db19cddfe7335' => 
    array (
      0 => 'templates/plantillas/modulos/infracciones/panelReactivar.tpl',
      1 => 1466692674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1751798740576bf008d5e537-62124391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_576bf008d7a517_91703602',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576bf008d7a517_91703602')) {function content_576bf008d7a517_91703602($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Reactivar infracciones</h1>
	</div>
</div>

<div class="box">
	<div class="box-body">
	</div>
</div>

<div class="modal fade" id="winAutorizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Infracción</h1>
			</div>
			<div class="modal-body">
				<div class="row text-right">
					<div class="col-lg-12">
						<div class="btn-group btn-group-xs" role="group" aria-label="...">
							<button class="btn btn-primary" id="btnCartaFicha"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Generar carta y ficha</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 text-right text-success">No.</div>
					<div class="col-lg-4" campo="idInfraccion"></div>
				</div>
				<div class="row">
					<div class="col-lg-2 text-right text-success">Fecha</div>
					<div class="col-lg-4" campo="fecha"></div>
					<div class="col-lg-2 text-right text-success">Hora</div>
					<div class="col-lg-4" campo="hora"></div>
				</div>
				<div class="row">
					<div class="col-lg-2 text-right text-success">Departamento</div>
					<div class="col-lg-4" campo="claveDepto"></div>
					<div class="col-lg-2 text-right text-success">Condominio</div>
					<div class="col-lg-4" campo="condominio"></div>
				</div>
				<div class="row">
					<div class="col-lg-2 text-right text-success">Inquilino</div>
					<div class="col-lg-10" campo="inquilino"></div>
				</div>
				<div class="row">
					<div class="col-lg-2 text-right text-success">Email</div>
					<div class="col-lg-5" campo="correo"></div>
				</div>
				<br />
				<div class="row">
					<div class="col-lg-2 text-right text-success">Area/Reglamento</div>
					<div class="col-lg-4" campo="area"></div>
					<div class="col-lg-2 text-right text-success">Inciso</div>
					<div class="col-lg-4" campo="inciso"></div>
				</div>
				<div class="row">
					<div class="col-lg-2 text-right text-success">Servidor</div>
					<div class="col-lg-4" campo="servidor"></div>
					<div class="col-lg-2 text-right text-success">Cámara</div>
					<div class="col-lg-4" campo="camara"></div>
				</div>
				<br />
				<div class="row">
					<div class="col-lg-2 text-right text-success">Descripción</div>
					<div class="col-lg-10" campo="descripcion"></div>
				</div>
				<br />
				<div class="row">
					<div class="col-lg-2 text-right text-danger">Monto</div>
					<div class="col-lg-4" campo="monto"></div>
					<div class="col-lg-2 text-right text-danger">Ocasión</div>
					<div class="col-lg-4" campo="ocasion"></div>
				</div>
				<br />
				<div id="dvListaMedios">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" id="btnReactivar">Reactivar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<input id="id" name="id" value="" type="hidden"/>
			</div>
		</div>
	</div>
</div><?php }} ?>