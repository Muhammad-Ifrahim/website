@extends('master')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
				About Us
				</h1>
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="service.html"> About</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->
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