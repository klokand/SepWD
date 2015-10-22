@extends('app')
@section('content')
<ul id="box" class="col-md-8 col-md-offset-1">
	@if(count($blogs))
		@foreach($blogs as $blog)
			<li>
				<div class="lazy dh-container img-repsonsive" dataimg="/uploads/{{$blog->coverImage}}">
				<div class="dh-overlay"><h1>{{$blog->title}}</h1><p>{{$blog->summary}}</p><a href="{{url('/')}}/blog/{{$blog->id}}" class="btn btn-primary">Read More</a></div>
				</div>
			</li>
		@endforeach
		<?php echo $blogs->render(); ?>
	@else
	<p>No article at the moment</p>
	@endif
  </ul>
</nav>
@endsection