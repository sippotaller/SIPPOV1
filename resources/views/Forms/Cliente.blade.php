
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nuevo Cliente</title>
        {!! Html::script('js/bootstrap.min.js') !!}
        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/Formularios.css') !!}
    </head>
    <body>
        <!--
        <div class="modulo">
            <div class="row">
                <div class="container-fluid">
                    <div class="col-xs-2">
                        <img src="img/client.png" class="img-circle" width="100px">
                    </div>
                    <div class="col-xs-10   title">
                        <strong >Nuevo Cliente</strong>
                    </div>
                </div>
            </div> -->
            <!--
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Cliente</h3>
                    </div>
                    <div class="box-body">
                        
                    </div>
                </div>
            </div>
            -->

@extends("index")
@section("Cliente")
            <section class="content-header">
                <h1>
                Clientes
                <small>Lista de Clientes</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="#ventas">Ventas</a></li>
                    <li class="active">Clientes</li>
                </ol>
            </section>
            
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-primary">
                            <div class="box-header">
                                <div class="col-xs-4 pad">
                                    <h3 class="box-title">
                                    Lista de Clientes
                                    </h3>
                                </div>
                                {!! Form::open(['route' => 'Cliente.CtaCliente.index', 'method' => 'GET', 'role' => 'search']) !!}
                                <div class="col-xs-6 pad form-group">
                                    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Buscar...']) !!}
                                     <!--button type="submit" class="btn btn-default">Buscar</button-->
                                </div>
                                {!! Form::close() !!}
                                
                                <div class="col-xs-2 pad">
                                    <a href="{{ route('Cliente.CtaCliente.create') }}" class="btn btn-plus btn-primary">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </a>

                                </div>
                            </div>
                            @if(Session::has('message'))
                                <p class="alert alert-success">{{ Session::get('message') }}</p>
                            @endif

                            <div class="box-body table-responsive">
                                <div class="dataTables_wrapper form-inline" role="grid">
                                    
                                    <table class="table table-bordered table-striped dataTable">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>DNI</th>
                                                <th>Nombre</th>
                                                <th>Celular</th>
                                                <th>Correo</th>
                                                <th>Descripción</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($personas as $persona)
                                                <tr data-id="{{ $persona->codigo }}">
                                                    <td>{{$persona->codigo}}</td>
                                                    <td>{{$persona->dni}}</td>
                                                    <td>{{$persona->nombre.' '.$persona->apPat.' '.$persona->apMat}}</td>
                                                    <td>{{$persona->celular}}</td>
                                                    <td>{{$persona->correo}}</td>
                                                    <td>{{$persona->descripcion}}</td>
                                                    <td>
                                                        <a href="{{ route('Cliente.CtaCliente.edit', $persona->codigo) }}">Editar</a>
                                                        <!--a href="#!" class="btn-delete">Eliminar</a-->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                     {!! $personas->setPath('')->appends(Request::only(['name']))->render() !!}﻿
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::open( ['route' => ['Cliente.CtaCliente.destroy', ':PERSONA_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
                
            {!! Form::close() !!}
            </section>

        <script>
            $(document).ready(function(){

                $('.btn-delete').click(function(e){
                    e.preventDefault();
                    var row = $(this).parents('tr');
                    var id = row.data('id');
                    var form = $('#form-delete');
                    var url = form.attr('action').replace(':PERSONA_ID', id); 
                    var data = form.serialize();
                    row.fadeOut();

                    $.post(url, data, function(result){
                        alert(result.message);
                    }).fail(function(){
                        alert('El cliente no ha sido eliminado');
                        row.show();
                    });
                });
            });
        </script>
     
    @stop

        <!--    </div>
    </body>
</html>
