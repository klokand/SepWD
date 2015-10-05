@extends('app')
@section('content')
<div class="passage col-md-10 col-md-offset-1">
<div class="col-md-8">
<h1>Therapeutic Massage</h1>
<img class="img-responsive" src="/img/massage.jpg">
<p>Massage is a kind of popular therapy which acts directly upon the muscular, nervous and circulatory systems to rehabilitate physical injuries and improve health. Here at Acu8 Health, we offer Remedial Massage, Chinese Meridian Massage, Pregnancy Massage and Infantile Massage to help:</p>
<ul>
	<li>Neck, shoulder and Back Pain/Sciatica/Headache/Sports Injuries/Arthritis,</li>
	<li>Insomnia/Stress/Anxiety</li>
	<li>Pregnancy Care</li>
	<li>Children’s Health</li>
</ul>
</div>
<div class="col-xs-12 col-sm-12 col-md-4">
		@include('partial.queryForm')		
</div>
</div>
@endsection