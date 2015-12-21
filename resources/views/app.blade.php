<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset('css/beads.css')?>">

</head>
<body>
<!--create the user favorites-->
<div style="height:150px; display:inline-block">
	@if(Auth::user())
		{{Auth::user()->name}}

	<div class="container">
	<div class="favorites-bar">
		<div class="row">
		@foreach( $userFavorites as $favorite)
			<div class="single-favorite-bead-block">
				<H6>{{ $favorite->beads->name_description }}</H6>
				<a href = {{'/beads/'.$favorite->beads->id}}>
				<img class="single-favorite-bead-image"  src={{asset($favorite->beads->image())}}>
				</a>
			</div>
		@endforeach
		</div>
	</div>
	</div>
	@endif
</div>
<div class="container-fluid beads-list">
	<div class="row">
		@yield('content')
	</div>
</div>
</body>
</html>