$(document).ready(function(){
	getLista();
	
	//Para la lista de departamentos
	$("#winDepartamentos").find("[action=seleccionar]").click(function(){
		var el = jQuery.parseJSON($(this).attr("datos"));
		
		$("#txtDepartamento").val(el.clave + ' ' + el.condominio + ' - ' + el.inquilino);
		$("#txtDepartamento").attr("identificador", el.idDepartamento);
		
		$("#winDepartamentos").modal("hide");
	});
	
	$('#txtFecha').datepicker({
		todayBtn: "linked",
		language: "es",
		autoclose: true
	});
	
	$('#txtHora').timepicker();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("#txtDepartamento").attr("identificador", "");
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
		$("#txtDepartamento").attr("identificador", "");
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtFecha: "required",
			txtHora: "required",
			txtDepartamento: "required",
			selArea: "required",
			txtInciso: "required",
			txtServidor: "required",
			txtCamara: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TInfraccion;
			obj.registra(
				$("#id").val(), 
				$("#txtDepartamento").attr("identificador"),
				$("#selArea").val(),
				$("#txtFecha").val(),
				$("#txthora").val(),
				$("#txtServidor").val(),
				$("#txtCamara").val(),
				$("#txtDescripcion").val(),
				$("#txtInciso").val(),
				{
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... No se pudo registrar");
						}
					}
				}
			);
        }

    });
		
	function getLista(){
		$.get("listaInfraccionesRegistradas", function( data ) {
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
					var obj = new TInfraccion;
					obj.del($(this).attr("identificador"), {
						after: function(data){
							if (data.band)
								getLista();
							else
								alert("Upsss... no se pudo eliminar");
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
				"order": [[ 0, "desc" ]],
				"info": true,
				"autoWidth": false
			});
		});
	};
});