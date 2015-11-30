@extends("index")
@section("NuevoUsuario")    
 <section class="content-header">
    <h1>
        Nuevo Usuario
        <small>Crear Nuevo Usuario</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#usuarios">Usuarios</a></li>
        <li class="active"><a href="#nuevousuario">Nuevo Usuario</a></li>
    </ol>
</section>

<div class="col-xs-12">
    <div class="panel panel-primary">
          <div class="panel-heading">
                <h3 class="panel-title">Nuevo Usuario</h3>
          </div>
          <div class="panel-body">
            @include('Forms.partials.error')
            {!! Form::open(['route' => 'Usuario.store', 'method' => 'POST']) !!}
                <div class="row" >
                    <div class="container-fluid formulario">
                        <div class="col-md-6">
                            <!--form role="form"-->
                                <div class="form-group-lg" style="padding-bottom:100px;">
                                    <div class="col-md-4 pad">
                                        <img src="{{URL::asset('img/user.png')}}" class="img-circle" width="80px">
                                    </div>
                                    <div class="col-xs-12 col-md-8 pad" style="padding-top:30px;">                
                                        {!! Form::text('Nombre', null, ['class' => 'form-control','placeholder' => 'Nombre']) !!}
                                    </div>
                                </div>
                                
                                
                                <div class="form-group pad">
                                    <div class="col-md-4 pad">
                                        {!! Form::label('Pais','País', ['class' => 'control-label']) !!}
                                    </div>
                                    <div class="col-xs-12 col-md-8 pad">
                                        <!--select class="form-control" id="pais">
                                            <option value="Peru">Perú</option>
                                            <option value="Chile">Chile</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Bolivia">Bolivia</option>
                                        </select-->
                                         {!! Form::select('Pais', ['Peru' => 'Perú', 'Chile' => 'Chile', 'Ecuador' => 'Ecuador', 'Bolivia' => 'Bolivia'], null,  ['class' => 'form-control','placeholder' => 'Selecionar...']) !!}
                                    </div>
                                </div>  
                                <div class="form-group pad">
                                    <div class="col-md-4 pad">
                                        {!! Form::label('Provincia','Provincia', ['class' => 'control-label']) !!}
                                    </div>
                                    <div class="col-xs-12 col-md-8 pad">
                                        <!--select class="form-control" id="pais">
                                            <option value="Peru">Perú</option>
                                            <option value="Chile">Chile</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Bolivia">Bolivia</option>
                                        </select-->
                                         {!! Form::select('Provincia', ['Lima' => 'Lima', 'Huaral' => 'Huaral', 'Canta' => 'Canta'], null,  ['class' => 'form-control','placeholder' => 'Selecionar...']) !!}
                                    </div>
                                </div>  
                                <div class="form-group pad">
                                    <div class="col-md-4 pad">
                                        {!! Form::label('Distrito','Distrito', ['class' => 'control-label']) !!}
                                    </div>
                                    <div class="col-xs-12 col-md-8 pad">
                                        <!--select class="form-control" id="pais">
                                            <option value="Peru">Perú</option>
                                            <option value="Chile">Chile</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Bolivia">Bolivia</option>
                                        </select-->
                                         {!! Form::select('Distrito', ['Rimac' => 'Rímac', 'Comas' => 'Comas'], null,  ['class' => 'form-control','placeholder' => 'Selecionar...']) !!}
                                    </div>
                                </div> 
                                <div class="form-group pad">
                                    <div class="col-md-4 pad"> 
                                        {!! Form::label('Ciudad','Ciudad', ['class' => 'control-label']) !!}
                                    </div>
                                    <div class="col-xs-12 col-md-8 pad">          
                                        {!! Form::text('Ciudad', null, ['class' => 'form-control','placeholder' => 'Ciudad']) !!}
                                    </div>
                                </div>
                                <div class="form-group pad" >
                                    <div class="col-md-4 pad">
                                        {!! Form::label('Calle','Calle', ['class' => 'control-label']) !!}
                                     </div>
                                     <div class="col-xs-12 col-md-8 pad">
                                        {!! Form::text('Calle', null, ['class' => 'form-control','placeholder' => 'Calle']) !!}
                                    </div>
                                </div>
                                  
                                <div class="form-group pad">
                                    <div class="col-md-4 pad">
                                        {!! Form::label('CodPost','Código Postal', ['class' => 'control-label']) !!}
                                    </div>
                                    <div class="col-xs-12 col-md-8 pad">
                                        {!! Form::text('CodPost', null, ['class' => 'form-control','placeholder' => 'Código Postal']) !!}
                                    </div>
                                </div>                        
                            <!--/form-->
                        </div>
                        <div class="col-md-6">
                            <form role="form">
                                <div class="form-group ">
                                    <div class="col-sm-4 pad">
                                        {!! Form::label('Telefono','Teléfono', ['class' => 'control-label']) !!}
                                    </div>
                                    <div class="col-xs-12 col-sm-8 pad">
                                        {!! Form::text('Telefono', null, ['class' => 'form-control','placeholder' => 'Teléfono']) !!}
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-sm-4 pad">
                                        {!! Form::label('email','Correo Electrónico', ['class' => 'control-label']) !!}
                                    </div>
                                    <div class="col-xs-12 col-sm-8 pad">
                                        {!! Form::text('email', null, ['class' => 'form-control','placeholder' => 'ej. Juan@example.com']) !!}
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-sm-4 pad">
                                        {!! Form::label('codUsuario','Usuario', ['class' => 'control-label']) !!}
                                    </div>
                                    <div class="col-xs-12 col-sm-8 pad">
                                        {!! Form::text('codUsuario', null, ['class' => 'form-control','placeholder' => 'Usuario']) !!}
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-sm-4 pad">
                                        {!! Form::label('Pass','Contraseña', ['class' => 'control-label']) !!}
                                    </div>
                                    <div class="col-xs-12 col-sm-8 pad">
                                        {!! Form::password('Pass', ['class' => 'form-control','placeholder' => 'Contraseña']) !!}
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-6 col-sm-1" style="opacity:60%">
                        <img class="img-responsive" src="{{URL::asset('img/reload.png')}}" width="40px" >
                        </div>
                        <div class="col-xs-6 col-sm-1" style="opacity:60%">
                        <button id="sub" type="submit">
                        <img class="img-responsive" src="{{URL::asset('img/save.png')}}  " width="60px" ></button>
                    </div>                 
                    </div>      
                </div>
                {!! Form::close() !!}  
          </div>
    </div>
</div>

@stop