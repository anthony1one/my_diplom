<!DOCTYPE html>
<html>
	<head>
		@include('partials._head')
		<title>@yield('title')</title>
	</head>
	<body>
		<div class="container-fluid">
			@if(Auth::check())
				@include('partials._adminnavbar')
			@endif
			@yield('content')
		</div>
		@include('partials._javascript')
	</body>
</html>