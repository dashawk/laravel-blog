@extends('template.default.content')

	@section('content')
		This is home

		@if($data['posts']->count() > 0)
		<ul>
			@foreach($data['posts'] as $post)
				<li>{{ link_to('#', $post->title) }}</li>
			@endforeach
		</ul>
		@else
			<p>There are no posts available.</p>
		@endif
	@stop