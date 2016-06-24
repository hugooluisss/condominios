$(document).ready(function(){
	getLista();
	var upload;
	var infraccion;
	
	var ventana = new Object;
	
	$("#btnCartaFicha").click(function(){
		var obj = new TInfraccion;
		obj.getCarta($("#winAutorizar").find("#id").val(), {
			before: function(){
				$("#btnCartaFicha").prop("disabled", true);
			},
			after: function(resp){
				$("#btnCartaFicha").prop("disabled", false);
				if (resp.band){
					if (confirm("¿Deseas enviarla por correo electrónico al infractor?"))
						obj.sendMail($("#id").val(), {
							after: function(resp){
								if (!resp.band)
									alert("El correo no pudo ser enviado a la(s) cuenta(s) " + resp.email);
							}
						});
					openDocumento(resp.doc);
				}else
					alert("Ups... el documento no se pudo generar");
			}
		});
	});
    
    function getLista(){
		$.get("listaAutorizaciones", function( data ) {
			$(".box .box-body").html(data);
			
			$(".box .box-body").find("[action=autorizar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				infraccion = el;
				$.each(el, function(key, value) {
					$("#winAutorizar").find("[campo=" + key +"]").text(value);
				});
				
				$("#winAutorizar").find("#id").val(el.idInfraccion);
				$('#fileupload').fileupload({url: "?mod=cinfracciones&action=upload&infraccion=" + el.idInfraccion});
				getListaImagenes();
				$("#btnRechazar").hide();
				$("#btnAplicar").hide();
				$("#btnCartaFicha").prop("disabled", false);
				
				if (el.idEstado == 1){
					$("#btnRechazar").show();
					$("#btnAplicar").show();
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
	
	$("#txtDescripcion").change(function(){
		var obj = new TInfraccion;
		
		obj.registra(infraccion.idInfraccion, infraccion.idDepartamento, infraccion.idArea, infraccion.fecha, infraccion.hora, infraccion.servidor, infraccion.camara, $("#txtDescripcion").val(), infraccion.inciseo, {
			before: function(){
				$("#txtDescripcion").prop("disabled", true);
			},
			after: function(resp){
				$("#txtDescripcion").prop("disabled", false);
				
				if (!resp.band)
					alert("No se pudo actualizar la descripción");
			}
		});
	});
	
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
						
						if (confirm("¿Deseas enviarla por correo electrónico al infractor?"))
							obj.sendMail($("#id").val(), {
								after: function(resp){
									if (!resp.band)
										alert("El correo no pudo ser enviado a la(s) cuenta(s) " + resp.email);
								}
							});
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