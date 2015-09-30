<div id = "topbar" class="row">
		<div class="logo col-md-6 col-md-offset-1">
			<img src="/img/acu8-health-logo.png" alt="ACU8HEALTH">
		</div>
		<div class="contact col-md-5">
		<p><img class="phone" src="/img/call.png" alt="call"><span style="font-size: 30px;"> (08)-9387-3389</span></p>
		<img class="address" src="/img/address.png" alt="address">&nbsp; Unit 2, 434 Cambridge Street, Floreat WA, 6014
		</div>
	</div>
	<nav id="custom-bootstrap-menu" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header row">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
					@if(Request::path() == 'practitioners')
					<li class="active"><a href="/practitioners">Practitioners</a></li>
					@else
					<li><a href="/practitioners">Practitioners</a></li>
					@endif
					
					@if(Request::path() == 'treatment')
					<li class="active"><a href="/treatment">Treatment</a></li>
					@else
					<li><a href="/treatment">Treatment</a></li>
					@endif
					
					@if(Request::path() == 'fertility')
					<li class="active"><a href="/fertility">Fertility</a></li>
					@else
					<li><a href="/fertility">Fertility</a></li>
					@endif
					
					@if(Request::path() == 'general')
					<li class="active"><a href="/general">General Health</a></li>
					@else
					<li><a href="/general">General Health</a></li>
					@endif
					
					@if(Request::path() == 'blog')
					<li class="active"><a href="/blog">Blog</a></li>
					@else
					<li><a href="/blog">Blog</a></li>
					@endif
					
					@if(Request::path() == 'fees')
					<li class="active"><a href="/fees">Fees</a></li>
					@else
					<li><a href="/fees">Fees</a></li>
					@endif
					
					@if(Request::path() == 'contact')
					<li class="active"><a href="/contact">Contact</a></li>
					@else
					<li><a href="/contact">Contact</a></li>
					@endif
				</ul>


			</div>
		</div>
	</nav>