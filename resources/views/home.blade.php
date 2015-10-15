@extends('appback')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12">
			@if(Session::has('error'))
				<div class="bg-danger">{{Session::get('error')}}</div>
			@endif

			@if(Session::has('success'))
				<div class="bg-success">{!!Session::get('success')!!}</div>
			@endif
	</div>
</div>
<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<div class="row">
					<div class="col-lg-12">
					<form url="blog" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						First name:<br>
						<input type="text" name="firstname" value="Mickey">
						<br>
						Last name:<br>
						<input type="text" name="lastname" value="Mouse">
						<br><br>
						<input type="submit" value="Submit">
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
