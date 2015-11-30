<!-- <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nuevo Usuario</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/Formularios.css" type="text/css" rel="stylesheet">
</head>
<body> -->

@extends("index")
@section("Usuario")
    <section class="content-header">
        <h1>
            Usuarios
            <small>Lista de Usuarios</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#usuarios">Usuarios</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">  
                <div class="box">
                    <div class="box-header">
                        <div class="col-xs-4 pad">
                            <h3 class="box-title">
                                Lista de Usuarios
                            </h3>
                        </div>
                        {!! Form::open(['route' => 'Usuario.index', 'method' => 'GET', 'role' => 'search']) !!}
                        <div class="col-xs-6 pad form-group">
                            {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Buscar...']) !!}
                             <!--input type="search" name="" id="input" class="form-control" value="" placeholder="Buscar" required="required" pattern="" title=""-->
                        </div>
                         {!! Form::close() !!}
                        <div class="col-xs-2 pad"> 
                            <a href={{route("Usuario.create")}} class="btn btn-primary">
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
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Teléfono</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario->Nombre }}</td>
                                        <td>{{ $usuario->codUsuario }}</td>
                                        <td>{{ $usuario->Telefono }}</td>
                                        <td>{{ $usuario->email }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $usuarios->setPath('')->render() !!}﻿
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

        <!-- <div class="row">
            <div class="container-fluid">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-10   title">
                    <strong >Nuevo Usuario</strong>
                </div>
            </div>
        </div> -->
       
<!-- 
</body>
</html>
 -->