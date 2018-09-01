@extends('master')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
				Services
				</h1>
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="service.html"> Services</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->
<!-- Start feature Area -->
<section class="feature-area section-gap" id="about-us">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text">
				<h1>What Services we offer to our clients</h1>
				<p>
					We offer the best rent a car service in Lahore.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">
					<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
					<p>
						Periodic maintenance of vehicles, use of genuine spare parts and replacement of cars every third year enables us to keep our fleet up-to-date and tension-free.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">
					<h4><span class="lnr lnr-license"></span>Professional Service</h4>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">
					<h4><span class="lnr lnr-phone"></span>Great Support</h4>
					<p>
						Our team is available 24/7 to make your travel more exciting.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">
					<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">
					<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
					<p>
						Renowned for our outstanding service levels both for chauffeur driven and self-driven rentals. Providing reasonable rates with the best cars to facilitate our customers.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">
					<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
					<p>
						Excellent service. Very professional people. Cars are in very good condition.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End feature Area -->
<!-- Start home-about Area -->
<section class="home-about-area" id="about-us">
	<div class="container-fluid">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 no-padding home-about-left">
				<img class="img-fluid" src="{!! asset('/images/Home Page/about-img.jpg') !!}" alt="">
			</div>
			<div class="col-lg-6 no-padding home-about-right">
				<h1>Rent A Car  Lahore</h1>
				<p>
					<span>Online Access to Our Rental Car in Lahore</span>
				</p>
				<p>
					No matter to which city you plan to travel from lahore or for what purpose does your trip serve Our car rental service in Lahore can assist you in the most reliable way out round the clock.
				</p>
				<a class="text-uppercase primary-btn" href="#">get details</a>
			</div>
		</div>
	</div>
</section>
<!-- End home-about Area -->
@endsection