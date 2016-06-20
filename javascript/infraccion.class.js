TInfraccion = function(){
	var self = this;
	
	this.registra = function(id, departamento, area, fecha, hora, servidor, camara, descripcion, inciso, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cinfracciones', {
				"id": id,
				"departamento": departamento,
				"area": area,
				"fecha": fecha,
				"hora": hora,
				"servidor": servidor,
				"camara": camara,
				"descripcion": descripcion,
				"inciso": inciso,
				"action": 'registrar'
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('cinfracciones', {
			"id": id,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				console.log("Error al eliminar la infracción");
			}
		}, "json");
	};
	
	this.delImagen = function(nombre, infraccion, fn){
		if (fn.before != undefined)
			fn.before();
				
		$.post('?mod=cinfracciones&action=delImagen&infraccion=' + infraccion, {
			"nombre": nombre
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == false){
				console.log("Ocurrió un error al eliminar el objeto");
			}
		}, "json");
	};
};