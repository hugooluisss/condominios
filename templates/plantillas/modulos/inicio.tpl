<div class="box">
	<div class="box-header">
		<h3>Cumpleaños de hoy</h3>
	</div>
	<div class="box-body">
		<table class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fecha de nacimiento</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.nombre} {$row.app} {$row.apm}</td>
						<td>{$row.nacimiento}</td>
					</tr>
				{foreachelse}
					<tr>
						<td colspan="2">Hoy ningún estudiante cumple años</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>