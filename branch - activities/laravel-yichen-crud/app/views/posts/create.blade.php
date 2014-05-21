@extends('layouts.master')


@section('content')

	<h1> Create a post </h1>

	{{ Form::open(array('route' => 'posts.store')) }}
		<ul>
			<li>
				{{ Form::label('author', 'Author:') }}
				{{ Form::text('author') }}
			</li> 
			<li>
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title') }}
			</li>
			<li>
				{{ Form::label('body', 'Body:') }}
				{{ Form::textarea('body', null, array('30x5')) }}
			</li>
			<li>
				{{ Form::submit('create user') }}
			</li>
		</ul>
	{{ Form::close() }}

	@if($errors->any())
		<ul>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</ul>
	@endif
@stop


