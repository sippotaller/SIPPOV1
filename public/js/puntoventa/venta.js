$(document).ready(function() {
	url="http://localhost:8000/SIPPO/public/puntoventa/"
	$("#keywordProduct").keyup(function(event) {
		if(event.which==13){
			val=$(this).val();
			$("#ListProductos tr").remove();
			$.get(url+"keyword-product/"+val, function(data) {
				data.forEach(function(i){
					$("#ListProductos").append("<tr style='cursor:pointer'><td>"+i["codProducto"]+"</td><td>"+i["descProducto"]+"</td><td>"+i["precio"]+"</td><td>"+i["unidad"]+"</td><td>"+i["existencia"]+"</td></tr>");
				});
			});
		}
	});
	var desc,unid,prec,cod;
	var carCompras=new Array();
	$("#ListProductos").on('click', 'tr', function(event) {
		cod=$(this).find('td').eq(0).html();
		desc=$(this).find('td').eq(1).html();
		prec=$(this).find('td').eq(2).html();
		unid=$(this).find('td').eq(3).html();
		$("#setCantidadProducto").modal("show");
	});

	$("#AgregarProducto").on('click', function(event) {
		
		cant=$("#setCantidad").val();
		if(carCompras[cod]!=null){
			carCompras[cod]["cant"]=parseFloat(carCompras[cod]["cant"])+parseFloat(cant);
			$("#venta_1 table tbody tr").remove();
			carCompras.forEach(function(i){
				$("#venta_1 table tbody").append("<tr><td>"+i["desc"]+"</td><td>"+i["cant"]+"</td><td>"+i["unid"]+"</td><td>"+i["prec"]*i["cant"]+"</td></tr>");
			});
			// $("#venta_1 table tbody").append("<tr><td>"+desc+"</td><td>"+$("#setCantidad").val()+"</td><td>"+unid+"</td><td>"+$("#setCantidad").val()*prec+"</td></tr>");
		}else{
			carCompras[cod]={"codigo":cod,"desc":desc,"prec":prec,"unid":unid,"cant":cant};
			$("#venta_1 table tbody").append("<tr><td>"+desc+"</td><td>"+$("#setCantidad").val()+"</td><td>"+unid+"</td><td>"+$("#setCantidad").val()*prec+"</td></tr>");
		}

		subtotal=0;
		$("#venta_1 table tbody tr").each(function(index, el) {
			subtotal=subtotal+parseInt($(this).find('td').eq(3).html());
		});
		$("#ISLR").text("ISLR(19%): S/."+Math.round(19*subtotal)/100);
		$("#subtotal").text("Sub-Total: S/."+subtotal);
		$("#total").text("Total: S/."+subtotal*1.19);
		$("#setCantidadProducto").modal("hide");
		console.log(carCompras);
	});

	$("#searchClient").keyup(function(event) {
		val=$(this).val();
		listClientes=[];
		if(event.which==13){
			$("#ListClientes tr").remove();
			$.get(url+'cliente/'+val, function(data) {
				data.forEach(function(i){
					listClientes[i["codigo"]]={"cod":i["codigo"],"desc":i["descripcion"],"nombre":i["nombre"],"correo":i["correo"]};
					$("#ListClientes").append("<tr style='cursor:pointer'><td>"+i["codigo"]+"</td><td>"+i["descripcion"]+"</td><td>"+i["nombre"]+"</td><td>"+i["correo"]+"</td></tr>")
				});
			});
		}
	});
	var cliente;
	$("#ListClientes").on('click', 'tr', function(event) {
		$("#NombreCliente").text("("+$(this).find('td').eq(0).html()+"-"+$(this).find('td').eq(2).html()+")");
		cliente=listClientes[parseInt($(this).find('td').eq(0).html())];
		$(this).addClass("seleccionado");
		$("#cliente").modal("hide");
		console.log(cliente);
	});
	$("#btnventa").on('click',  function(event) {
		$("#modalventa").modal("show");
		$("#montopago").text($("#total").text());
	});

	$("#entregado").keyup(function(event) {
		if($("#entregado").val()=="" || $("#entregado").val()<0){
			$("#entregado").val(0);
		}
		
			$("#pagado").text($("#entregado").val());
			monto=parseFloat($("#total").text().replace("Total: S/.",""))*100;
			restante=(monto-parseInt($("#entregado").val())*100)/100;
			if(restante>0){
				$("#restante").text(restante);
				$("#cambio").text("0.0");
			}else{
				$("#cambio").text(restante*(-1));
				$("#restante").text("0.0");
			}
	});

	$("#btnTransVenta").on('click',  function(event) {
			token=$("#_token").val();
			$.post(url+'venta', {_token:token,cliente: cliente,productos:carCompras}, function(data, textStatus, xhr) {
				console.log(data);
			});

	});


});