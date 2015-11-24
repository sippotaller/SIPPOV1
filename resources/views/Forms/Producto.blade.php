
@extends("index")

@section("Producto")
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
					<a href="#nuevoproducto" class="btn btn-plus btn-primary">
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
								<th>Cuantía</th>
								<th>Unid.</th>
								<th>P.V.</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="#">60121015</a></td>
								<td>Adhesivos decorativos en vinilo</td>
								<td>Stanford</td>
								<td>Menor</td>
								<td>UNI</td>
								<td>S/ 4.00</td>
							</tr>
							<tr>
								<td><a href="#">60121101</a></td>
								<td>Papel para dibujo de sulfito</td>
								<td>Stanford</td>
								<td>Menor</td>
								<td>UNI</td>
								<td>S/ 4.00</td>						
							</tr>
							<tr>
								<td><a href="#">60121102</a></td>
								<td>Papel para dibujo de pasta de madera triturada</td>
								<td>Stanford</td>
								<td>Mayor</td>
								<td>UNI</td>
								<td>S/ 4.00</td>						
							</tr>
							<tr>
								<td><a href="#">60121103</a></td>
								<td>Papel para dibujo de calcar o pergamino</td>
								<td>Stanford</td>
								<td>Mayor</td>
								<td>UNI</td>
								<td>S/ 5.00</td>						
							</tr>
							<tr>
								<td><a href="#">60121104</a></td>
								<td>Papel bond para para dibujo</td>
								<td>Stanford</td>
								<td>Menor</td>
								<td>UNI</td>
								<td>S/ 5.00</td>						
							</tr>
							<tr>
								<td><a href="#">60121105</a></td>
								<td>Papel de dibujo para carboncillo o pastel</td>
								<td>Stanford</td>
								<td>Menor</td>
								<td>UNI</td>
								<td>S/ 4.00</td>						
							</tr>
							<tr>
								<td><a href="#">60121106</a></td>
								<td>Papel brístol para dibujo</td>
								<td>Stanford</td>
								<td>Mayor</td>
								<td>UNI</td>
								<td>S/ 4.00</td>						
							</tr>
							<tr>
								<td><a href="#">60121107</a></td>
								<td>Hojas de papel para acuarela </td>
								<td>Stanford</td>
								<td>Mayor</td>
								<td>UNI</td>
								<td>S/ 4.00</td>						
							</tr>
							<tr>
								<td><a href="#">60121108</a></td>
								<td>Cuadernos de papel para acuarela</td>
								<td>Stanford</td>
								<td>Mayor</td>
								<td>UNI</td>
								<td>S/ 4.00</td>						
							</tr>
							<tr>
								<td><a href="#">60121109</a></td>
								<td>Blocs de papel para acuarela</td>
								<td>Stanford</td>
								<td>Mayor</td>
								<td>UNI</td>
								<td>S/ 4.00</td>						
							</tr>
							<tr>
								<td><a href="#">60121110</a></td>
								<td>Papel para pintura dactilar</td>
								<td>Stanford</td>
								<td>Mayor</td>
								<td>UNI</td>
								<td>S/ 4.00</td>						
							</tr>
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