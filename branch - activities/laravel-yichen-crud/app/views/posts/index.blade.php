@extends('layouts.master')


@section('content')

	<h1> all posts </h1>

	<p> {{ link_to_route('posts.create', 'Add new psot') }} </p>

	@if($posts->count())
			<table border="1">
				<tr>
					<th> Author </th>
					<th> TItle </th>
					<th> Body </th>
				</tr>
				@foreach($posts as $post)
				<tr>
					<td> {{ $post->author }} </td>
					<td> {{ $post->title }} </td>
					<td> {{ $post->body }} </td>
					<td> {{ link_to_route('posts.show', 'Show', array($post->id)) }} </td>
					<td> {{ link_to_route('posts.edit', 'Edit', array($post->id))}} </td>
					<td> 
						{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $post->id))) }}
							{{ Form::submit('Delete') }}
						{{ Form::close() }}
					</td> 
				</tr>
				@endforeach 
			</table>
		@else
			<p> THere are no posts! </p>
		@endif

@stop
