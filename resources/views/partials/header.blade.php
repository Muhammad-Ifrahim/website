<link rel="stylesheet" type="text/css" href="{!! mix('/home/css/home.css') !!}">
<div class="nav-fixed">
	<div class="header">
		<div class="container px-0">
			<div class="row px-0 justify-content-center align-items-center">
				<div class="header-contact col-lg-8 col-md-8 col-12">
					<ul>
						<li>
							<i class="fa fa-phone">
							<span class="pl-2"> CALL +923217592332 </span>
							</i>
						</li>
						<li>
							<i class="fa fa-envelope">
							<span class="pl-2">aspirethrottle147@gmail.com</span>
							</i>
						</li>
					</ul>
				</div>
				<div class="header-social-icons  col-lg-4 col-md-8 col-12">
					<ul class="float-right ">
						<li>
							<a href="" class="fa fa-facebook-square"></a>
						</li>
						<li>
							<a href="" class="fa fa-twitter-square"></a>
						</li>
						<li>
							<a href="" class="fa fa-linkedin-square"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="main-header ">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12">
					<nav class="navbar navbar-expand-lg ">
						<a class="navbar-brand" href="{!! url('/') !!}">
							<img src="{!! asset('/images/Home Page/Logo.png') !!}">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link " href="{!! url('/') !!}">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="{!! url('/') !!}?tab=cars">Cars</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="{!! url('/') !!}?tab=about">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="{!! url('/') !!}?tab=contact">Contact</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>