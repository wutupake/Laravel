<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel Test</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	<header>
		<h1>Titolo generale</h1>
		@section ('subtitle')
			<h2>sottotitolo specifico della pagina</h2>
		@yield_section
	</header>
	<div class="wrap">
		@yield('content')
	</div>
</body>
</html>
