		@yield('modals')

		@yield('footer')

		{{ HTML::script('js/libs/jquery/jquery.js') }}
		{{ HTML::script('js/libs/bootstrap/bootstrap.min.js') }}

		@yield('scripts')
	</body>
</html>