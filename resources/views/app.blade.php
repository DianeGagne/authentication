<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<!--create the user favorites-->
<div style="height:150px;">
	@if(Auth::user())
		{{Auth::user()->name}}
	@endif
</div>
		@yield('content')
</body>
</html>