<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ACU8HEALTH</title>
	<link href="/output/final.css" rel="stylesheet">

	<!-- Fonts -->

</head>
<body>
	<div class="container">
	@include('partial.header')
	<div id="content">
	@yield('content')
	</div>
	@include('partial.footer')
	<!-- Scripts -->
	<script src="/output/final.js"></script>
	</div>
</body>
</html>
