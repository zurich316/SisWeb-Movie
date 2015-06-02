@extends('app')
@section('content')
<h2>Crear nueva pelicula</h2>
<div class="form-group">
{!! Form::open(['url'=>'movies']) !!}
{!! Form::label('name','Name:') !!}
{!! Form::text('name') !!}
</div>
<br>
<div class="form-group">
{!! Form::label('name','Description:') !!}
{!! Form::text('description') !!}
</div>
<br><br>
{!! Form::submit('Guardar') !!}
{!! Form::close() !!}
@if ($errors->any())
	@foreach($errors -> all() as $error)
		{{$error}}
	@endforeach
@endif
	
@stop