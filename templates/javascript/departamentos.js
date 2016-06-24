$(document).ready(function(){
	getLista();

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
			txtCondominio: "required",
			//txtInquilino: "required",
			txtCorreo: "required",
			txtReferencia: "required",
			txtClave:{
				required: true,
				remote: {
					url: "./cdepartamentos",
					type: "post",
					data: {
						action: "validaClave",
						id: function(){
							return $("#id").val();
						}
					}
				}
			}
		},
		wrapper: 'span',
		messages:{
			txtClave: {
				remote: "Esta clave ya está siendo usada..."
			}
		},
		submitHandler: function(form){
			var obj = new TDepartamento;
			obj.add(
				$("#id").val(), 
				$("#txtClave").val(),
				$("#txtCondominio").val(),
				$("#txtInquilino").val(),
				$("#txtCorreo").val(),
				$("#txtReferencia").val(),
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
		$.get("listaDepartamentos", function( data ) {
			$("#dvLista").html(data);
			
			$("#dvLista").find("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idDepartamento);
				$("#txtClave").val(el.clave);
				$("#txtCondominio").val(el.condominio);
				$("#txtInquilino").val(el.inquilino);
				$("#txtCorreo").val(el.correo);
				$("#txtReferencia").val(el.referencia);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#dvLista").find("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TDepartamento;
					obj.del($(this).attr("identificador"), {
						after: function(data){
							if (!data.band)
								alert("Upss... no se borró");
							else
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