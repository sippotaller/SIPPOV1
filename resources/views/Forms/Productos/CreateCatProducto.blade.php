@extends("index")

@section("CreateCatProducto")
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
{!!HTML::script("js/Producto/CreateProducto.js")!!}
<style type="text/css">
		#Productos{
				-webkit-overflow-y: scroll;
				overflow-y: scroll;
				-webkit-width: 100%;
				width: 100%;
				height: 200px;
				-webkit-position: relative;
				position: relative;
			}
</style>

<section class="content-header">
	<h1>
	Catálogo de Productos
	<small>Nuevo Producto</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active"><a href="#administracionparametros">Administración de Parámetros</a></li>
		<li class="active"><a href="#nuevoproducto">Nuevo Producto</a></li>
	</ol>
</section>

<section class="content">
	<div class="cuerpo"  >
		<div class="row">
			<div class="container-fluid">
				<!-- Producto -->
				<div class="col-xs-12 col-sm-6"  >
					
					<div class="panel panel-primary" style="width:100%;height:100%;">
						<div class="panel-heading">
							<h3 class="panel-title">Tipo de Producto</h3>
						</div>
						
						<div class="panel-body">
							<div class="form-horizontal" role="form">
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text"  id="search" class="form-control" placeholder="Buscar...">
									</div>
								</div>
								<div class="form-group">
									<label for="input" class="col-sm-3 control-label">Segmento: </label>
									<div class="col-sm-9">
										<select  id="Segmento" class="form-control">
											@foreach($Segmento as $s)
												<option value={{$s->codSegmento}}>{{$s->desc}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="input" class="col-sm-3 control-label">Familia: </label>
									<div class="col-sm-9">
										<select  id="Familia" class="form-control">
											
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label for="input" class="col-sm-3 control-label">Clase: </label>
									<div class="col-sm-9">
										<select name="" id="Clase" class="form-control">
											
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label for="input" class="col-sm-3 control-label">Producto: </label>
									<div class="col-sm-9">
										<select name="" id="Producto" class="form-control">
											
										</select>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Códico</th>
												<th>Desc</th>
											</tr>
										</thead>
										<tbody id="ListProductos">
											
										</tbody>
									</table>
								</div>
								<div class="form-group">
									<label for="input-id" class="col-sm-3 control-label"> Código :</label>
									<label for="input-id" class="col-sm-2 control-label"><span id="codTipoProducto"></span>
									</label>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- Marca -->
				<div class="col-xs-12 col-sm-6" >
					<div class="panel panel-primary"style="width:100%;">
						<div class="panel-heading">
							<h3 class="panel-title">Marca</h3>
						</div>
						<div class="panel-body">
							<div class="form-horizontal" role="form">
								<div class="form-group">
									<label for="input" class="col-xs-3 control-label">Marca:</label>
									<div class="col-xs-5">
										<select id="Marca" class="form-control">
											<option value="">-- Select One --</option>
											@foreach($Marca as $m)
												<option value={{$m->codMarca}}>{{$m->desc}}</option>
											@endforeach
										</select>
									</div>
									<div class="col-xs-4">
										<button type="button" class="form-control btn btn-primary">Nuevo</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Cuatía -->
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-primary" style="width:100%;">
						<div class="panel-heading">
							<h3 class="panel-title">Cuantía</h3>
						</div>
						<div class="panel-body">
							<div class="form-horizontal" role="form">
								<div class="form-group">
									<label for="input" class="col-xs-3 control-label">Tipo:</label>
									<div class="col-xs-5">
										<select  id="TipoCuantia" class="form-control">
											<option value="">-- Select One --</option>
											@foreach($Cuantia as $c)
												<option value={{$c->codTipoCuantia}}>{{$c->desc}}</option>
											@endforeach
										</select>
									</div>
									<div class="col-xs-4">
										<button type="button" class="form-control btn btn-primary">Nuevo</button>
									</div>
								</div>
								<div class="form-group">
									<label for="input" class="col-xs-3 control-label">Unidades:</label>
									<div class="col-xs-5">
										<select  id="UnidadMedida" class="form-control">
											<option value="">-- Select One --</option>	
											@foreach($UnidadMedida as $um)
												<option value={{$um->codUM}}>{{$um->desc}}</option>
											@endforeach
										</select>
									</div>
									<div class="col-xs-4">
										<button type="button" class="form-control btn btn-primary">Nuevo</button>
									</div>
								</div>
								
								<div class="form-group">
									<div class="table-responsive" style="padding:10px;">
										<table class="table table-bordered table-hover">
											<thead>
												<tr>
													<th>id</th>
													<th>Mín</th>
													<th>Máx</th>
													<th>Seleccionar
														<div class="pull-right">
														<button type="button" class="btn btn-success" data-toggle="modal" href='#NuevaCuantia'>
															<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
														</button>
														</div>
													</th>
												</tr>
											</thead>
											<tbody id="Cuantia">
											</tbody>
										</table>
									<!-- <label for="number" class="col-xs-3 control-label">Min:</label>
									<div class="col-xs-3">
										<input type="number" name="" id="input" class="form-control">
									</div>
									<label for="number" class="col-xs-3 control-label">Max:</label>
									<div class="col-xs-3">
										<input type="number" name="" id="input" class="form-control">
									</div> -->
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Resumen -->
		<div class="col-xs-12 ">
			<div class="panel panel-primary"style="width:100%;">
				<div class="panel-heading">
					<h3 class="panel-title">Resumen</h3>
				</div>
				<div class="panel-body">
					<div class="form-horizontal" role="form">
						<div class="form-group">
							<label class="control-label col-sm-5">Tipo de Producto: </label>
							<label id="Res_TipoProducto"class="col-sm-5"></label>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-5">Marca: </label>
							<label id="Res_Marca"class="col-sm-5"></label>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-5">Unidad de Medida: </label>
							<label id="Res_UM"class="col-sm-5"></label>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-5">Cuantía:</label>
							<label id="Res_Cuantia" class="col-sm-5"></label>
						</div>
						<div class="form-group">
							<label for="input" class="control-label col-sm-5">Descripción :</label>
							<div class="col-sm-5">
								<input id="Res_Decripcion"type="text" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<button class="btn-success col-xs-offset-10">Crear</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Nueva Cuantia -->
<div class="modal fade" id="NuevaCuantia">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Nueva Cuantía</h4>
				<label id="status"></label>
			</div>
			<div class="modal-body">
				<form role="form">		
				 	<input type="hidden" id="_token" value="<?php echo csrf_token(); ?>">
					<div class="form-group">
						<label for="">Tipo de Cuantía</label>
						<label id="errorTipoCuantia"></label>
						<select  id="CuantiaTipoCuantia" class="form-control">
							<option value="">-- Select One --</option>
							@foreach($Cuantia as $c)
								<option value={{$c->codTipoCuantia}}>{{$c->desc}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="">Unidad de Medido</label>
						<label id="errorUM"></label>
						<select  id="CuantiaUM" class="form-control">
							<option value="">-- Select One --</option>
							@foreach($UnidadMedida as $um)
								<option value={{$um->codUM}}>{{$um->desc}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Mínimo</label>
						<label id="errorMinimo"></label>
						<input type="number" id="CuantiaMinimo" class="form-control" value="" min="1">
					</div>
					<div class="form-group">
						<label>Máximo</label>
						<label id="errorMaximo"></label>
						<input type="number" id="CuantiaMaximo" class="form-control" value="" min="1">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" id="btnNuevoProducto">Guardar</button>
			</div>
		</div>
	</div>
</div>


@stop