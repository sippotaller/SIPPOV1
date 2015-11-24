@extends("index")
@section("CatalogoClientes")
<section class="content-header">
	<h1>
	Catálogo de Clientes
	<small>Tipos de Clientes</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active"><a href="#administracionparametros">Administración de Parámetros</a></li>
		<li class="active"><a href="#catalogoclientes">Catálogo de Clientes</a></li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="box box-primary">
				<div class="box-header">
					<div class="col-xs-4 pad">
						<h3 class="box-title">
							Tipos de Clientes
						</h3>
					</div>
					<div class="col-xs-8 pad">
						<input type="search" placeholder="Buscar..." class="form-control">
					</div>
					<!-- <div class="col-xs-2 pad">
						<a href="#nuevotipocliente" class="btn btn-plus btn-primary">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						</a>
					</div> -->
				</div>
				<div class="box-body">
					
						<div class="table-responsive">
							<div class="col-xs-12  ">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Cod.</th>
										<th>Desc.</th>
									</tr>
								</thead>
								<tbody>
									@foreach($catalogoCliente as $cliente)
									<tr>
										<td>{{$cliente->codCatCliente}}</td>
										<td>{{$cliente->descripcion}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop

