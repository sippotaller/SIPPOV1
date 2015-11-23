@extends("index")

@section("Segmento")

	@foreach($Segmento as $s)
		{{$s->desc}}
	@endforeach
@stop