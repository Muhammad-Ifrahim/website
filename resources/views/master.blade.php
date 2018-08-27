<!DOCTYPE html>
<html>
	<head>
		<title>Rent A Car</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	</head>
	<body>
		
			@include('partials.header')
			<div class="main-content">
				@yield('content')
			</div>
			@include('partials.footer')
		
	</body>
	<script src="{!! mix('js/app.js') !!}"></script>
</html>