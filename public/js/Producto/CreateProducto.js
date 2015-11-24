$(document).ready(function() {
	items=[];
	items_ant=[];
	url="http://"+window.location.host+"/SIPPO/public/CatProducto/";
	$("#Segmento").on('click', function() {
		codSegmento=$(this).val();
		$("#Familia option").remove();
		$.get(url+"list-familia/"+codSegmento, function(data) {
			data.forEach(function(i){
				$("#Familia").append('<option value="'+i["codFamilia"]+'"">'+i["desc"]+'</option>');
			});
		});	
	});

	$("#Familia").on('click', function() {
		codFamilia=$(this).val();
		$("#Clase option").remove();
		$.get(url+"list-clase/"+codFamilia, function(data) {
			data.forEach(function(i){
				$("#Clase").append('<option value="'+i["codClase"]+'"">'+i["desc"]+'</option>');
			});
		});	
	});
	$("#Clase").on('click', function() {
		codClase=$(this).val();
		$("#Producto option").remove();
		$("#ListProductos tr").remove();
		$.get(url+"list-tipo-producto/"+codClase, function(data) {	
			data.forEach(function(i){
				$("#Producto").append('<option value="'+i["codTipoProducto"]+'"">'+i["desc"]+'</option>');
				$("#ListProductos").append("<tr><td ><input class='radioTipoProducto' type='radio' value='"+i["codTipoProducto"]+"' name='radioTipoProducto'>"+i["codTipoProducto"]+"</td><td>"+i["desc"]+"</td></tr>");
			});
		});	
	});
	
	$(".radioTipoProducto").on('click',  function() {
		codProducto=$(this).val();
		console.log(codProducto);

		$("#codTipoProducto").text(codProducto);
	});

	$("#Producto").on('click', function() {
		codProducto=$(this).val();
		$("#codTipoProducto").text(codProducto);
		$.get(url+'tipo-producto/'+codProducto, function(data) {
			data.forEach(function(i){
				$("#Res_TipoProducto").text(i["desc"]);
			});
		});
	});
	$("#search").on("keyup", function(){
		keyword=$(this).val();
		$("#ListProductos tr").remove();
		$.get(url+'key-tipo-producto/'+keyword, function(data) {
			data.forEach(function(i){
				$("#ListProductos").append("<tr><td ><input class='radioTipoProducto' type='radio' value='"+i["codTipoProducto"]+"' name='radioTipoProducto'>"+i["codTipoProducto"]+"</td><td>"+i["desc"]+"</td></tr>");
				
			});
		});	
	});
	$('#UnidadMedida').on('click', function() {
		if($(this).val()!=""){
			ListCuantia();	
		}
		$.get(url+'unidad-medida/'+$(this).val(), function(data) {
			data.forEach(function(i){
				$("#Res_UM").text(i["desc"]);
			});
		});
	});
	$('#TipoCuantia').on('click', function() {
		if($(this).val()!=""){
			ListCuantia();	
		}
		$.get(url+'tipo-cuantia/'+$(this).val(), function(data) {
			data.forEach(function(i){
				$("#Res_Cuantia").text(i["desc"]);
			});
		});
	});

	function ListCuantia(){
		UM=$('#UnidadMedida').val();
		TC=$('#TipoCuantia').val();
		$("#Cuantia tr").remove();
		$.get(url+'list-cuantia/'+TC+"/"+UM, function(data) {
			data.forEach(function(i){
				$("#Cuantia").append("<tr><td>"+i["codCuantia"]+"</td><td>"+i["max"]+"</td><td>"+i["min"]+"</td><td><input type='radio' id='radioCuantia' name='radioCuantia' value='"+i["codCuantia"]+"'></td></tr>");
			});
		});
	}

	$("#Marca").on("change",function(){
		codMarca=$(this).val();
		$.get(url+'marca/'+codMarca, function(data) {
			data.forEach(function(i){
				$("#Res_Marca").text(i["desc"]);
			});
		});
	});

	urlCuantia="http://"+window.location.host+"/SIPPO/public/Cuantia";
	$("#btnNuevoProducto").on('click', function() {
		Minimo=$("#CuantiaMinimo").val();
		Maximo=$("#CuantiaMaximo").val();
		codTipoCuantia=$("#CuantiaTipoCuantia").val();
		codUM=$("#CuantiaUM").val();
		Token=$("#_token").val();
		$("#errorMinimo").text("");
		$("#errorMaximo").text("");
		$("#errorUM").text("");
		$("#errorTipoCuantia").text("");
		$("#status").text("");
		jQuery.post('http://localhost:8000/SIPPO/public/Cuantia', 
			{min:Minimo
			,max:Maximo
			,codTipoCuantia:codTipoCuantia
			,codUM:codUM
			,_token:Token}, 
			function(data) {
		  		console.log(data);
		  		$("#status").text(data["status"]);
		  		if(data["status"]=="Error"){	
		  			$("#errorMinimo").text(data["messages"]["min"]);
		  			$("#errorMaximo").text(data["messages"]["max"]);
		  			$("#errorUM").text(data["messages"]["codUM"]);
		  			$("#errorTipoCuantia").text(data["messages"]["codTipoCuantia"]);
		  		}
			});

	});

});