$(document).ready(function(){
	getLista();
	var upload;
	
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
    
    function getLista(){
		$.get("listaInfraccionesReactivar", function( data ) {
			$(".box .box-body").html(data);
			
			$(".box .box-body").find("[action=autorizar]").click(function(){
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
				"order": [[ 0, "desc" ]],
				"info": true,
				"autoWidth": false
			});
		});
	};

	function getListaImagenes(){
		$.get("?mod=listaImagenes&infraccion=" + $("#winAutorizar").find("#id").val(), function( data ) {
			$("#dvListaMedios").html(data);
			
			$("[action=eliminar]").hide();
		});
	}
	
	$("#btnReactivar").click(function(){
		if (confirm("Esta infracción pasará al estado de registrada, ¿Seguro?")){
			var obj = new TInfraccion;
			obj.setRegistrada($("#id").val(), {
				before: function(){
					$("#btnReactivar").prop("disabled", true);
				}, after: function(resp){
					$("#btnReactivar").prop("disabled", false);
					
					if (resp.band){
						getLista();
						$("#winAutorizar").modal("hide");
					}else
						alert("Ups... no se pudo aplicar");
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