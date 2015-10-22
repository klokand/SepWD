@extends('appback')
@section('content')
{{-- Showing the Error and Success Messages--}}
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
<div id="blog" class="passage col-md-10 col-md-offset-1">
			<h1>Update Blog </li>
			<form id="create_post" name="add_post" method="POST" action="{{URL::route('update_post')}}" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input type="hidden" name="id" value="{{$blog->id}}">
				<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title" placeholder="Post Title" value="{{$blog->title}}" required/>
				</div>
								
				<div class="form-group">
				<label for="image">Blog image</label>
				{!!Form::file('coverImage')!!}
				</div>
				
				<div class="form-group">
				<label for="summary">Summary</label>
				<textarea id="blogSummary" name="summary" class="form-control" placeholder="summary" required>{{$blog->summary}}</textarea>
				</div>
				
				<div class="form-group">
				<label for="content">Content</label>
				<textarea id="blogContent" name="content" class="form-control" placeholder="Content" required>{{$blog->content}}</textarea>
				<input type="hidden" name="blogContent" value="{{ old('blogContent') }}">
				</div>
				
				<button type="button" id="blog_saveButton" class="btn btn-default">Submit</button>
			</form>
</div>

@endsection