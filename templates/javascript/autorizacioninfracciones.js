$(document).ready(function(){
	getLista();
	var upload;
    
    function getLista(){
		$.get("listaAutorizaciones", function( data ) {
			$(".box .box-body").html(data);
			
			$(".box .box-body").find("[action=autorizar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$.each(el, function(key, value) {
					$("#winAutorizar").find("[campo=" + key +"]").text(value);
				});
				
				$("#winAutorizar").find("#id").val(el.idInfraccion);
				$('#fileupload').fileupload({url: "?mod=cinfracciones&action=upload&infraccion=" + el.idInfraccion});
				getListaImagenes();
				$("#winAutorizar").modal();
				
				$('#panelTabs a[href="#add"]').tab('show');
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
});