<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Reporte general de infracciones</h1>
	</div>
</div>

<div class="box">
	<div class="box-body">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="form-group">
				<label for="txtFecha" class="col-lg-2">Fecha</label>
				<div class="col-lg-2">
					<div class="input-group date">
						<input class="form-control" id="txtFecha" name="txtFecha" value="{$smarty.now|date_format:"%Y-%m-%d"}" />
					</div>
				</div>
				<div class="col-lg-2">
					<div class="input-group date">
						<input class="form-control" id="txtFechaFin" name="txtFechaFin" value="{$smarty.now|date_format:"%Y-%m-%d"}" />
					</div>
				</div>
				<label for="selEstado" class="col-lg-2">Estado</label>
				<div class="col-lg-3">
					<select class="form-control" id="selEstado" name="selEstado">
						<option value="%">Cualquier estado
						{foreach from=$estados item="row"}
							<option value="{$row.idEstado}" style="color: {$row.color}">{$row.nombre}
						{/foreach}
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="selDepartamento" class="col-lg-2">Departamento</label>
				<div class="col-lg-4">
					<select class="form-control" id="selDepartamento" name="selDepartamento">
						<option value="%">Cualquiera
						{foreach from=$departamentos item="row"}
							<option value="{$row.idDepartamento}">{$row.clave} {$row.condominio} - {$row.inquilino}
						{/foreach}
					</select>
				</div>
				<label for="selArea" class="col-lg-2">Área/Reglamento</label>
				<div class="col-lg-3">
					<select class="form-control" id="selArea" name="selArea">
						<option value="%">Cualquier área/reglamento
						{foreach from=$areas item="row"}
							<option value="{$row.idArea}">{$row.nombre}
						{/foreach}
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-right">
					<input type="submit" class="btn btn-info" value="Filtrar" />
					<input type="button" class="btn btn-success" value="Excel" id="btnExcel"/>
					<input type="button" class="btn btn-success" value="PDF" id="btnPDF"/>
				</div>
			</div>
		</form>
		<br />
		<div id="dvLista"></div>
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
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<input id="id" name="id" value="" type="hidden"/>
			</div>
		</div>
	</div>
</div>