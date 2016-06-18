<div class="modal fade" id="winDepartamentos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Departamentos</h1>
			</div>
			<div class="modal-body">
				<table id="tblDepartamentos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Clave</th>
							<th>Condominio</th>
							<th>Inquilino</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$departamentos item="row"}
							<tr>
								<td>{$row.idDepartamento}</td>
								<td>{$row.clave}</td>
								<td>{$row.condominio}</td>
								<td>{$row.inquilino}</td>
								<td style="text-align: right">
									<button type="button" class="btn btn-default" action="seleccionar" title="Seleccionar" datos='{$row.json}'><i class="fa fa-hand-pointer-o"></i></button>
								</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>