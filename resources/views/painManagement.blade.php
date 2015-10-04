@extends('app')
@section('content')
<div class="passage col-md-10 col-md-offset-1">
<img class="img-responsive line" src="/img/line.png">
<div class="col-md-8">
<h1>Pain Management</h1>
<img class="img-responsive" src="/img/pain-management-relief.jpg">
<p>Pain is an unpleasant experience associated with actual or potential tissue damage, or described in terms of such damage. It is the most common reasons that patients seek treatment. Pain itself is not a disease, but rather a symptom and an indication of a problem somewhere in the body.</p>
<p>In Traditional Chinese medicine (TCM), pain is explained as the stagnation of the flow of Qi (pronounced “Chee”, means vital energy) along invisible channels, known as meridians, along the body. Normally, there is abundant supply of Qi flowing along the meridians. However, pathogens may cause this flow to become stagnated, resulting in illness and pain. Acupuncture works through the insertion of needles along specific points acupoints) along these meridians, to re-establish the normal flow of Qi, and thus alleviate the pain associated with the stagnation.</p><p>Acupuncture is widely recognized by both eastern and western medicine doctors as an effective treatment for pain. In our clinic, We use acupuncture combined with cupping, massage and scrapping to increase circulation to the local pain area, reduce inflammation and swelling as well as relax the body’s muscles in order to assist in a wide range of pain syndromes:</p>
	<ul>
		<li>Neck, shoulder and Back Pain</li>
		<li>Headache and Migraine</li>
		<li>Frozen Shoulder/Sciatica/Knee Pain</li>
		<li>Sports Injuries/Tennis Elbow/Carpel tunnel syndrome</li>
		<li>Arthritis/Gout/Fibromyalgia/Tenosynovitis</li>
	</ul>
</div>
<div class="col-xs-12 col-sm-12 col-md-4">
		@include('partial.queryForm')		
</div>
</div>
@endsection