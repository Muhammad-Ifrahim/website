<!DOCTYPE html>
<html>
	<head>
		<title>Rent A Car</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="">
			@include('partials.header')
			<div class="main-content">
				@yield('content')
			</div>
			@include('partials.footer')
		</div>
	</body>
</html>