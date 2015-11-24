@extends("index")
@section("DetallePedido")
<section class="content-header">
    <h1>
        Pedidos
        <small>Lista de Pedidos </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class><a href="#ventas">Ventas</a></li>
        <li class="active"><a href="#listapedidos">Lista de Pedidos</a></li>
    </ol>
</section>


<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">
						<div>
							<button type="button" class="btn btn-default ">
								Datos del Cliente 
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
							</button>
						</div>
					</h3>
				</div>
				<div class="box-body">
					<form role="form">
						<div class="form-group">
							<label for="">Nombres:</label>
							<label for="">{{ $detallePedido[0]->nombreCliente.' '.$detallePedido[0]->apellidoPaternoCliente.' '.$detallePedido[0]->apellidoMaternoCliente }}</label>
						</div>
						<div class="form-group">
							<label for="">Teléfono:</label>
							<label for="">(01) {{$detallePedido[0]->telefono}}</label>
						</div>
						<div class="form-group">
							<label for="">Celular:</label>
							<label for="">{{$detallePedido[0]->celular}}</label>
						</div>
						<div class="form-group">
							<label for="">Correo:</label>
							<label for="">{{$detallePedido[0]->correo}}</label>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">
						<div>
							<button type="button" class="btn btn-default ">
								Datos del Pedido 
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
							</button>
						</div>
					</h3>
				</div>
				<div class="box-body">
					<form role="form">
						<div class="form-group">
							<label for="">Fecha de Pedido :</label>
							<label for="">{{$detallePedido[0]->fecha}}</label>
						</div>
						<div class="form-group">
							<label for="">Vendedor :</label>
							<label for="">{{ $detallePedido[0]->nombreVendedor.' '.$detallePedido[0]->apellidoPaternoVendedor.' '.$detallePedido[0]->apellidoMaternoVendedor}}</label>
						</div>
						<div class="form-group">
							<label for="">Canal :</label>
							<label for="">{{$detallePedido[0]->canal}}</label>
						</div>
						<div class="form-group">
							<label for="">Monto :</label>
							<label for="">S/. {{$detallePedido[0]->Monto}}</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">
						Detalle de Pedido
					</h3>
				</div>
				<div class="box-body">
					<form role="form" >
						<div class="form-group">
							<label for="numeropedido">Numero pedido: </label>
							<label for=""><strong>{{$detallePedido[0]->numero}}</strong></label>
						</div>	
						<div class="form-group">
							<label for=""></label>
						</div>
					</form>

					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Cód.</th>
								<th>Desc. Prod.</th>
								<th>Cantidad</th>
								<th>Precio Unitario</th>
								<th>Desc(%)</th>
								<th>Importe</th>
								<th>IGV(18%)</th>
								<th>Total</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody>
							@foreach($detallePedido as $detalle)
							<tr>
								<td>{{$detalle->codigo}}</td>
								<td>{{$detalle->descripcionProducto}}</td>
								<td>{{$detalle->cantidad}}</td>
								<td>S/. {{$detalle->precio}}</td>
								<td>10%</td>
								<td>S/. {{$detalle->precio*$detalle->cantidad*0.9}}</td>
								<td>S/. {{$detalle->precio*$detalle->cantidad*0.9*0.18}}</td>
								<th>S/. {{$detalle->precio*$detalle->cantidad*0.9*0.82}}</th>
								<td>{{$detalle->estado}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@stop



