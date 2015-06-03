@extends('app')
@section('content')
<div class="container-fluid">
<h1>Peliculas</h1>
<div class="container-fluid">
	@foreach ($movies as $movie)
		@if ($errors->any())
			@foreach($errors -> all() as $error)
				{{$error}}
			@endforeach
		@endif
		<br>
		Usuario: {{($movie->user == null) ? 'Usuario no registrado' : $movie->user->email}}
		<h2><a href="/movies/{{$movie->id}}">{{$movie->name}}</a></h2>
		<p>{{$movie->description}}</p>	
		<p>Categorya: {{$movie->category}}</p>	
		<a href="/movies/{{$movie->id}}/edit">Editar</a>
		{!! Form::open(array('route' => array('movies.destroy', $movie->id), 'method' => 'delete')) !!}
		<button type="submit" class="btn btn-danger btn-mini">Borrar</button>
		{!! Form::close() !!}
		<br><br>
		<h3>Reseñas:</h3>
		@foreach ($movie->review as $review)
			{{$review->content}}
			<br>
			<p>Likes:</p>
			@foreach ($review->like as $like)
				{{$like->like}}
			@endforeach
			<br>
		@endforeach
		{!! Form::open(['url'=>'review']) !!}
		<br>
		{!! Form::label('name','Nueva reseña:') !!}
		{!! Form::text('content') !!}
		{!! Form::hidden('movie_id', $movie->id) !!}
		<br><br>
		{!! Form::submit('Guardar') !!}
		{!! Form::close() !!}

		@endforeach

	<br><br>
	<a href="/movies/create">Nuevo</a>
	
@stop
</div>
</div>