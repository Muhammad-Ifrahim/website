@extends('master')
<link rel="stylesheet" type="text/css" href="{!! mix('/home/css/home.css') !!}">
@section('content')
<section class="car-detail">
	<div class="container">
		<div class="row justify-content-center my-5">
			
			<div class="col-lg-6 col-12">
				<h1 class="car-heading mb-4">SUZUKI CULTUS 1.0L 2018</h3>
				<div class="car-image">
					<img class="card-img-top" src="{!! asset('images/Home Page/cultus.jpg') !!}">
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<h2 class="car-heading mb-4">Vehicle Rates</h2>
				<div class="vehicle-price mb-4">
					<table class="table">
						<thead>
							<tr>
								<th>Duration</th>
								<th>Daily Rent in PKR</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1-15 DAYS</td>
								<td>12000 in PKR</td>
								
							</tr>
							<tr>
								<td>16-25 DAYS</td>
								<td>10000 in PKR</td>
								
							</tr>
							<tr>
								<td>25+ DAYS</td>
								<td>80000 in PKR</td>
								
							</tr>
						</tbody>
					</table>
				</div>
				<h2 class="car-heading mb-4">Vehicle Detail</h2>
				<div class="vehicle-detail">
					<table class="table">
						<thead>
							<tr>
								<th>CAR</th>
								<th>Wagon R</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Color</td>
								<td>White</td>
								
							</tr>
							<tr>
								<td>Make </td>
								<td>Suzuki</td>
								
							</tr>
							<tr>
								<td>Year</td>
								<td>2016</td>
								
							</tr>
						</tbody>
					</table>
				</div>
				<h2 class="car-heading my-4">Vehicle Feature</h2>
				<div class="vehicle-detail">
					<table class="table">
						<thead>
							<tr>
								<th>Feature</th>
								<th>Detail</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>BAGS</td>
								<td>4 Bags</td>
								
							</tr>
							<tr>
								<td>DOORS</td>
								<td>4 </td>
								
							</tr>
							<tr>
								<td>A/C</td>
								<td>Available</td>
								
							</tr>
							<tr>
								<td>Passengers</td>
								<td>5</td>
								
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection