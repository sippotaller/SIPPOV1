  
@extends("index")
@section("NuevoCliente")
 <section class="content-header">
    <h1>
        Clientes
        <small>Lista de Clientes</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#ventas">Ventas</a></li>
        <li class="active"><a href="#cliente">Clientes</a></li>
        <li class="active">Nuevo Cliente</li>
    </ol>
</section>
<section class="content">
	<div class="col-xs-12">
		<div class="panel panel-primary">
		    <div class="panel-heading">
		        <h3 class="panel-title">Nuevo Cliente</h3>
		    </div>
		    <div class="panel-body">
				@include('Forms.partials.error')

		    	{!! Form::open(['route' => 'Cliente.CtaCliente.store', 'method' => 'POST']) !!}
		        	@include('Forms.partials.formularioCliente')
		        {!! Form::close() !!}   
		    </div>
		</div>
	</div>
</section>
@stop