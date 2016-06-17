$(document).ready(function(){
	getLista();
	$('#txtColor').colorpicker();
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		
		$('#panelTabs a[href="#listas"]').tab('show');
		alert("Selecciona un estado de la lista para modificarlo");
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtColor: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TEstado;
			obj.update(
				$("#id").val(), 
				$("#txtColor").val(),
				$("#selTermino").val(),
				{
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			);
        }

    });
		
	function getLista(){
		$.get("listaEstados", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idEstado);
				$("#txtColor").val(el.color);
				$("#selTermino").val(el.termino);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#tblLista").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	};
});