
@extends("index")

@section("CatProductos")
<section class="content-header">
	<h1>
	Catálogo de Productos
	<small>Lista del Productos</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active"><a href="#administracionparametros">Administración de Parámetros</a></li>
		<li class="active"><a href="#catalogoproductos">Catalogo de Productos</a></li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="box box-primary">
			<div class="box-header">
				<div class="col-xs-4 pad">
					<h3 class="box-title">
						Lista de Productos
					</h3>
				</div>
				<div class="col-xs-6 pad">
					<input type="search" placeholder="Buscar..." class="form-control">
				</div>
				<div class="col-xs-2 pad">
						<a href={{route("CatProducto.create")}} class="btn btn-plus btn-primary">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-hover ">
						<thead>
							<tr>
								<th>Cod.</th>
								<th>Tipo de Producto.</th>
								<th>Marca</th>
								<th>Descripción</th>
								<th>Cuantía</th>
								<th>Unid.</th>
								<th>P.V.</th>
							</tr>
						</thead>
						<tbody>
							@foreach($CatalogoProductos as $c)
							<tr>
								<td>{{$c->codProducto}}</td>
								<td>{{$c->tipoProducto}}</td>
								<td>{{$c->marca}}</td>
								<td>{{$c->descProducto}}</td>
								<td>{{$c->cuantia}}</td>
								<td>{{$c->unidad}}</td>
								<td>{{$c->precio}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

@stop