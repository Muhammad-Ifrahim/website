@extends('master')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
				Cars
				</h1>
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cars.html"> Cars</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->
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
				<img class="img-fluid"  src="{!! asset('images/Home Page/corolla-white.jpg') !!} alt="">
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
@endsection