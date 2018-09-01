@extends('master')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-7 col-md-6 ">
				<h6 class="text-white ">the Royal Essence of Journey</h6>
				<h1 class="text-white text-uppercase">
				Relaxed Journey Ever
				</h1>
				<p class="pt-20 pb-20 text-white">
					Rent a car at low prices.
				</p>
				<a href="#" class="primary-btn text-uppercase">Rent Car Now</a>
			</div>
			<div class="col-lg-5  col-md-6 header-right">
				<h4 class="text-white pb-30">Online Service will be available Soon! </h4>
				<form class="form" role="form" autocomplete="off">
					<div class="form-group">
						<div class="default-select" id="default-select"">
							<select>
								<option value="" disabled selected hidden>Select Your Car</option>
								<option value="1">Toyota</option>
								<option value="1">Honda</option>
								<option value="1">Suzuki</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6 wrap-left">
							<div class="default-select" id="default-select"">
								<select>
									<option value="" disabled selected hidden>Pickup</option>
									<option value="1">Pickup One</option>
									<option value="1">Pickup Two</option>
									<option value="1">Pickup Three</option>
									<option value="1">Pickup Four</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 wrap-right">
							<div class="input-group dates-wrap">
								<input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">
								<div class="input-group-prepend">
									<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6 wrap-left">
							<div class="default-select" id="default-select"">
								<select>
									<option value="" disabled selected hidden>Drop off</option>
									<option value="1">Drop off One</option>
									<option value="1">Drop off Two</option>
									<option value="1">Drop off Three</option>
									<option value="1">Drop off Four</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 wrap-right">
							<div class="input-group dates-wrap">
								<input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">
								<div class="input-group-prepend">
									<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
								</div>
							</div>
						</div>
					</div>
					<div class="from-group">
						<input class="form-control txt-field" type="text" name="name" placeholder="Your name">
						<input class="form-control txt-field" type="email" name="email" placeholder="Email address">
						<input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number">
					</div>
					<div class="form-group row">
						<div class="col-md-12">
							<button type="reset" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirm Car Booking</button>
						</div>
					</div>
				</form>
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
<!-- Start model Area -->
<section class="model-area section-gap" id="car-section">
	<div class="container">
		<div class="row d-flex justify-content-center p-5" style="border: 2px solid #fab700;">
			<div class="col-lg-6 model-left">
				<div class="title ">
					<h4 class="mt-20">Honda City</h4>
					<h2  >RS $149<span>/day</span></h2>
				</div>
				<p>
					Honda City available
				</p>
				
				<p>
					Capacity         : 04 Person <br>
					Doors            : 04 <br>
					Air Condition    : Dual Zone <br>
					Transmission     : Automatic
				</p>
				<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
			</div>
			<div class="col-lg-6 model-right">
				<img class="img-fluid"  src="{!! asset('images/Home Page/honda-city.jpg') !!}" alt="">
			</div>
		</div>
		<div class="row d-flex justify-content-center mt-4 p-5" style="border: 2px solid #fab700;">
			<div class="col-lg-6 model-left">
				<div class="title ">
					<h4 class="mt-20">Toyota Crolla</h4>
					<h2  >RS $149<span>/day</span></h2>
				</div>
				<p>
					Toyota Crolla available
				</p>
				
				<p>
					Capacity         : 04 Person <br>
					Doors            : 04 <br>
					Air Condition    : Dual Zone <br>
					Transmission     : Automatic
				</p>
				<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
			</div>
			<div class="col-lg-6 model-right">
				<img class="img-fluid" src="{!! asset('images/Home Page/corolla-white.jpg') !!}"  alt="">
			</div>
		</div>
		<div class="row d-flex justify-content-center mt-4 p-5" style="border: 2px solid #fab700;">
			<div class="col-lg-6 model-left">
				<div class="title ">
					<h4 class="mt-20">WagonR</h4>
					<h2  >RS $149<span>/day</span></h2>
				</div>
				<p>
					Honda City available
				</p>
				
				<p>
					Capacity         : 04 Person <br>
					Doors            : 04 <br>
					Air Condition    : Dual Zone <br>
					Transmission     : Automatic
				</p>
				<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
			</div>
			<div class="col-lg-6 model-right">
				<img class="img-fluid"  src="{!! asset('images/Home Page/WagonR.jpeg') !!}" alt="">
			</div>
		</div>
		<div class="row d-flex justify-content-center mt-4 p-5" style="border: 2px solid #fab700;">
			<div class="col-lg-6 model-left">
				<div class="title ">
					<h4 class="mt-20">Cultus</h4>
					<h2  >RS $149<span>/day</span></h2>
				</div>
				<p>
					Honda City available
				</p>
				
				<p>
					Capacity         : 04 Person <br>
					Doors            : 04 <br>
					Air Condition    : Dual Zone <br>
					Transmission     : Automatic
				</p>
				<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
			</div>
			<div class="col-lg-6 model-right">
				<img class="img-fluid"  src="{!! asset('images/Home Page/cultus.jpg') !!}" alt="">
			</div>
		</div>
		
	</div>
</section>
<!-- End model Area -->
<!-- Start fact Area -->
<section class="facts-area section-gap">
<div class="container">
	<div class="row">
		<div class="header-text  d-flex justify-content-center align-items-center">
			<h1 class="text-white">WE PROVIDE YOU THE BEST CAR'S TO MAKE YOUR TRAVEL WORTH ENOUGH</h1>
		</div>
	</div>
</section>
<!-- end fact Area -->
<!-- Start callaction Area -->
<section class="callaction-area relative section-gap">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row justify-content-left">
			<div class="col-lg-10">
				<h1 class="text-white">FIND THE RENTAL CAR</h1>
				<p class="mb-0 pb-0">
					- Search hundered of other travel sites at once
				</p>
				<p>
					- Find the best price for the Rental car you want.
					
				</p>
				<a class="callaction-btn text-uppercase" href="#">Get Connected</a>
			</div>
		</div>
	</div>
</section>
<!-- End callaction Area -->
@endsection