
$(document).ready(function() {
	items=[];
	items_ant=[];
	url="http://"+window.location.host+"/SIPPO/public/Cliente/CtaCliente/";	
	var codCuantia;
	var codMarca;
	var codTipoProducto;
	$("#departamento").on('click', function() {
		departamento=$(this).val();
		$("#provincia option").remove();
		$.get(url+"list-provincia/"+departamento, function(data) {
			data.forEach(function(i){
				$("#provincia").append('<option value="'+i["provincia"]+'"">'+i["provincia"]+'</option>');
			});
		});	
	});

	$("#provincia").on('click', function() {
		distrito=$(this).val();
		$("#distrito option").remove();
		$.get(url+"list-distrito/"+distrito, function(data) {
			data.forEach(function(i){
				$("#distrito").append('<option value="'+i["distrito"]+'"">'+i["distrito"]+'</option>');
			});
		});	
	});
	
});