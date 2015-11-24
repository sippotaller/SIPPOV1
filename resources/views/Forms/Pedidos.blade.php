@extends("index")
@section("Pedidos")

<section class="content-header">
    <h1>
        Pedidos
        <small>Lista de Pedidos</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class><a href="#ventas">Ventas</a></li>
        <li class="active"><a href="#pedidos">Lista de Pedidos</a></li>
    </ol>
</section>


<section class="content" >
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<div class="col-xs-4 pad">
						<h3 class="box-title">
							Lista de Pedidos
						</h3>
					</div>
					<div class="col-xs-6 pad">
						<input type="search" placeholder="Buscar..." class="form-control">
					</div>
					<div class="col-xs-2 pad">
						<a href="#nuevopedido" class="btn btn-plus btn-primary">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						</a>
					</div>
				</div>
				<div class="box-body table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Número</th>
									<th>Fecha de Pedido</th>
									<th>Cliente</th>									
									<th>Vendedor</th>
									<th>Canal</th>
									<th>Monto(S/.)</th>
									<th>Estado del Pedido</th>
								</tr>
							</thead>
							<tbody>
								@foreach($pedidos as $pedido)
								<tr>
									<td><a href="{{ route('Pedido.show', $pedido->numero) }}">{{ $pedido->numero }}<i class="fa fa-external-link-square"></i></a></td>
									<td>{{ $pedido->fecha }}</td>
									<td>{{ $pedido->nombreCliente.' '.$pedido->apellidoPaternoCliente.' '.$pedido->apellidoMaternoCliente}}</td>
									<td>{{ $pedido->nombreVendedor.' '.$pedido->apellidoPaternoVendedor.' '.$pedido->apellidoMaternoVendedor }}</td>
									<td>{{ $pedido->canal }}</td>
									<td>{{ $pedido->Monto }}</td>
									<td>{{ $pedido->estado }}</td>
								</tr>
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<th>Número</th>
									<th>Fecha de Pedido</th>
									<th>Cliente</th>
									<th>Vendedor</th>
									<th>Punto de Venta</th>
									<th>Monto(S/.)</th>
									<th>Estado del Pedido</th>
								</tr>
							</tfoot>
						</table>
						 {!! $pedidos->setPath('')->render() !!}﻿
				</div>
			</div>
		</div>
	</div>
</section>
@stop