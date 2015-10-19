<html>

@if(isset($phone))
   <head> New enquiry from {{$name}}</head>
	<body>
	<p>Name:{{$name}}</p>
	<p>Email:{{$email}}</p>
	<p>phone:{{$phone}}</p>
	<p>Message:{{$content}}</p>
</body>
@else
	<head>Your enquiry has been Received</head>
	<body>One of our team members will contact you shortly.</body>
@endif
</html>