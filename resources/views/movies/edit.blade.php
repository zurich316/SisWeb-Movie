@extends('app')
@section('content')
<h2>Editar pelicula</h2>
{!! Form::model($movies, ['method'=>'PATCH', 'action' => ['MoviesController@update', $movies->id]]) !!}
{!! Form::label('name','Name:') !!}
{!! Form::text('name') !!}
<br>
{!! Form::label('name','Description:') !!}
{!! Form::text('description') !!}
<br><br>
{!! Form::submit('Guardar') !!}
{!! Form::close() !!}
@if ($errors->any())
	@foreach($errors -> all() as $error)
		{{$error}}
	@endforeach
@endif
@stop