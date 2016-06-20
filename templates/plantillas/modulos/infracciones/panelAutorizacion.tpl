<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Autorizar / Rechazar infracciones</h1>
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
					<div class="col-lg-2 text-right text-danger">Monto Establecido en la captura</div>
					<div class="col-lg-5" campo="monto"></div>
				</div>
				<p class="text-center">
					<span class="btn btn-success fileinput-button">
						<i class="glyphicon glyphicon-plus"></i>
						<span>Adjuntar imagen...</span>
						<!-- The file input field used as target for the file upload widget -->
						<input id="fileupload" type="file" name="files[]" multiple>
					</span>
				</p>
				<div id="dvListaMedios">
				</div>
				<div id="progress" class="progress">
					<div class="progress-bar progress-bar-success"></div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success">Aplicar</button>
				<button type="button" class="btn btn-danger">Rechazar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<input id="id" name="id" value="" type="hidden"/>
			</div>
		</div>
	</div>
</div>