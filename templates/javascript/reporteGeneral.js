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
			$("#dvLista").html(data);
			
			if (data.doc == "")
				alert("Error al generar el reporte");
			else{
				location.href = data.doc;
			}
		});
	};
});