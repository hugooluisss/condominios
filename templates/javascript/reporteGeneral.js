$(document).ready(function(){
	getLista();
	$('#txtFecha').datepicker({
		todayBtn: "linked",
		language: "es",
		autoclose: true
	});
	
	$("#btnExcel").click(function(){
		getExcel();
	});
	
	$("#btnPDF").click(function(){
		getPDF();
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			selDepartamento: "required",
			selArea: "required",
			selEstado: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			getLista();
        }

    });
	
	function getLista(){
		$.post("listaReporteGeneral", {
			"fechaInicio": $("#txtFecha").val(),
			"fechaFin": $("#txtFechaFin").val(),
			"estado": $("#selEstado").val(),
			"departamento": $("#selDepartamento").val(),
			"area": $("#selArea").val()
		}, function( data ) {
			$("#dvLista").html(data);
			
			$("#dvLista").find("[action=detalle]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$.each(el, function(key, value) {
					$("#winAutorizar").find("[campo=" + key +"]").text(value);
				});
				
				$("#winAutorizar").find("#id").val(el.idInfraccion);
				getListaImagenes();
				$("#btnCartaFicha").prop("disabled", false);
				
				if (el.idEstado == 1){
					$("#btnCartaFicha").prop("disabled", true);
				}
				
				$("#winAutorizar").modal();
				
				//$('#panelTabs a[href="#add"]').tab('show');
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
	
	function getExcel(){
		$.post("creportes", {
			"fechaInicio": $("#txtFecha").val(),
			"fechaFin": $("#txtFechaFin").val(),
			"estado": $("#selEstado").val(),
			"departamento": $("#selDepartamento").val(),
			"area": $("#selArea").val(),
			"action": "generalExcel"
		}, function( data ) {
			if (data.doc == "")
				alert("Error al generar el reporte");
			else{
				location.href = data.doc;
			}
		}, "json");
	};
	
	function getPDF(){
		$.post("creportes", {
			"fechaInicio": $("#txtFecha").val(),
			"fechaFin": $("#txtFechaFin").val(),
			"estado": $("#selEstado").val(),
			"departamento": $("#selDepartamento").val(),
			"area": $("#selArea").val(),
			"action": "generalPDF"
		}, function( data ) {
			if (data.doc == "")
				alert("Error al generar el reporte");
			else{
				openDocumento(data.doc);
			}
		}, "json");
	};
	
	var ventana = new Object;
	
	$("#btnCartaFicha").click(function(){
		var obj = new TInfraccion;
		obj.getCarta($("#winAutorizar").find("#id").val(), {
			before: function(){
				$("#btnCartaFicha").prop("disabled", true);
			},
			after: function(resp){
				$("#btnCartaFicha").prop("disabled", false);
				if (resp.band)
					openDocumento(resp.doc);
				else
					alert("Ups... el documento no se pudo generar");
			}
		});
	});
	
	function getListaImagenes(){
		$.get("?mod=listaImagenes&infraccion=" + $("#winAutorizar").find("#id").val(), function( data ) {
			$("#dvListaMedios").html(data);
			
			$("[action=eliminar]").hide();
			
		});
	}
	
	function openDocumento(documento){
		if (ventana == undefined || ventana == null)
			ventana = window.open(documento,'_blank');
		else{
			try{
				ventana.location.href = documento;
			}catch(er){
				ventana = window.open(documento,'_blank');
			}
			
			
		}
		
		ventana.focus();
	}
});