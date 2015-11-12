<!-- 
									
<!doctype html>
<html>
<head>

<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Módulo de Ventas</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default navbar-fixed-top" >
                <div class="navbar-header">
					<img src="img/Icono_SIPPO.png" class="img-responsive nav navbar-nav navbar-left" alt="Image" width="100px">
                    <a href="#" class="navbar-brand">
                    	<strong>Nuevo Producto</strong>
                    </a>
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
                            <label class="sr-only" for=""></label>
                            <input type="search" class="form-control" id="" placeholder="Buscar">
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Victor Daniel Moreno Lopez</a></li>
                    </ul>
                </div>
            </nav>
        </div>
	</div> -->
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
									  	 			<input type="text" name="" id="input" class="form-control" placeholder="Buscar...">
									  	 			</div>
									  	 		</div>
												<div class="form-group">
													<label for="input" class="col-sm-3 control-label">Segmento: </label>
													<div class="col-sm-9">
														<select name="" id="input" class="form-control">
															<option value="">Select One</option>
															<option value="">Material Vivo Vegetal y Animal, Accesorios y Suministros</option>
															<option value="">Alimentos, Bebidas y Tabaco </option>
															<option value="">Instrumentos Musicales, Juegos, Juguetes, Artes, Artesanías y Equipo educativo, Materiales, Accesorios y Suministros</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label for="input" class="col-sm-3 control-label">Familia: </label>
													<div class="col-sm-9">
														<select name="" id="input" class="form-control">
															<option value=""> Select One </option>
															<option value="">Instrumentos musicales, piezas y accesorios</option>
															<option value="">Juguetes y juegos</option>
															<option value="">Servicios de animales vivos</option>
														</select>
													</div>
												</div>
												
												<div class="form-group">
													<label for="input" class="col-sm-3 control-label">Clase: </label>
													<div class="col-sm-9">
														<select name="" id="input" class="form-control">
															<option value=""> Select One </option>
															<option value="">Gestión ganadera</option>
															<option value="">Piezas y accesorios de instrumentos musicales</option>
															<option value="">Accesorios de música y danza</option>
															<option value="">Vigilancia</option>
														</select>
													</div>
												</div>

												
												<div class="form-group">
													<label for="input" class="col-sm-3 control-label">Producto: </label>
													<div class="col-sm-9">
														<select name="" id="input" class="form-control">
															<option value=""> Select One </option>
															<option value="">Servicios de intervención en los conductos</option>
															<option value="">Vigas de triplex</option>
															<option value="">Conductos de latón</option>
														</select>	
													</div>
												</div>
												
												<div class="form-group">
													<label for="input-id" class="col-sm-3 control-label"> Código :</label>
													<label for="input-id" class="col-sm-2 control-label">60121104
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
													<select name="" id="input" class="form-control">
														<option value="">-- Select One --</option>
														<option value="">CHAMEX</option>
														<option value="">HOJAX</option>
														<option value="">XEROX</option>
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
													<select name="" id="input" class="form-control">
														<option value="">-- Select One --</option>
														<option value="">Menor</option>
														<option value="">Mayot</option>
														<option value="">Empresas</option>
													</select>
												</div>
												<div class="col-xs-4">
													<button type="button" class="form-control btn btn-primary">Nuevo</button>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-xs-3 control-label">Unidades:</label>
												<div class="col-xs-5">
													<select name="" id="input" class="form-control">
														<option value="">-- Select One --</option>
														<option value="">UNID</option>
														<option value="">CTO</option>
														<option value="">MILL</option>
														<option value="">1/2MILL</option>
														<option value="">MILL</option>
													</select>
												</div>
												<div class="col-xs-4">
													<button type="button" class="form-control btn btn-primary">Nuevo</button>
												</div>
											</div>
											
											<div class="form-group">
												<label for="number" class="col-xs-3 control-label">Min:</label>
												<div class="col-xs-3">
													<input type="number" name="" id="input" class="form-control">	
												</div>
												<label for="number" class="col-xs-3 control-label">Max:</label>
												<div class="col-xs-3">
													<input type="number" name="" id="input" class="form-control">	
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
										<label class="col-sm-5">Hojas bond</label>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5">Unidad de Medida: </label>
										<label class="col-sm-5">MILL</label>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5">Cuantía:</label>
										<label class="col-sm-5">Menor</label>
									</div>
									<div class="form-group">
										<label for="input" class="control-label col-sm-5">Descripción Corta:</label>
										<div class="col-sm-5">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label for="input"  class="control-label col-sm-5">Descripción Larga:</label>
										<div class="col-sm-5">
											<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>
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

<!-- </body>

</html> -->
                  
           