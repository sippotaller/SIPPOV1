
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
		$("#ListProductos tbody tr").remove();
		$.get(url+"list-tipo-producto/"+codClase, function(data) {	
			data.forEach(function(i){
				$("#Producto").append('<option value="'+i["codTipoProducto"]+'"">'+i["desc"]+'</option>');
				$("#ListProductos tbody").append("<tr  style='cursor:pointer' ><td>"+i["codTipoProducto"]+"</td><td>"+i["desc"]+"</td></tr>");
			});
		});	
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

	
	$("#ListProductos tbody").on("click","tr",function(event) {
		$(this).find('td').each(function(index) {
			if(index==0) {
				codProducto=$(this).text();
				$("#codTipoProducto").text(codProducto);
				$.get(url+'tipo-producto/'+codProducto, function(data) {
					data.forEach(function(i){
						$("#Res_TipoProducto").text(i["desc"]);
					});
				});
			}
		});
	});

	$("#search").on("keyup", function(){
		keyword=$(this).val();
		$("#ListProductos tbody tr").remove();
		$.get(url+'key-tipo-producto/'+keyword, function(data) {
			data.forEach(function(i){
				$("#ListProductos tbody").append("<tr style='cursor:pointer' ><td>"+i["codTipoProducto"]+"</td><td>"+i["desc"]+"</td></tr>");
			});
		});	
	});
	

	$('#UnidadMedida').on('click', function() {
		if($(this).val()!=""){
			ListCuantia();	
			$.get(url+'unidad-medida/'+$(this).val(), function(data) {
				data.forEach(function(i){
					$("#Res_UM").text(i["desc"]);
				});
			});
		}
		
	});
	$('#TipoCuantia').on('click', function() {
		if($(this).val()!=""){
			ListCuantia();	
			$.get(url+'tipo-cuantia/'+$(this).val(), function(data) {
				data.forEach(function(i){
					$("#Res_Cuantia").text(i["desc"]);
				});
			});
		}
		
	});

	function ListCuantia(){
		UM=$('#UnidadMedida').val();
		TC=$('#TipoCuantia').val();
		$("#Cuantia tr").remove();

		if(TC!="" && UM!=""){
			$.get(url+'list-cuantia/'+TC+"/"+UM, function(data) {
				data.forEach(function(i){
					$("#Cuantia").append("<tr style='cursor:pointer'><td>"+i["codCuantia"]+"</td><td>"+i["max"]+"</td><td>"+i["min"]+"</td></tr>");
				});
			});
		}
	}
	$("#Cuantia").on('click', 'tr', function(event) {
		$("#Res_Cuantia").text(($("#Res_Cuantia").text()+" (Min : "+$(this).find('td').eq(1).html()+", Max : "+$(this).find('td').eq(2).html()+")"));
	});


	$("#Marca").on("change",function(){
		codMarca=$(this).val();
		$.get(url+'marca/'+codMarca, function(data) {
			data.forEach(function(i){
				$("#Res_Marca").text(i["desc"]);
			});
		});
	});

	// urlCuantia="http://"+window.location.host+"/SIPPO/public/Cuantia";
	$("#btnNuevoProducto").on('click', function() {
		urlCuantia=$("#urlCuantiaStore").val();
		Minimo=$("#CuantiaMinimo").val();
		Maximo=$("#CuantiaMaximo").val();
		codTipoCuantia=$("#CuantiaTipoCuantia").val();
		codUM=$("#CuantiaUM").val();
		Token=$("#_token").val();
		$("#errorMinimo").text("");
		$("#errorMaximo").text("");
		$("#errorUM").text("");
		$("#errorTipoCuantia").text("");
		$("#statusCuantia").text("");
		jQuery.post(urlCuantia, 
			{min:Minimo
			,max:Maximo
			,codTipoCuantia:codTipoCuantia
			,codUM:codUM
			,_token:Token}, 
			function(data) {
		  		console.log(data);
		  		$("#statusCuantia").text(data["status"]);
		  		if(data["status"]=="Error"){	
		  			$("#errorMinimo").text(data["messages"]["min"]);
		  			$("#errorMaximo").text(data["messages"]["max"]);
		  			$("#errorUM").text(data["messages"]["codUM"]);
		  			$("#errorTipoCuantia").text(data["messages"]["codTipoCuantia"]);
		  		}
			});

	});

	
	$("#btnNuevaMarca").on('click',  function() {
		urlMarca=$("#urlMarcaStore").val();
		desc=$("#MarcaDesc").val();
		token=$("#_token").val();
		$("#statusMarca").text("");
		$("#errorMarca").text("");
		jQuery.post(urlMarca, {desc: desc,_token:token}, function(data) {
			console.log(data);
			$("#statusMarca").text(data["status"]);
		  	if(data["status"]=="Error"){
		  		$("#errorMarca").text(data["messages"]["desc"]);
		  	}else{
		  		$("#Marca").append("<option value='"+data["object"]["codMarca"]+"'>"+data["object"]["desc"]+"</option>")
		  	}
		});
		
	});

});