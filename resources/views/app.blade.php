<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acu8 Health-Fertility and Healing Centre</title>
	<link href="/output/final.css" rel="stylesheet">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<meta name=”description” content=”Perth Fertility and Healing Acupuncture Centre”>
	<link rel=”author” href=”https://plus.google.com/116196470141315339591”/>
	@if(Route::currentRouteName() == 'blogDetail')
	<meta property="og:title" content='{{$title}}'>
	<meta property="og:type" content=”article”/>
	<meta property="og:url" content='{{$url}}'>
	<meta property="og:image" content='/uploads/{{$img}}'>
	<meta property="og:description" content='{{$summary}}'>
	@endif

	<!-- Fonts -->

</head>
<body>
	<div class="container">
	@include('partial.header')
	</div>
	<div id="content" class="row">
		<div class="container">
	@yield('content')
		</div>
	</div>
	<div class="container">
	@include('partial.footer')
	</div>
	<!-- Scripts -->
	<script src="/output/final.js"></script>
	@if(Route::currentRouteName() == 'blogDetail')
	<script type="text/javascript">
        $(function () {
            $('[data-social]').socialButtons({
                url: $('input[name=_url]').val()
            });
        });
    </script>
	@endif
</body>
</html>
