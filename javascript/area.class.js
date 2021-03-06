TArea = function(){
	var self = this;
	
	this.add = function(id, nombre, incisos, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('careas', {
				"id": id,
				"nombre": nombre,
				"incisos": incisos,
				"action": 'add'
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('careas', {
			"id": id,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				console.log("Error al eliminar el �rea");
			}
		}, "json");
	};
};