


					@if ($errors->any())
						<div class="alert alert-danger" role="alert">
							<p>Datos faltantes: </p>
							<ul>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
							</ul>
						</div>
					@endif
