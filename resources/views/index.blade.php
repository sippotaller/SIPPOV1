<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        {!!HTML::style("css/bootstrap.min.css")!!}
        <!-- font Awesome -->
        {!!HTML::style("css/font-awesome.min.css")!!}
        <!-- Ionicons -->
        {!!HTML::style("css/ionicons.min.css")!!}
        <!-- Morris chart -->
        {!!HTML::style("css/morris/morris.css")!!}
        <!-- jvectormap -->
        {!!HTML::style("css/jvectormap/jquery-jvectormap-1.2.2.css")!!}
        <!-- fullCalendar -->
        {!!HTML::style("css/fullcalendar/fullcalendar.css")!!}
        <!-- Daterange picker -->
        {!!HTML::style("css/daterangepicker/daterangepicker-bs3.css")!!}
        <!-- bootstrap wysihtml5 - text editor -->
        {!!HTML::style("css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")!!}
        <!-- Theme style -->
        {!!HTML::style("css/AdminLTE.css")!!}

        {!!HTML::style("css/Formularios.css")!!}
        
        

        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js")
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#/" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
               
                <div>

                 {!!HTML::image("img/icono_SIPPO.png" ,"alt",array('height'=>"40px"))!!}
                </div>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    {!!HTML::image("img/avatar3.png" ,"alt",array("class"=>"img-circle"))!!}
                                                    
                                                </div>
                                                <h4>
                                                    Erick Bedoya
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Donde estas?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    {!!HTML::image("img/avatar2.png" ,"alt",array("class"=>"img-circle"))!!}
                                                    
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    {!!HTML::image("img/avatar.png" ,"alt",array("class"=>"img-circle"))!!}
                                                    
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    {!!HTML::image("img/avatar2.png" ,"alt",array("class"=>"img-circle"))!!}
                                                    
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    {!!HTML::image("img/avatar.png" ,"alt",array("class"=>"img-circle"))!!}
                                                    
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Daniel Moreno<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    {!!HTML::image("img/avatar3.png" ,"alt",array("class"=>"img-circle"))!!}
                                    
                                    <p>
                                        Daniel Moreno - Administrador
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            {!!HTML::image("img/avatar3.png" ,"alt",array("class"=>"img-circle"))!!}
                            
                        </div>
                        <div class="pull-left info">
                            <p>Hola, Daniel</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <!-- Dashboard -->
                        <li class="active">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="#ventas">
                                <i class="fa  fa-shopping-cart"></i>
                                <span>Ventas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('Cliente.CtaCliente.index')}}"><i class="fa fa-angle-double-right"></i> Clientes</a></li>
                                <li><a href="{{ route('Pedido.index') }}"><i class="fa fa-angle-double-right"></i> Pedidos</a></li>
                                <li><a href={{route("puntoventa.index")}}><i class="fa fa-angle-double-right"></i> Punto de Venta <i class="fa fa-external-link-square"></i></a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa  ion ion-bag"></i>
                                <span>Compras</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#proveedores"><i class="fa fa-angle-double-right"></i> Provedores</a></li>
                                <li><a href="#ordencompra"><i class="fa fa-angle-double-right"></i> Orden de Compra</a></li>
                            </ul>
                        </li> 
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                <span>Administración de Parámetros</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href={{route("CatProducto")}}><i class="fa fa-angle-double-right"></i>Catálogo de Productos</a></li>
                                <li><a href={{ route('CatCliente.index') }}><i class="fa fa-angle-double-right"></i>Catálogo de Clientes</a></li>
                            </ul>
                        </li> 
                        <li class="treeview">
                            <a href="#">
                                <i class="fa  fa-users"></i>
                                <span>Usuarios</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href={{route("AsignarPermisos.index")}}><i class="fa fa-angle-double-right"></i> Asignar Permisos</a></li>
                                <li><a href={{route("Usuario.index")}}><i class="fa fa-angle-double-right"></i> Usuarios</a></li>
                            </ul>
                        </li> 
                       
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>            
             <aside class="right-side">
                <!-- <div ng-view></div> -->
                @section('Producto')
                @show
                @section("Cliente")
                @show

                

                @section("NuevoCliente")
                @show


                @section("Usuario")
                @show

                @section("NuevoUsuario")
                @show

                @section("Clase")
                @show

                @section("AsignarPermisos")
                @show
                
                @Section("Segmento")

                @show

                @section('CatProductos')
                @show

                @section("CreateCatProducto")
                @show
               
                @section('EditarCliente')
                @show

                @section('Pedidos')
                @show

                @section('DetallePedido')
                @show

                @section("CatalogoClientes")
                @show

            </aside>
        </div><!-- ./wrapper -->

       

     
        

        <!-- jQuery 2.0.2 -->
        <script src="http://prog.linkstraffic.net/jquery/jquery-2.1.1.js" type="text/javascript" charset="utf-8"></script>
        <!-- {!!HTML::script("js/jquery-2.1.4.min.js")!!} -->
        {!!HTML::script("js/jquery-ui-1.10.3.min.js")!!}
        {!!HTML::script("js/Producto/CreateProducto.js")!!}
        {!!HTML::script("js/bootstrap.min.js")!!}
        {!!HTML::script("js/Angularjs/lib/underscore-min.js")!!}
        {!!HTML::script("js/Angularjs/lib/angular.min.js")!!}
        {!!HTML::script("js/Angularjs/lib/angular-route.min.js")!!}
        {!!HTML::script("js/Angularjs/app.js")!!}
        {!!HTML::script("js/Angularjs/controllers.js")!!}

        <!-- Morris.js charts -->
        {!!HTML::script("js/raphael-min.js")!!}
        {!!HTML::script("js/plugins/morris/morris.min.js")!!}
        <!-- Sparkline -->
        {!!HTML::script("js/plugins/sparkline/jquery.sparkline.min.js")!!}
        <!-- jvectormap -->
        {!!HTML::script("js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")!!}
        {!!HTML::script("js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")!!}
        <!-- fullCalendar -->
        {!!HTML::script("js/plugins/fullcalendar/fullcalendar.min.js")!!}
        <!-- jQuery Knob Chart -->
        {!!HTML::script("js/plugins/jqueryKnob/jquery.knob.js")!!}
        <!-- daterangepicker -->
        {!!HTML::script("js/plugins/daterangepicker/daterangepicker.js")!!}
        <!-- Bootstrap WYSIHTML5 -->
        {!!HTML::script("js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")!!}
        <!-- iCheck -->
        {!!HTML::script("js/plugins/iCheck/icheck.min.js")!!}

        <!-- AdminLTE App -->
        {!!HTML::script("js/AdminLTE/app.js")!!}
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        {!!HTML::script("js/AdminLTE/dashboard.js")!!}    
        
        {!!HTML::script("js/Ubicacion.js")!!}
        
    </body>
</html>