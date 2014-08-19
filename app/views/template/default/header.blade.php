<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Roccatech Blog</title>

		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/bootstrap-theme.min.css') }}

		{{ HTML::style('css/normalize.css') }}
		{{ HTML::style('css/style.css') }}

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<header>
						{{ HTML::image('assets/logo.jpg', 'Site Logo', [ 'class' => 'pull-left']) }}
						<h3 class="pull-left">Sample Laravel Blog Site</h3>

						<a href="#" class="btn btn-success btn-sm add-post pull-right mt-25">Add Post</a>
					</header>

				</div>
			</div>
		</div>