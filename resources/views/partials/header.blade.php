<header id="header" id="home">
	<div class="container">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="{!! url('/') !!}"><img src="{!! asset('/images/Home Page/logo.png') !!}" alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="{!! url('/') !!}">Home</a></li>
					<li><a href="{!! url('/about') !!}?tab=about">About</a></li>
					<li><a href="{!! url('/car') !!}">Cars</a></li>
					<li><a href="{!! url('/service') !!}">Service</a></li>
					<li><a href="{!! url('/contact') !!}">Contact</a></li>
				</ul>
			</nav>
			<!-- #nav-menu-container -->
		</div>
	</div>
</header>
	<!-- #header -->