@extends('app')

@section('content')
<ul class="bxslider">
		<li><img src="/img/slider1.jpg" /></li>
		<li><img src="/img/slider2.jpg" /></li>
		<li><img src="/img/slider3.jpg" /></li>
		<li><img src="/img/slider4.jpg" /></li>
		<li><img src="/img/slider5.jpg" /></li>
		<li><img src="/img/slider6.jpg" /></li>
</ul>
	<div class="slogan">
	<p>We are providing natural health solutions to help your fertility and general health.</p>
	</div>
	<div id="summary1" class="col-md-8">
	<p> We love what we do and dedicate ourselves to delivery high level healthcare and the best possible outcomes for all clients. Providing different natural treatments such as <strong>Acupuncture, Chinese Herbal Medicine, Remedial Massage, Cupping</strong> and <strong>Moxibustion</strong>, we assist with a various kinds of health issues and disorders:</p>
		<div id="service" class="col-md-12">
		<img class="img-responsive" src="/img/services.png" />
		<div class="service1 col-md-3 col-sm-6 col-xm-6">
		<img src="/img/05.png" />
		<p>Acupuncture</p>
		</div>
		<div class="service2 col-md-3 col-sm-6 col-xm-6">
		<img src="/img/07.png" />
		<p>Chinese medicine</p>
		</div>
		<div class="service3 col-md-3 col-sm-6 col-xm-6">
		<img src="/img/08.png" />
		<p>Remedial Massage</p>
		</div>
		<div class="service4 col-md-3 col-sm-6 col-xm-6">
		<img src="/img/06.png" />
		<p>Cupping</p>
		</div>
		</div>
	</div>
	<div id="queryForm">
		@include('partial.queryForm')		
	</div>
	<div id="specialized" class="col-md-12">
	<img class="img-responsive col-md-12" src="/img/specialized.png" />
	<div class="specialized_text col-md-2">
	<img class="img-responsive" src="/img/Fertility1.png" />
	<h4>Fertility</h4>
	<p>Natural Fertility Support</br> IVF Support</br> Male fertility support</p>
	</div>
	<div class="specialized_text col-md-2">
	<img class="img-responsive" src="/img/11.png" />
	<h4>Pregnancy</h4>
	<p>Miscarriage Prevention,</br> Morning Sick, Pregnancy Care</br>Labor Induction, Breech Babies</p>
	</div>
	<div class="specialized_text col-md-2">
	<img class="img-responsive" src="/img/02.png" />
	<h4>Women’s Health</h4>
	<p>Menopause</br> Endometriosis, PCOS</br>PMS, Irregular Periods</p>
	</div>
	<div class="specialized_text col-md-2">
	<img class="img-responsive" src="/img/03-pain.png" />
	<h4>Pain Management</h4>
	<p>Neck, shoulder and Back Pain</br> Sciatica, Headache</br> Sports Injuries, Arthritis</p>
	</div>
	<div class="specialized_text col-md-2">
	<img class="img-responsive" src="/img/04.png" />
	<h4>Mental Disorders</h4>
	<p>Insomnia, Stress</br> Depression, Anxiety</br>  Panic Attack</p>
	</div>
	<div class="specialized_text col-md-2">
	<img class="img-responsive" src="/img/10.png" />
	<h4>Skin Issues</h4>
	<p>Acne, Eczema</br>Hives, Shingles, Alopecia</br> Psoriasis, Neurodermatitis</p>
	</div>
	</div>
	<div id="other_service" class="col-md-12">
		<h3>We also treat other general and difficult conditions, such as:</h3>
			<p>Digestive Disorder: Diarrhea, Constipation, IBS, Gastritis, Reflux</p>
			<p>Respiratory Disorders: Common Cold, Flu, Hayfever, Asthma, Rhinitis, Sinusitis, Chronic Cough</p>
			<p>Nerve System Diseases: Facioplegia, Apoplectic Sequela, Trigeminal Neuralgia </p>
			<p>Men’s Health: Low Libido, Impotence</p>
			<p>Other Conditions: Urinary Disorder, Weight Loss, Quit Smoking, Cancer Support</p>
	</div>
	<div id="contact" class="col-md-12">
	<img class="img-responsive col-md-12" src="/img/findUs.png" />
		<div class="bottom_openhours col-md-offset-3 col-md-9"><img src="/img/clock1.png">Opening Hours: Monday to Saturday 9:00am - 6:00pm</div>
		<div class="bottom_email col-md-3"><img src="/img/email.png">info@acu8.com.au</div>
		<div class="bottom_address col-md-5 col-md-offset-1"><img src="/img/address.png">Unit 2, 434 Cambridge Street, Floreat WA, 6014</div>
		<div class="bottom_phone col-md-3"><img src="/img/call.png">(08)-9387-3389</div>
	</div>
	
	@include('partial.map')
@endsection
