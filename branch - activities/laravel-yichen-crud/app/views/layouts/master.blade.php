<!DOCTYPE html>
<html>

	<head>
		<title> title </title>
	</head>

	<body>

		<div class="container">
			@if(Session::has('message'))
				<p> {{ Session::get('message') }}</p>
			@endif


			@yield('content')
		</div>

	</body>

</html>