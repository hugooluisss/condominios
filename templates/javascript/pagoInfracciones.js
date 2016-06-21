$(document).ready(function(){
	getLista();
	
    function getLista(){
		$.get("listaPorPagar", function( data ) {
			$(".box .box-body").html(data);
			
			$(".box .box-body").find("[action=pagar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				if(confirm("¿Seguro?")){
					var obj = new TInfraccion;
					obj.setPagada(el.idInfraccion, {
						before: function(){
							$(this).prop("disabled", true);
						},
						after: function(resp){
							$(this).prop("disabled", false);
							
							if (resp.band)
								getLista();
							else
								alert("Upss... no se pudo establecer como pagada");
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
	
	$('#fileupload').fileupload({
			url: "?mod=cinfracciones&action=upload&infraccion=",
			dataType: 'json',
			done: function (e, data) {
				$.each(data.result.files, function (index, file) {
				
				if (file.error !== undefined)
					alert("Upps... ocurrió un error al subir el archivo " + file.name + ": " + file.error);
				
				getListaImagenes();
			});
		},
		progressall: function (e, data) {
			var progress = parseInt(data.loaded / data.total * 100, 10);
			$('#progress .progress-bar').css(
				'width',
				progress + '%'
			);
		}
	}).prop('disabled', !$.support.fileInput)
		.parent().addClass($.support.fileInput ? undefined : 'disabled');   
			
	function getListaImagenes(){
		$.get("?mod=listaImagenes&infraccion=" + $("#winAutorizar").find("#id").val(), function( data ) {
			$("#dvListaMedios").html(data);
			
			$("[action=eliminar]").click(function(){
				var obj = new TInfraccion;
				if (confirm("¿Seguro?"))
					obj.delImagen($(this).attr("nombre"), $("#winAutorizar").find("#id").val(), {after: function(data){
						if (data.band)
							getListaImagenes();
						else
							alert("Ups... no se eliminó");
					}});
			});
			
		});
	}
	
	$("#btnAplicar").click(function(){
		if (confirm("¿Seguro?")){
			var obj = new TInfraccion;
			obj.setAutorizada($("#id").val(), {
				before: function(){
					$("#btnAplicar").prop("disabled", true);
				}, after: function(resp){
					$("#btnAplicar").prop("disabled", false);
					
					if (resp.band){
						getLista();
						$("#winAutorizar").modal("hide");
					}else
						alert("Ups... no se pudo aplicar");
				}
			});
		}
	});
	
	$("#btnRechazar").click(function(){
		if (confirm("¿Seguro?")){
			var obj = new TInfraccion;
			obj.setRechazada($("#id").val(), {
				before: function(){
					$("#btnAplicar").prop("disabled", true);
				}, after: function(resp){
					$("#btnAplicar").prop("disabled", false);
					
					if (resp.band){
						getLista();
						$("#winAutorizar").modal("hide");
					}else
						alert("Ups... no se pudo rechazar");
				}
			});
		}
	});
	
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