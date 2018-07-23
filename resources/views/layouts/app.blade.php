<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="{{asset('logo.png')}}" />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
		  integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="{{asset('css/editor.css')}}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	@yield('content')
</div>

<!-- Scripts -->
<script src="/js/core.js"></script>
<script>
	$(function() {
		$('textarea').froalaEditor()
	});
</script>
{{dd(session('notifications'))}}
@if(!empty(session('notifications')))
	@include('layouts.notifications')
	@yield('notifications')
@endif
</body>
</html>
