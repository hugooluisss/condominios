$(document).ready(function(){
	$("#btnDescragar").hide();
	$("#btnGenerar").click(function(){
		$("#btnDescragar").hide();
		$.post("crespaldos", {
			"action": "respaldar",
		}, function(resp){
			if (resp.band){
				$("#btnDescragar").prop("href", resp.archivo);
				$("#btnDescragar").show();
			}
		}, "json");
	});
});