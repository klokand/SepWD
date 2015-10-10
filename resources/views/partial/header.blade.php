<div id = "topbar" class="row">
		<div class="logo col-md-6 ">
			<img class="img-responsive" src="/img/logo2.png" alt="ACU8HEALTH">
		</div>
		<div class="contact-top col-md-offset-2 col-md-4">
		<p><img class="phone" src="/img/call.png" alt="call"><span style="font-size: 30px;"> (08)-9387-3389</span></p>
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
					<li 
					@if(Request::path() == 'practitioners')
					class="active"
					@endif
					><a href="/practitioners">Practitioners</a></li>
					
					<li class="dropdown
					@if(Request::path() == 'treatment')
						active
					@endif
					">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">Treatment <b class="caret"></b></a>
					<ul class="dropdown-menu" id="menu1">
						<li><a href="/treatment/acupuncture">Acupuncture</a></li>
						<li><a href="/treatment/chinese herbal medicine">Chinese Medicine</a></li>
						<li><a href="/treatment/therapeutic massage">Remedial Massage</a></li>
					</ul>
					</li>
					
					<li class="dropdown
					@if(Request::path() == 'fertility')
						active
					@endif
					">
						<a href="/fertility" data-toggle="dropdown" class="dropdown-toggle">Fertility <b class="caret"></b></a>
					<ul class="dropdown-menu" id="menu1">
						<li><a href="/fertility/IVF support">IVF support</a></li>
						<li><a href="/fertility/Natural Fertility Support">Natural Fertility Support</a></li>
						<li><a href="/fertility/Miscarriage Prevention">Miscarriage Prevention</a></li>
						<li><a href="/fertility/Pregnancy Care">Pregnancy Care</a></li>
					</ul>
					</li>
					
					<li class="dropdown
					@if(Request::path() == '	')
						active
					@endif
					">
						<a href="/generalHealth" data-toggle="dropdown" class="dropdown-toggle">General Health<b class="caret"></b></a>
					<ul class="dropdown-menu" id="menu1">
						<li><a href="/generalHealth/Womens Health">Women's Health</a></li>
						<li><a href="/generalHealth/Pain Management">Pain Management</a></li>
						<li><a href="/generalHealth/Skin Issues">Skin Issues</a></li>
						<li><a href="/generalHealth/Mental Disorders">Mental Disorders</a></li>
						<li><a href="/generalHealth/Digestive Disorders">Digestive Disorders</a></li>
						<li><a href="/generalHealth/Respiratory Disorders">Respiratory Disorders</a></li>
					</ul>
					</li>
					
					<li 
					@if(Request::path() == 'blog')
					class="active"
					@endif
					><a href="/blog">Blog</a></li>

					<li 
					@if(Request::path() == 'fees')
					class="active"
					@endif
					><a href="/fees">Fees</a></li>
					
					<li 
					@if(Request::path() == 'contact')
					class="active"
					@endif
					><a href="/contact">Contact</a></li>
					
				</ul>
			</div>
		</div>
	</nav>