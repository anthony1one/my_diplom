<!DOCTYPE html>
<html>
	<head>
		@include('partials._head')
		<title>@yield('title')</title>
	</head>
	<body>
		<div class="container-fluid">
			@include('partials._navbar')
			<div style="margin-top: 0">
				@yield('carousel')
			</div>
			@yield('content')
			
		</div>
		@include('partials._footer')
		@include('partials._javascript')
	</body>
</html>
