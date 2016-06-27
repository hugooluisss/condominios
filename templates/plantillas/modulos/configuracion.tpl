<div class="box">
	<div class="box-header">
		<h3>Configuración del sistema </h3>
	</div>
	<div class="box-body">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="form-group">
				<label for="txtCostoMantenimiento" class="col-lg-2">Costo de mantenimiento</label>
				<div class="col-lg-3">
					<input class="form-control text-right" id="txtCostoMantenimiento" name="txtCostoMantenimiento" value="{$costoMantenimiento}" clave="costoMantenimiento" />
				</div>
			</div>
			<div class="form-group">
				<label for="txtCorreo" class="col-lg-2">Correo gerente</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtCorreo" name="txtCorreo" value="{$correoGerente}" clave="correoGerente">
				</div>
			</div>
		</form>
	</div>
</div>