
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>DTX</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

		<!-- Styles -->
		<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	</head>
	<body>
		@section('navigationBar')
			@include('components.navbar')
		@show
        <div class="container">
            <div class="row">
            </div>
            @yield('content')
		</div>
		@section('footer')
			@include('components.footer')
		@show
		<script src="{{ mix('/js/app.js') }}"></script>
	</body>
</html>