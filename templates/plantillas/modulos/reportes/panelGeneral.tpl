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
						<input class="form-control" id="txtFecha" name="txtFechaFin" value="{$smarty.now|date_format:"%Y-%m-%d"}" />
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
				</div>
			</div>
		</form>
		<br />
		<div id="dvLista"></div>
	</div>
</div>