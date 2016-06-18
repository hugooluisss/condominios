<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Registro de infracciones</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label for="txtFecha" class="col-lg-2">Fecha</label>
						<div class="col-lg-3">
							<div class="input-group date">
								<input class="form-control" id="txtFecha" name="txtFecha" value="{$smarty.now|date_format:"%Y-%m-%d"}">
								<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="txtHora" class="col-lg-2">Hora</label>
						<div class="col-lg-3">
							<div class="input-group bootstrap-timepicker timepicker">
								<input class="form-control" id="txtHora" name="txtHora" value="{$smarty.now|date_format:"%I:%M %p"}">
								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="txtDepartamento" class="col-lg-2">Departamento</label>
						<div class="col-lg-6">
							<input class="form-control" id="txtDepartamento" name="txtDepartamento" value="" identificador="" disabled="true">
						</div>
						<div class="col-lg-1">
							<a class="btn btn-default" data-toggle="modal" href="#winDepartamentos"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="form-group">
						<label for="selArea" class="col-lg-2">Área / Reglamento</label>
						<div class="col-lg-3">
							<select class="form-control" id="selArea" name="selArea">
								<option value="">Selecciona de la lista
								{foreach from=$areas item="row"}
									<option value="{$row.idArea}">{$row.nombre}
								{/foreach}
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtInciso" class="col-lg-2">Inciso</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtInciso" name="txtInciso" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="txtServidor" class="col-lg-2">Servidor</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtServidor" name="txtServidor" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="txtCamara" class="col-lg-2">Cámara</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtCamara" name="txtCamara" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripción" class="col-lg-2">Descripción</label>
						<div class="col-lg-8">
							<textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/infracciones/winDepartamentos.tpl"}