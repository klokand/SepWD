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
	<div id = "topbar" class="row">
		<div class="logo col-md-6 col-md-offset-1">
			<img src="/img/acu8-health-logo.png" alt="ACU8HEALTH">
		</div>
		<div class="contact col-md-5">
		<p><img class="phone" src="/img/call.png" alt="call"><span style="font-size: 30px;"> (08)-9387-3389</span></p>
		<img class="address" src="/img/address.png" alt="address">&nbsp; Unit 2, 434 Cambridge Street, Floreat WA, 6014
		</div>
	</div>
	<nav id="custom-bootstrap-menu" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header row">
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
	<ul class="bxslider">
		<li><img src="/img/advice.png" /></li>
		<li><img src="/img/conception.png" /></li>
		<li><img src="/img/herbs2.png" /></li>
		<li><img src="/img/pulse.png" /></li><li>
		<img src="/img/welcome.png" /></li>
		<li><img src="/img/herbs2.png" /></li>
		<li><img src="/img/womenshealth.png" /></li>
	</ul>
	<div class="jumbotron">
	<p>We are providing natural health solutions to help your fertility and general health.</p>
	</div>
	<div class="summary row">
	<div id="summary1" class="col-md-8">
	<p> We love what we do and dedicate ourselves to delivery high level healthcare and the best possible outcomes for all clients. Providing different natural treatments such as Acupuncture, Chinese Herbal Medicine, Remedial Massage, Cupping and Moxibustion, we assist with a various kinds of health issues and disorders:</p>
	<div id="service" class="col-md-12">
		<h3 class="col-md-12">Service</h3>
		<img src="/img/05.png" />
		<img src="/img/06.png" />
		<img src="/img/05.png" />
		<img src="/img/06.png" />
		</div>
	</div>
	<div id="queryForm" class="col-xs-12 col-sm-12 col-md-4">
				<h2>Contact Us Form</h2>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" id="contactName" placeholder="FullName">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="contactEmail" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="contactEmail" placeholder="Contact number">
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Message" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
				</form>
	</div>
	<div id="specialized" class="col-md-12">
	<img class="img-responsive" src="/img/specialized.png" />
	</div>
	<div class="col-md-2 col-md-offset-1">
	<img class="img-responsive" src="/img/Fertility1.png" />
	<p>Natural Fertility Support IVF Support</p>
	</div>
	<div class="col-md-2">
	<img class="img-responsive" src="/img/02.png" />
	<p>Miscarriage Prevention, Morning Sick Pregnancy Care,Labor Induction</p>
	</div>
	<div class="col-md-2">
	<img class="img-responsive" src="/img/02.png" />
	<p>Menopause, Endometriosis PCOS，PMS, Irregular Periods</p>
	</div>
	<div class="col-md-2">
	<img class="img-responsive" src="/img/03-pain.png" />
	<p>Neck, shoulder and Back Pain, Sciatica Headache, Sports Injuries, Arthritis</p>
	</div>
	<div class="col-md-2">
	<img class="img-responsive" src="/img/04.png" />
	<p>Insomnia, Stress, Depression Anxiety,  Panic Attack</p>
	</div>
	<div id="other_service" class="col-md-12">
		<h3>We also treat other general and difficult conditions, such as:</h3>
		<ul>
			<li>Skin Issues: Acne, Eczema, Urticaria(Hives), Shingles, Alopecia, Neurodermatitis,</li>
			<li>Digestive Disorder: Diarrhea, Constipation, IBS, Gastritis, Reflux</li>
			<li>Respiratory Disorders: Common Cold, Flu, Hayfever, Asthma, Rhinitis, Sinusitis, Chronic Cough</li>
			<li>Nerve System Diseases: Facioplegia, Apoplectic Sequela, Trigeminal Neuralgia </li>
			<li>Men’s Health: Low Libido, Impotence</li>
			<li>Other Conditions: Urinary Disorder, Weight Loss, Quit Smoking, Cancer Support</li>
		</ul>
	</div>
	<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?center=&amp;q=434 Cambridge Street, Floreat WA, 6014, -37.8097822, 144.9784406&amp;zoom=14&amp;size=300x300&amp;output=embed&amp;iwloc=near"></iframe>
	

	@yield('content')

	<!-- Scripts -->
	<script src="/output/final.js"></script>
	</div>
</body>
</html>
