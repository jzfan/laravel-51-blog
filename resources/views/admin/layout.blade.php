<!DOCTYPE html>
<html>
<head>
	<title>{{ config('blog.title') }} Admin</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/admin.css">
	@yield('style')
</head>
<body>
	<nav class='navbar navbar-default'>
		<div class="container-fluid">
			<div class="navbar-header">
				<button type='button' class='navbar-toggle collapsed'
					data-toggle='collapse' data='#navbar-menu'>
					<span class='sr-only'>Toggle Navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					
				</button>
				<a href="#" class='navbar-brand'>{{ config('blog.title') }}Admin</a>
			</div>
			<div class='collapse navbar-collapse' id='navbar-menu'>
				@include('admin.partials.navbar')
			</div>
		</div>
	</nav>
	@yield('content')

	<script type="text/javascript" src='/assets/js/admin.js'></script>
	@yield('script')
</body>
</html>