@if(!isset($theme) || empty($theme))
	{{ $theme = 'default' }}
@endif

@extends('template.' . $theme . '.content')

	@section('content')

		{{-- Sidebar --}}
		<div class="col-md-3">
			@if($category->count() > 0)
				
				<ul id="navigation" class="nav nav-stacked">
					@foreach($category as $cat)
						<li>{{ link_to('', ucfirst($cat->category_name)) }}</li>
					@endforeach
				</ul>

			@endif
		</div>

		{{-- Main Body --}}
		<div class="col-md-9">
			@if($posts->count() > 0)

				<article>

					@foreach($posts as $post)
						<div class="posts post_{{ $post->post_id }}">
							<div class="post-date">
								
							</div>
							<h4>{{ link_to('post/' . blogUrl($post->title), $post->title) }}</h4>
							<p>
								{{ substr($post->body, 0, 100) . '...' }}
								{{ link_to('', 'Read More') }}
							</p>
						</div>
					@endforeach
					
					{{ $posts->links() }}
				</article>

			@else
				<p>There are no posts available.</p>
			@endif
		</div>

	@stop

	@section('modals')
		<div id="add-post" class="modal fade in">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title">Add New Post</h4>
					</div>

					{{ Form::open([
						'route' => 'post.store',
						'role' => 'form',
						'id' => 'post-form'
					]) }}
						<div class="modal-body">
								<div class="form-group">
									{{ Form::label('title', 'Post Title', [ 'class' => 'control-label' ]) }}
									{{ Form::text('title', '', [ 'class' => 'form-control' ]) }}
								</div>

								<div class="form-group">
									{{ Form::label('body', '', [ 'class' => 'control-label' ]) }}
									{{ Form::textarea('body', '', [ 'class' => 'form-control' ]) }}
								</div>

								<div class="form-group">
									{{ Form::label('category', 'Category', [ 'class' => 'control-label' ]) }}
									{{ Form::select('category_id', dlist($category, 'category', 'category_name'), null, [ 'class' => 'form-control' ]) }}
								</div>

						</div>

						<div class="modal-footer">
							{{ Form::button('Close', [ 'class' => 'btn btn-default' ]) }}
							{{ Form::submit('Save Post', [ 'class' => 'btn btn-primary' ]) }}
						</div>
					{{ Form::close() }}

				</div>
			</div>
		</div>
	@stop

	@section('scripts')
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#navigation li:first').addClass('active');

			$('#navigation li a').on('click', function(e) {
				e.preventDefault();

			});

			$('a.add-post').on('click', function(e) {
				e.preventDefault();

				$('#add-post').modal('show');
			});
		});
		</script>
	@stop