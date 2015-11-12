

 <section class="content-header">
    <h1>
        Permisos
        <small>Asignar Permisos</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#usuarios">Usuarios</a></li>
        <li class="active"><a href="#asignarpermisos">Asignar Permisos</a></li>
    </ol>
</section>
s

<div class="col-xs-12">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title">Asignar Permisos</h3>
		  </div>
		  <div class="panel-body">
		  		<div class="box box-solid">
			  		<div class="box-header">
			  			<h3 class="box-title">Usuarios del Sistema</h3>
			  		</div>
					<div class="box-body">
						<div class="col-xs-8">
							<select multiple id="input" class="form-control" required="required">
					  			<option value="">Gerente General</option>
					  			<option value="">Administrador</option>
					  			<option value="">Gerente de Operaciones</option>
					  			<option value="">Vendedor</option>
					  		</select>	  		
			  			</div>
				  		<div class="col-xs-4">
				  			<span class="input-group-btn">

				  				<button type="button" class="btn btn-default btn-block">
				  					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				  					Nuevo
				  				</button>
				  				<button type="button" class="btn btn-default btn-block">
									<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
				  					Modificar
				  				</button>
				  				<button type="button" class="btn btn-default btn-block">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				  					Eliminar
				  				</button>
				  			</span>
				  		</div>
					</div>
				</div>
				<div class="container-fluid">
					<div >
						<div class="col-xs-12 col-sm-5" style="padding-top:30px;">
							<div class="title">
								<h5>Accesos Asignados</h5>
							</div>
							<select multiple id="input" class="form-control" required="required">
								<option value="">Ventas </option>
								<option value="">Reportes</option>
								<option value="">Estadísticas</option>
							</select>
						</div>
						<div class="col-xs-6 col-sm-2" style="padding-top:70px">
							<span class="input-group-btn">
								<button type="button" class="btn btn-primary btn-block">
									<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
									Agregar
								</button>
								<button type="button" class="btn btn-primary btn-block">
									<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
									Quitar
								</button>
							</span>
						</div>
						<div class="col-xs-6 col-sm-5" style="padding-top:30px;">
							<div class="title">
								<h5>Accesos Disponibles</h5>
							</div>
							<select multiple id="input" class="form-control" required="required">
								<option value="">Ventas</option>
								<option value="">Compras</option>
								<option value="">Reportes</option>
								<option value="">Productos</option>
								<option value="">Clientes</option>
								<option value="">Créditos</option>
							</select>
						</div>
					</div>
				</div>
				<div class="container-fluid" style="padding-top:20px;">
					<div class="col-xs-6 col-sm-offset-6 col-sm-3">
						<button type="button" class="btn btn-danger btn-block">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							Cancelar
						</button>
					</div>
					<div class="col-xs-6 col-sm-3">
						<button type="button" class="btn btn-success btn-block">
							<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							Aceptar
						</button>
					</div>
				</div>
		  </div>

	</div>
</div>