@if(!isset($theme) || empty($theme))
	{{ $theme = 'default' }}
@endif

@extends('template.' . $theme . '.content')

	@section('content')

		<div class="col-md-12">
			<h2>
				{{ $post->title }}<br />
				<small>{{ $category_name }}</small>
			</h2>
			
			<p>{{ $post->body }}</p>
		</div>

	@stop