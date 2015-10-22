@extends('appback')
@section('content')
{{-- Showing the Error and Success Messages--}}
<div id ="blogList" class="col-md-offset-1 col-md-10">
<div class="table-responsive">
  <table class="table">
   <tr><th>Title</th><th>Create date</th><th>Updated date</th><th>Update</th><th>suspend</th></tr>
		@foreach($blogs as $blog)
		   <tr><td>{{$blog->title}}</td><td>{{$blog->created_at}}</td><td>{{$blog->updated_at}}</td><td><a href="/blog/{{$blog->id}}/update">update</a></td><td><a href="/blog/{{$blog->id}}/suspend">suspend</a></td></tr>
		@endforeach
  </table>
</div>
</div>

@endsection