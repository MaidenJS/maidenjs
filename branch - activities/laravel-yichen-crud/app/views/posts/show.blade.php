@extends('layouts.master')


@section('content')

	<h1> Show Post </h1>

	<p> {{ link_to_route('posts.index', 'back to index') }} </p>

	<p> TItle: {{ $post->title }} </p>

	<p> Body {{ $post->body }} </p>

	<p> written by {{ $post->author }} </p>


@stop


