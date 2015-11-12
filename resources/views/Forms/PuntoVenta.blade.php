<!doctype html>
<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Módulo de Ventas</title>
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="skin-blue">
        <div class="container-fluid">
            
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top" >
                    
                    <div class="navbar-header nav">
                        <img src="../img/Icono_SIPPO.png" class="img-responsive nav navbar-nav navbar-left" alt="Image" width="100px">
                        <a href="#" class="navbar-brand  ">Módulo de Ventas</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar_1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="collapse navbar-collapse navbar_1">
                        <form action="" method="POST" class="navbar-form navbar-left" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="">label</label>
                                <input type="search" class="form-control" id="" placeholder="Buscar">
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Victor Daniel Moreno Lopez</a></li>
                        </ul>
                    </div>
                    
                </nav>
            </div>
            <div class="row cuerpo">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <form action="" method="POST" class="form-inline" role="form">
                        <label for="input-id" class="col-sm-1">Categoria</label>
                        <div class="form-group">
                            <div class="col-sm-12 col-sm-offset-1">
                                <label class="radio-inline">
                                    <input type="radio" name="radio1" id="input" value="" checked="checked">
                                    Juguetes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="radio1" id="input" value="" >
                                    Utiles Escolares
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="radio1" id="input" value="" >
                                    Bisuteria
                                </label>
                            </div>
                        </div>
                        
                        
                    </form>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Desc.</th>
                                <th>Precio(S/.)</th>
                                <th>Unidad</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                            </tr>
                            <tr>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                            </tr>
                            <tr>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                            </tr>
                            <tr>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                                <td>algo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#venta_1" aria-controls="venta_1" role="tab" data-toggle="tab">Venta 1</a>
                            </li>
                            <li role="presentation" >
                                <a href="#venta_2" aria-controls="venta_1" role="tab" data-toggle="tab">Venta 2</a>
                            </li>
                            <li role="presentation">
                                <a href="#venta_3" aria-controls="venta_3" role="tab" data-toggle="tab">Venta 3</a>
                            </li>
                            <li role="presentation">
                                <a href="#plus" aria-controls="plus" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                            </li>
                            <li class="pull-right">
                                <a class="btn btn-primary" data-toggle="modal" href='#cliente'>
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="venta_1">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Desc.</th>
                                            <th>Cantidad</th>
                                            <th>Unidad</th>
                                            <th>Sub-Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                        </tr>
                                        <tr>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                        </tr>
                                        <tr>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                        </tr>
                                        <tr>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                            <td>algo 2</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="" method="POST" class="form-inline" role="form">
                                    <label for="input-id" class="col-sm-4">Sub-Total: S/.150.00</label>
                                    <label for="input-id" class="col-sm-4">ISLR(19%): S/.20.00</label>
                                    <label for="input-id" class="col-sm-4">Total: S/.11.000</label>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="venta_2">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Desc.</th>
                                            <th>Cantidad</th>
                                            <th>Unidad</th>
                                            <th>Sub-Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>algo</td>
                                            <td>algo</td>
                                            <td>algo</td>
                                            <td>algo</td>
                                        </tr>
                                        <tr>
                                            <td>algo</td>
                                            <td>algo</td>
                                            <td>algo</td>
                                            <td>algo</td>
                                        </tr>
                                        <tr>
                                            <td>algo</td>
                                            <td>algo</td>
                                            <td>algo</td>
                                            <td>algo</td>
                                        </tr>
                                        <tr>
                                            <td>algo</td>
                                            <td>algo</td>
                                            <td>algo</td>
                                            <td>algo</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="" method="POST" class="form-inline" role="form">
                                    <label for="input-id" class="col-sm-4">Sub-Total: S/.100.00</label>
                                    <label for="input-id" class="col-sm-4">ISLR(19%): S/.19.00</label>
                                    <label for="input-id" class="col-sm-4">Total: S/.81.000</label>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="venta_3">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Desc.</th>
                                            <th>Cantidad</th>
                                            <th>Unidad</th>
                                            <th>Sub-Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                        </tr>
                                        <tr>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                        </tr>
                                        <tr>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                        </tr>
                                        <tr>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                            <td>algo 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="" method="POST" class="form-inline" role="form">
                                    <label for="input-id" class="col-sm-4">Sub-Total: S/.90.00</label>
                                    <label for="input-id" class="col-sm-4">ISLR(19%): S/.18.00</label>
                                    <label for="input-id" class="col-sm-4">Total: S/.95.00</label>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
                        <a class="btn btn-success btn-lg btn-block" data-toggle="modal" href='#modal-id'>Vender</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="cliente">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Seleccionar Cliente</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <div class="col-xs-10 pad">
                                    <input type="search"  class="form-control" placeholder="Buscar...">
                                </div>
                                <div class="col-xs-2 pad">
                                    <div class="pull-right">
                                        <a class="btn btn-primary" data-toggle="modal" href='#nuevocliente'>
                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Tipo de Cliente</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cliente Frecuente</td>
                                    <td>Pedro Dávila</td>
                                    <td>pedrodavila99@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Cliente Frecuente</td>
                                    <td>Pedro Santos</td>
                                    <td>pedrosantos@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Cliente Ocasional</td>
                                    <td>Pedro Anicama</td>
                                    <td>pedroanicama@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Elegir</button>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="modal fade" id="nuevocliente">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Nuevo Cliente</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Nuevo Cliente</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row" >
                                    <div class="container-fluid formulario">
                                        <div class="col-sm-6">
                                            <form role="form">
                                                <div class="form-group-lg" style="padding-bottom:90px;">
                                                    <div class="col-sm-4" >
                                                        <!-- <img class="img-responsive" src="img/camara.png" width="50px"> -->
                                                        <img src="../img/client.png" class="img-circle" width="80px">
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8" style="padding-top:25px;">
                                                        <input class="form-control" type="text" placeholder="Nombre">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group ">
                                                    <div class="col-sm-4 pad">
                                                        <label for="pais" class="control-label">País</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 pad">
                                                        <select class="form-control" id="pais">
                                                            <option value="Peru">Perú</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-4 pad">
                                                        <label for="pais" class="control-label">Provincia</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 pad">
                                                        <select class="form-control" id="pais">
                                                            <option value="Lima">Lima</option>
                                                            <option value="Huaral">Huaral</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-4 pad">
                                                        <label for="pais" class="control-label">Distrito</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 pad">
                                                        <select class="form-control" id="pais">
                                                            <option value="Rimac">Rímac</option>
                                                            <option value="Comas">Comas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group pad">
                                                    <div class="col-sm-4 pad">
                                                        <label for="calle" class="control-label">Ciudad</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 pad">
                                                        <input class="form-control" type="text" placeholder="Ciudad">
                                                    </div>
                                                </div>
                                                <div class="form-group pad" >
                                                    <div class="col-sm-4 pad">
                                                        <label for="calle" class="control-label">Calle</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 pad">
                                                        <input class="form-control" type="text" placeholder="Calle">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-4 pad">
                                                        <label for="codigopostal" class="control-label">Código Postal</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 pad">
                                                        <input class="form-control" type="text" placeholder="CP">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6">
                                            <form role="form">
                                                <div class="form-group ">
                                                    <div class="col-sm-4 pad">
                                                        <label for="telefono" class="control-label">Teléfono</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 pad">
                                                        <input class="form-control" type="text" placeholder="Teléfono">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-4 pad">
                                                        <label for="email" class="control-label">Correo Electrónico</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 pad">
                                                        <input class="form-control" type="email" placeholder="ej. Juan@examplo.com">
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        <div class="col-xs-6 col-sm-1" style="opacity:60%">
                                            <img class="img-responsive" src="../img/reload.png" width="40px" >
                                        </div>
                                        <div class="col-xs-6 col-sm-1" style="opacity:60%">
                                            <img class="img-responsive" src="../img/save.png" width="60px" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Venta</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Forma de Pago</h3>
                            </div>
                            <div class="panel-body">
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#formapago_1" aria-controls="formapago_1" role="tab" data-toggle="tab">
                                                <span class="" aria-hidden="true">S/.</span>
                                                Efectivo
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#formapago_2" aria-controls="formapago_1" role="tab" data-toggle="tab">
                                                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                                                Tarjeta
                                            </a>
                                        </li>
                                    </ul>
                                    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="formapago_1">
                                            <div class="col-xs-12">
                                                <h2 style="text-align:center;">
                                                S/. 5,30
                                                </h2>
                                            </div>
                                            <div class="col-xs-offset-2 col-xs-8">
                                                <input type="number" class="form-control" >
                                            </div>
                                            <div class="col-xs-offset-2 col-xs-4">
                                                <label class="label-control">Pagado :</label>
                                            </div>
                                            <div class="col-xs-6">
                                                <label class="label-control">S/. 10,00</label>
                                            </div>
                                            <div class="col-xs-offset-2 col-xs-4">
                                                <label class="label-control">Restante :</label>
                                            </div>
                                            <div class="col-xs-6">
                                                <label class="label-control">S/. 0,00</label>
                                            </div>
                                            <div class="col-xs-offset-2 col-xs-4">
                                                <label class="label-control">Cambio :</label>
                                            </div>
                                            <div class="col-xs-6">
                                                <label class="label-control">S/. 4,7</label>
                                            </div>
                                            
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="formapago_2">
                                            <div class="col-xs-offset-4 col-xs-6 pad">
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-default">
                                                        <input type="radio"  name="tarj" value="1" /> Visa
                                                    </label>
                                                    <label class="btn btn-default">
                                                        <input type="radio"  name="tarj" value="2" /> Mastercard
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <h2 style="text-align:center;">
                                                S/. 5,30
                                                </h2>
                                            </div>
                                            <div class="col-xs-offset-2 col-xs-8">
                                                <input type="number" class="form-control" >
                                            </div>
                                            <div class="col-xs-offset-2 col-xs-4">
                                                <label class="label-control">Pagado :</label>
                                            </div>
                                            <div class="col-xs-6">
                                                <label class="label-control">S/. 10,00</label>
                                            </div>
                                            <div class="col-xs-offset-2 col-xs-4">
                                                <label class="label-control">Restante :</label>
                                            </div>
                                            <div class="col-xs-6">
                                                <label class="label-control">S/. 0,00</label>
                                            </div>
                                            <div class="col-xs-offset-2 col-xs-4">
                                                <label class="label-control">Cambio :</label>
                                            </div>
                                            <div class="col-xs-6">
                                                <label class="label-control">S/. 4,7</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                        <button type="button" class="btn btn-primary">
                            <i class="glyphicon glyphicon-file" aria-hidden="true"></i> 
                            Factura 
                        </button>
                        <button type="button" class="btn btn-primary">
                            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> 
                            Venta 
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    </body>
</html>