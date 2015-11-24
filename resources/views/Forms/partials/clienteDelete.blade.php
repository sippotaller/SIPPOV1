

{!! Form::open( ['route' => ['Cliente.CtaCliente.destroy', $persona->codPersona], 'method' => 'DELETE']) !!}
	<button types="submit" onclick="return confirm('¿Seguro que desea eliminar?')" class="btn btn-danger">Eliminar Cliente</button>

{!! Form::close() !!}