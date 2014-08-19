@if(!isset($theme) || empty($theme))
	{{ $theme = 'default' }}
@endif

@include('template.' . $theme . '.header')
	<div class="container">
		<div class="row">

			<div id="main-content">
				@yield('content')
			</div>

		</div>
	</div>
@include('template.' . $theme . '.footer')
