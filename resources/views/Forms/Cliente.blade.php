
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nuevo Cliente</title>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/Formularios.css" type="text/css" rel="stylesheet">
    </head>
    <body>-->
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
                                <div class="col-xs-6 pad">
                                    <input type="search" placeholder="Buscar..." class="form-control">
                                </div>
                                <div class="col-xs-2 pad">
                                    <!--a href="#nuevocliente" class="btn btn-plus btn-primary">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </a-->
                                    <a href="{{ route('Cliente.CtaCliente.create') }}" class="btn btn-plus btn-primary">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </a>

                                </div>
                            </div>
                            <div class="box-body table-responsive">
                                <div class="dataTables_wrapper form-inline" role="grid">
                                    
                                    <table class="table table-bordered table-striped dataTable">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>DNI</th>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($personas as $persona)
                                                <tr>
                                                    <td>{{$persona->codPersona}}</td>
                                                    <td>{{$persona->dni}}</td>
                                                    <td>{{$persona->nomb}}</td>
                                                    <td>{{$persona->apPat}}</td>
                                                    <td>{{$persona->apMat}}</td>
                                                </tr>
                                            @endforeach
                                            <!-- <tr>
                                                <td><a href="#cliente/123">Jose Alvarado Santos</a></td>
                                                <td>929872122</td>
                                                <td>jose@alvarado.com</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#cliente/123">Jose Alvarado Santos</a></td>
                                                <td>929872122</td>
                                                <td>jose@alvarado.com</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#cliente/123">Jose Alvarado Santos</a></td>
                                                <td>929872122</td>
                                                <td>jose@alvarado.com</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#cliente/123">Jose Alvarado Santos</a></td>
                                                <td>929872122</td>
                                                <td>jose@alvarado.com</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#cliente/123">Jose Alvarado Santos</a></td>
                                                <td>929872122</td>
                                                <td>jose@alvarado.com</td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                     {!! $personas->setPath('')->render() !!}﻿
                                    <!--div class="row">
                                        <div class="pull-right">
                                            <div class="col-xs-12">
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
                                    </div-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    @stop
        <!--    </div>
    </body>
</html>
