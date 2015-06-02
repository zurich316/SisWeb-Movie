@extends('app')
@section('content')
		<h2>{{$movies->name}}</h2>
		<p>{{$movies->description}}</p>
		<br>
		<h3>Reseñas:  {{count($movies->review)}}</h3>

		@foreach ($movies->review as $review)
			{{$review->content}}
			<br>
		@endforeach

		{!! Form::open(['url'=>'ratings']) !!}
		<br>
		{!! Form::label('name','Rating(0-10):') !!}
		{!! Form::text('value') !!}
		{!! Form::hidden('movie_id', $movies->id) !!}
		{!! Form::hidden('user_id', $movies->user->id) !!}
		<br><br>
		{!! Form::submit('Guardar') !!}
		{!! Form::close() !!}
		<h3>Cantidad de Ratings: {{count($movies->rating)}}</h3>
						
		<h3>Rating: {{(count($movies->rating)==0) ? '0' : $movies->rating->sum('value')/count($movies->rating)}}</h3>
		{{--
		@foreach ($movies->rating as $rating)
			{{$rating->value}}
			<br>
		@endforeach
		--}}
		<br>
		<a href="/movies">Regresar</a>
		<br>
		@if ($errors->any())
			@foreach($errors -> all() as $error)
			<h1>{{$error}}</h1>
			@endforeach
		@endif

@stop