@extends('appback')
@section('content')
<div id="blog" class="passage col-md-10 col-md-offset-1">
			<h1>New Blog </li>
			<form name="add_post" method="POST" action="{{URL::route('add_new_post')}}">
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title" placeholder="Post Title" value=""/>
				</div>
								
				<div class="form-group">
				<label for="image">Blog image</label>
				<input type="file" class="form-control" id="image">
				</div>
				
				<div class="form-group">
				<label for="summary">Summary</label>
				<textarea name="summary" class="form-control" placeholder="summary"></textarea>
				</div>
				
				<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" class="form-control" placeholder="Content"></textarea>
				</div>
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
</div>

@endsection