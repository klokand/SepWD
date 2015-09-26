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
	<div id = "topbar" class="row">
		<div class="logo col-md-6">
			<img src="/img/acu8-health-logo.png" alt="ACU8HEALTH">
		</div>
		<div class="contact col-md-6">
		<p><img class="" src="/img/call.png" alt="call"><span style="font-size: 30px;"> (08)-9387-3389</span></p>
		<img class="aligncenter  wp-image-7972" src="/img/address.png" alt="address">&nbsp; Unit 2, 434 Cambridge Street, Floreat WA, 6014
		</div>
	</div>
	<nav id="custom-bootstrap-menu" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
					<li><a href="/">Practitioners</a></li>
					<li><a href="/">Treatment</a></li>
					<li><a href="/">Fertility</a></li>
					<li><a href="/">General Health</a></li>
					<li><a href="/">Blog</a></li>
					<li><a href="/">Fees</a></li>
					<li><a href="/">Contact</a></li>
				</ul>


			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="/output/final.js"></script>
</body>
</html>
