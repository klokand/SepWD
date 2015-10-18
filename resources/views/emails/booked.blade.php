<html>

@if(isset($phone))
   <head> New enquery from {{$name}}</head>
	<body>
	<p>Name:{{$name}}</p>
	<p>Email:{{$email}}</p>
	<p>phone:{{$phone}}</p>
	<p>Message:{{$content}}</p>
</body>
@else
	<head>Your enquery has been sent out</head>
	<body>One of our team members will contact you shortly.</body>
@endif
</html>