<!DOCTYPE html>
<html>
<head>
	<title>{{ $post->title }}</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>{{ $post->title }}</h1>
		<h5>{{ $post->published_at->format('M jS g:ia') }}</h5>
		<hr>
		{!! nl2br(e($post->content)) !!}
		<hr>
		<button class='btn btn-primary' onclick="history.go(-1)">
			&laquo; Back
		</button>
	</div>
</body>
</html>