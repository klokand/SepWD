@extends('app')
@section('content')
<div id ="blog-detail" class="row">
	<div class="col-md-8 col-md-offset-1">
		<div class="blog-main-image">
			<img class="img-responsive" src="/uploads/{{$blog->coverImage}}">
		</div>
		<div class="blog-content">
		<input type="hidden" name="_url" value="{{Request::root()}}/{{ Request::path() }}">
			<h1>{{$blog->title}}</h1>
			<div class="author col-md-6">Post by <h4>{{$blog->author}}</h4></div>
			<div class="post-date col-md-3 col-md-offset-3">Sep/30/2015</div>
			<div class="blog-passage col-md-12">
			<p class="blog-summary">{{$blog->summary}}</p><p>

{!!$blog->content!!}
			</div>
		<div class="social col-md-12">
			<div class="social__item">
				<span class="fa fa-facebook" data-count="..." data-social="fb"></span>
			</div>
			<div class="social__item">
				<span class="fa fa-twitter" data-count="..." data-social="tw"></span>
			</div>
			<div class="social__item">
				<span class="fa fa-linkedin" data-count="..." data-social="ln"></span>
			</div>
			<div class="social__item">
				<span class="fa fa-pinterest" data-count="..." data-social="pt"></span>
			</div>
		</div>
	</div>
</div>
</div>
@endsection