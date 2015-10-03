@extends('app')

@section('content')
<ul class="bxslider">
		<li><img src="/img/slider1.jpg" /></li>
		<li><img src="/img/slider2.jpg" /></li>
		<li><img src="/img/slider3.jpg" /></li>
		<li><img src="/img/slider4.jpg" /></li>
		<li><img src="/img/slider5.jpg" /></li>
	</ul>
	<div class="slogan">
	<p>We are providing natural health solutions to help your fertility and general health.</p>
	</div>
	<div class="summary">
	<div id="summary1" class="col-md-8">
	<p> We love what we do and dedicate ourselves to delivery high level healthcare and the best possible outcomes for all clients. Providing different natural treatments such as Acupuncture, Chinese Herbal Medicine, Remedial Massage, Cupping and Moxibustion, we assist with a various kinds of health issues and disorders.</p>
	<div id="service" class="col-md-12">
		<img class="img-responsive" src="/img/services.png" />
		<img class="col-md-3 col-sm-6 col-xm-6" src="/img/05.png" />
		<img class="col-md-3 col-sm-6 col-xm-6" src="/img/06.png" />
		<img class="col-md-3 col-sm-6 col-xm-6" src="/img/05.png" />
		<img class="col-md-3 col-sm-6 col-xm-6" src="/img/06.png" />
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
	<img class="img-responsive col-md-12" src="/img/specialized1.png" />
	<div class="specialized_text col-md-2 col-md-offset-1">
	<img class="img-responsive" src="/img/Fertility1.png" />
	<p>Natural Fertility Support IVF Support</p>
	</div>
	<div class="specialized_text col-md-2">
	<img class="img-responsive" src="/img/02.png" />
	<p>Miscarriage Prevention, Morning Sick Pregnancy Care,Labor Induction</p>
	</div>
	<div class="specialized_text col-md-2">
	<img class="img-responsive" src="/img/02.png" />
	<p>Menopause, Endometriosis PCOS，PMS, Irregular Periods</p>
	</div>
	<div class="specialized_text col-md-2">
	<img class="img-responsive" src="/img/03-pain.png" />
	<p>Neck, shoulder and Back Pain, Sciatica Headache, Sports Injuries, Arthritis</p>
	</div>
	<div class="specialized_text col-md-2">
	<img class="img-responsive" src="/img/04.png" />
	<p>Insomnia, Stress, Depression Anxiety,  Panic Attack</p>
	</div>
	
	</div>
	<div id="other_service" class="col-md-12">
		<h3>We also treat other general and difficult conditions, such as:</h3>
			<p>Skin Issues: Acne, Eczema, Urticaria(Hives), Shingles, Alopecia, Neurodermatitis,</p>
			<p>Digestive Disorder: Diarrhea, Constipation, IBS, Gastritis, Reflux</p>
			<p>Respiratory Disorders: Common Cold, Flu, Hayfever, Asthma, Rhinitis, Sinusitis, Chronic Cough</p>
			<p>Nerve System Diseases: Facioplegia, Apoplectic Sequela, Trigeminal Neuralgia </p>
			<p>Men’s Health: Low Libido, Impotence</p>
			<p>Other Conditions: Urinary Disorder, Weight Loss, Quit Smoking, Cancer Support</p>
	</div>
	<div id="contact" class="col-md-12">
	<img class="img-responsive col-md-12" src="/img/findUs.png" />
		<div class="bottom_openhours col-md-offset-3 col-md-9"><img src="/img/clock1.png">Opening Hours Monday to Saturday : 9:00am to 6:00pm</div>
		<div class="bottom_email col-md-3"><img src="/img/email.png">info@acu8health.com.au</div>
		<div class="bottom_address col-md-5 col-md-offset-1"><img src="/img/address.png">Unit 2, 434 Cambridge Street, Floreat WA, 6014</div>
		<div class="bottom_phone col-md-3"><img src="/img/call.png">(08)-9387-3389</div>
	</div>
	
	@include('partial.map')
@endsection
