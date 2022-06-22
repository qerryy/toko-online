<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	<meta name="description">
	<meta name="author">
	<meta name="csrf-token" content=" {{ csrf_token() }} ">
	<title>@yield('title')</title>
	{{-- <link rel="stylesheet" href=" {{asset('css/app.css')}} "> --}}
	<link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}} ">
	<link rel="stylesheet" href=" {{asset('css/dashboard.css')}} ">
	@yield('css')
</head>