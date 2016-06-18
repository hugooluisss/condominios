<div class="box">
	<div class="box-body">
		<table id="tblLista" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Fecha/Hora</th>
					<th>Depto</th>
					<th>Condominio</th>
					<th>Inquilino</th>
					<th>Reglamento</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.fecha} {$row.hora}</td>
						<td>{$row.claveDepto}</td>
						<td>{$row.condominio}</td>
						<td>{$row.inquilino}</td>
						<td>{$row.area} / {$row.inciso}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
							{if $PAGE.usuario->getIdTipo() eq 1}
								<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador='{$row.idInfraccion}'><i class="fa fa-times"></i></button>
							{/if}
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>