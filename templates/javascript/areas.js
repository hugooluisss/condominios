$(document).ready(function(){
	getLista();
	$('#txtColor').colorpicker();
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtCuota: {
			 	required: true,
			 	number: true,
				min: 1
			}
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TArea;
			obj.add(
				$("#id").val(), 
				$("#txtNombre").val(),
				$("#txtCuota").val(),
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
		$.get("listaAreas", function( data ) {
			$("#dvLista").html(data);
			
			$("#dvLista").find("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idArea);
				$("#txtNombre").val(el.nombre);
				$("#txtCuota").val(el.cuota);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#dvLista").find("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TArea;
					obj.del($(this).attr("identificador"), {
						after: function(data){
							getLista();
						}
					});
				}
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