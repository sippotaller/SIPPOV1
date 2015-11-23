jQuery(document).ready(function() {
	url="http://"+window.location.host+"/SIPPO/public/CatProducto/";
	$("#Segmento").on('click', function() {
		codSegmento=$(this).val();
		$.get(url+"familia/"+codSegmento, function(data) {
			$("#Familia").remove("option");
			$("#Familia").append('<option value="'+data["codFamilia"]+'"">'+data["desc"]+'</option>')
		});	
	});
	


});