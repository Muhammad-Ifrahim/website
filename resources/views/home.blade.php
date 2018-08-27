@extends('master')
<link rel="stylesheet" type="text/css" href="{!! mix('/home/css/home.css') !!}">
@section('content')
<div class="banner-img">
	<img class="w-100" src="{!! asset('/images/Home Page/banner.jpg') !!}">
</div>
<section id="car-section" class="car-section">
	<div class="container ">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-12 my-5">
				<h1 class="mb-0 heading text-center">CARS</h1>
				<p class="description text-center pt-3">We facilitate you by bringing the best cars</p>
				<div class="row">
					<div class="col-lg-4 bottom">
						<div class="card">
							<img class="card-img-top" src="{!! asset('images/Home Page/WagonR.jpeg') !!}">
							<div class="card-body">
								<h5 class="card-title"></h5>
								<p class="card-text text-center">
									Suzuki WagonR
								</p>
							</div>
							<div class="card-footer bg-transparent text-center">
								<a href="{!! url('/car-wagonR') !!}" class="btn btn-warning ">
									Read More
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 bottom">
						<div class="card">
							<img class="card-img-top" src="{!! asset('images/Home Page/wagonr-white.jpg') !!}">
							<div class="card-body">
								<h5 class="card-title"></h5>
								<p class="card-text text-center">
									Suzuki WagonR
								</p>
							</div>
							<div class="card-footer bg-transparent text-center">
								<a href="{!! url('/car-wagonR') !!}" class="btn btn-warning ">
									Read More
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 bottom">
						<div class="card">
							<img class="card-img-top" src="{!! asset('images/Home Page/cultus.jpg') !!}">
							<div class="card-body">
								<h5 class="card-title"></h5>
								<p class="card-text text-center">
									Cultus (New Model)
								</p>
							</div>
							<div class="card-footer bg-transparent text-center">
								<a href="{!! url('/car-cultus') !!}" class="btn btn-warning ">
									Read More
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 bottom">
						<div class="card">
							<img class="card-img-top" src="{!! asset('images/Home Page/honda-city.jpg') !!}">
							<div class="card-body">
								<h5 class="card-title"></h5>
								<p class="card-text text-center">
									Honda City
								</p>
							</div>
							<div class="card-footer bg-transparent text-center">
								<a href="{!! url('/car-city') !!}" class="btn btn-warning ">
									Read More
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 bottom">
						<div class="card">
							<img class="card-img-top" src="{!! asset('images/Home Page/corolla-white.jpg') !!}">
							<div class="card-body">
								<h5 class="card-title"></h5>
								<p class="card-text text-center">
									Toyota Corolla
								</p>
							</div>
							<div class="card-footer bg-transparent text-center">
								<a href="{!! url('/car-toyota') !!}" class="btn btn-warning ">
									Read More
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="car-rental" class="rental-car">
	<div class="container">
		<div class="row  d-flex justify-content-left align-items-center">
			<div class="col-6 col-12">
				<p class="text-white heading">FIND THE RENTAL CAR</p>
				<p class="text-white description">- Search  hundered of other  travel sites at once</p>
				<p class="text-white description">- Find the best price for the Rental car you want</p>
				<a href="" class="btn btn-warning">Read More</a>
			</div>
		</div>
	</div>
</section>
<section id="about-us" class="about-us">
	<div class="container">
		<div class="row justify-content-center align-items-center mb-5">
			<div class="col-12 mb-5">
				<div class="row mb-4">
					<div class="col-12">
						<h1 class="text-white text-center main-heading mt-lg-5"> ABOUT US</h1>
					</div>
				</div>
				<div class="row rent-a-car access p-5">
					<div class="col-lg-2">
						<p class="text-white rental-cars">Rent A Car  Lahore</p>
					</div>
					<div class="col-lg-10">
						<p class="text-white">
							No matter to which city you plan to travel from lahore or for what purpose does your trip serve Our car rental service in Lahore can assist you in the most reliable way out round the clock
						</p>
						<p class="text-white">
							Online Access to Our Rental Car in Lahore
						</p>
						<p class="text-white">
							One can easily reach for our Car hire Company.
							Although with the increasing volume of Demand there have been several car rentals operators emerging in the market
							We offer brand new Toyota Gli, Honda City,Cultus ,Wagon R 
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12 px-0 mb-4">
				<div class="about-service p-4">
					<p class="heading">Highly Professional Rent a Car</p>
					<br>
					<p>it has been the combined efforts of a highly professional yet one of the finest working authority of experts who have been contributing to the run of our tremendous car rental 	service in Lahore</p>
				</div>
			</div>
			<div class="col-lg-4 col-12 px-0 mb-4">
				<div class="about-online p-4">
					<p class="heading"">Secure Online Contact Services</p>
					<br>
					<p>You can reach for rent a car Lahore through our website,where you can glance through service description a fleet of cars and choose the most suitable one according to your requirement</p>
				</div>
			</div>
			<div class="col-lg-4 col-12 px-0 mb-4">
				<div class="about-procedure p-4">
					<p class="heading">Customize Car Hire Procedure</p>
					<br>
					<p>We have been maintaining the customized flow of processes across the working steam that has been helping our Rent a Car Lahore experts in rendering prompt and efficient customer handling facilities.</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
