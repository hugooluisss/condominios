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
				<td style="border-left: 5px solid {$row.color}">{$row.fecha} {$row.hora}</td>
				<td>{$row.claveDepto}</td>
				<td>{$row.condominio}</td>
				<td>{$row.inquilino}</td>
				<td>{$row.area} / {$row.inciso}</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-success" action="pagar" title="Pagar" datos='{$row.json}'><i class="fa fa-check"></i></button>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>