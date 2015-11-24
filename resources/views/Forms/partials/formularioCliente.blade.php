<div class="row" >
		        <div class="container-fluid formulario">
		            <div class="col-sm-6">
			                    <div class="form-group-lg" style="padding-bottom:90px;">
			                        <div class="col-sm-4" >
			                            <img src="{{URL::asset('img/client.png')}}" class="img-circle" width="80px">    
			                        </div>
			                        <div class="col-xs-12 col-sm-8" style="padding-top:25px;">                
			                            {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Nombre']) !!}
			                        </div>
			                    </div>
			                    <div class="form-group ">
			                        <div class="col-sm-4 pad">
			                            {!! Form::label('apPat','Apellido Paterno', ['class' => 'control-label']) !!}
			                        </div>
			                        <div class="col-xs-12 col-sm-8 pad">
			                            {!! Form::text('apPat', null, ['class' => 'form-control','placeholder' => 'Apellido Paterno']) !!}
			                        </div>
		                    	</div>
		                    	<div class="form-group ">
			                        <div class="col-sm-4 pad">
			                            {!! Form::label('apMat','Apellido Materno', ['class' => 'control-label']) !!}
			                        </div>
			                        <div class="col-xs-12 col-sm-8 pad">
			                            {!! Form::text('apMat', null, ['class' => 'form-control','placeholder' => 'Apellido Materno']) !!}
			                        </div>
		                    	</div> 
			                    <div class="form-group ">
			                        <div class="col-sm-4 pad">
			                            {!! Form::label('pais','País', ['class' => 'control-label']) !!}
			                        </div>
			                        <div class="col-xs-12 col-sm-8 pad">
			                            {!! Form::select('pais', ['Peru' => 'Perú', 'Chile' => 'Chile', 'Ecuador' => 'Ecuador', 'Bolivia' => 'Bolivia'], null,  ['class' => 'form-control','placeholder' => 'Selecionar...']) !!}
			                        </div>
			                    </div>  
			                    <div class="form-group ">
			                        <div class="col-sm-4 pad">
			                            {!! Form::label('region','Región', ['class' => 'control-label']) !!}
			                        </div>
			                        <div class="col-xs-12 col-sm-8 pad">
			                            {!! Form::select('region', ['Lima' => 'Lima', 'Huaral' => 'Huaral', 'Canta' => 'Canta'], null,  ['class' => 'form-control','placeholder' => 'Selecionar...']) !!}
			                        </div>
			                    </div>  
			                    <div class="form-group ">
			                        <div class="col-sm-4 pad">
			                            {!! Form::label('provincia','Provincia', ['class' => 'control-label']) !!}
			                        </div>
			                        <div class="col-xs-12 col-sm-8 pad">
			                            {!! Form::select('provincia', ['Lima' => 'Lima', 'Canta' => 'Canta'], null,  ['class' => 'form-control','placeholder' => 'Selecionar...']) !!}
			                   		 </div>  
			                    </div>
			                    <div class="form-group ">
			                        <div class="col-sm-4 pad">
			                            {!! Form::label('distrito','Distrito', ['class' => 'control-label']) !!}
			                        </div>
			                        <div class="col-xs-12 col-sm-8 pad">
			                            {!! Form::select('distrito', ['Rimac' => 'Rímac', 'Comas' => 'Comas'], null,  ['class' => 'form-control','placeholder' => 'Selecionar...']) !!}
			                   		 </div>  
			                    </div>                       
		            </div>
		            <div class="col-sm-6">
		                <form role="form">
		                	<div class="form-group ">
		                        <div class="col-sm-4 pad">
		                            {!! Form::label('direccion','Dirección', ['class' => 'control-label']) !!}
		                        </div>
		                        <div class="col-xs-12 col-sm-8 pad">
		                            {!! Form::text('direccion', null, ['class' => 'form-control','placeholder' => 'Dirección']) !!}
		                        </div>
		                    </div>
		                    <div class="form-group ">
		                        <div class="col-sm-4 pad">
		                            {!! Form::label('dni','DNI', ['class' => 'control-label']) !!}
		                        </div>
		                        <div class="col-xs-12 col-sm-8 pad">
		                            {!! Form::text('dni', null, ['class' => 'form-control','placeholder' => 'DNI']) !!}
		                        </div>
		                    </div>
		                    <div class="form-group ">
		                        <div class="col-sm-4 pad">
		                            {!! Form::label('telefono','Teléfono', ['class' => 'control-label']) !!}
		                        </div>
		                        <div class="col-xs-12 col-sm-8 pad">
		                            {!! Form::text('telefono', null, ['class' => 'form-control','placeholder' => 'Teléfono']) !!}
		                        </div>
		                    </div>
		                    <div class="form-group ">
		                        <div class="col-sm-4 pad">
		                            {!! Form::label('celular','Celular', ['class' => 'control-label']) !!}
		                        </div>
		                        <div class="col-xs-12 col-sm-8 pad">
		                            {!! Form::text('celular', null, ['class' => 'form-control','placeholder' => 'Celular']) !!}
		                        </div>
		                    </div>
		                    <div class="form-group ">
		                         <div class="col-sm-4 pad">
		                            {!! Form::label('correo','Correo Electrónico', ['class' => 'control-label']) !!}
		                         </div>
		                         <div class="col-xs-12 col-sm-8 pad">
		                            {!! Form::text('correo', null, ['class' => 'form-control','placeholder' => 'ej. Juan@example.com']) !!}
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