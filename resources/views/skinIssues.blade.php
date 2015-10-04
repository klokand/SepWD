@extends('app')
@section('content')
<div class="passage col-md-10 col-md-offset-1">
<img class="img-responsive line" src="/img/line.png">
<div class="col-md-8">
<h1>Skin Disorders</h1>
<img class="img-responsive" src="/img/skin.jpg">

<p>Skin issues are an unpleasant inconvenience at best. They can be itchy, ugly and
painful and will often be the cause of irritability, low self-esteem and insomnia.</p>
<p>Skin diseases are generally caused by internal disharmonies or environmental 
pathogenic factors, such as wind, cold, heat, dampness, and dryness. Stress, diet, 
and the individual’s constitution also contribute to these patterns.</p>
<p>At Acu8 Health, We use Acupuncture, Chinese Herbal Medicine and Cupping to
calm, clear and return the skin to a normal state of health. What’s more, our kind and 
experienced practitioners not only treat the symptoms, but also the root (cause) of a 
condition in order to prevent recurrence of these disorders. The skin disorders 
commonly helped in our clinic are:</p>
<ul>
	<li>Acne</li>
	<li>Eczema</li>
	<li>Urticaria(Hives)</li>
	<li>Herpes Zoster(Shingles)</li>
	<li>Alopecia</li>
	<li>Psoriasis</li>
	<li>Neurodermatitis</li>
</ul>
</div>
<div class="col-xs-12 col-sm-12 col-md-4">
		@include('partial.queryForm')		
</div>
</div>
@endsection