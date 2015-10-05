@extends('app')
@section('content')
<div id ="blog-detail" class="row">
	<div class="col-md-8 col-md-offset-1">
		<div class="blog-main-image">
			<img class="img-responsive" src="/img/test1.jpg">
		</div>
		<div class="blog-content">
		<input type="hidden" name="_url" value="{{Request::root()}}/{{ Request::path() }}">
			<h1>Chinese Herbal Medicine</h1>
			<div class="author col-md-6">Post by <h4>Acu8health</h4></div>
			<div class="post-date col-md-3 col-md-offset-3">Sep/30/2015</div>
			<div class="blog-passage col-md-12">
			<p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, esse, excepturi, sint ut et numquam reiciendis nulla in deserunt quaerat provident obcaecati reprehenderit iusto ab neque corporis.</p><p>

Nostrum quis quo earum enim suscipit molestiae cupiditate reprehenderit? Atque, numquam nostrum adipisci suscipit exercitationem sed ullam. Odio, laborum, obcaecati harum nostrum pariatur ipsam itaque minima atque expedita at amet dignissimos odit quisquam laboriosam eius officiis ratione alias sint rerum distinctio. Quidem, veritatis consequuntur voluptas sunt quo deleniti reprehenderit deserunt atque minus non.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, esse, excepturi, sint ut et numquam reiciendis nulla in deserunt quaerat provident obcaecati reprehenderit iusto ab neque corporis id temporibus architecto quia adipisci? Officia, aliquam, eveniet, molestias, voluptate porro assumenda error soluta ab blanditiis voluptatum nisi voluptates debitis doloribus. Asperiores, provident fuga quibusdam id tenetur!</p><p>

Nostrum quis quo earum enim suscipit molestiae cupiditate reprehenderit? Atque, numquam nostrum adipisci suscipit exercitationem sed ullam. Odio, laborum, obcaecati harum nostrum pariatur ipsam itaque minima atque expedita at amet dignissimos odit quisquam laboriosam eius officiis ratione alias sint rerum distinctio. Quidem, veritatis consequuntur voluptas sunt quo deleniti reprehenderit deserunt atque minus non.</p>
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