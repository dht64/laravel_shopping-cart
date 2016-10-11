<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('css/mdb.min.css')}}">
	<link rel="stylesheet" href="{{url('css/style.css')}}">

	@yield('styles')
</head>
<body>
	@include('partials.header')

	<div class="container content">
		<br>
		@yield('content')
	</div>
	
	<script type="text/javascript" src="{{url('js/jquery-2.2.3.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/tether.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/mdb.min.js')}}"></script>
	@yield('scripts')
</body>
</html>