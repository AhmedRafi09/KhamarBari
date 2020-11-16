@extends('layouts.app')

@section('content')
@include("pages.courasel")
<div class="container">
	<br>
	<h3 style="text-align: center; font-weight: bold;">PRODUCT CATEGORIES</h3>
	<br>
	
	<div class="row">
		
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/w3images/lights.jpg">
					<img src="/images/products/honey.jpg" alt="Lights" style="width:100%; height: 280px;">
					<div class="caption" style="text-align: center; background-color: rgb(153, 192, 151, 50%);">
					</div>
				</a>
			</div>
			<h3 style="text-align: center;">HONEY</h3>
			<p style="text-align: center; font-weight: bold; color: grey;">{{ $honey }} products</p>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/w3images/lights.jpg">
					<img src="/images/products/Chutney-Pickles.jpg" alt="Lights" style="width:100%; height: 280px;">
					<div class="caption" style="text-align: center; background-color: rgb(153, 192, 151, 50%);">

					</div>
				</a>
			</div>
			<h3 style="text-align: center;">PICKLE & CHUTNEY</h3>
			<p style="text-align: center; font-weight: bold; color: grey;">{{ $pickle }} products</p>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/w3images/lights.jpg">
					<img src="/images/products/grocery.jpg" alt="Lights" style="width:100%; height: 280px;">
					<div class="caption" style="text-align: center; background-color: rgb(153, 192, 151, 50%);">

					</div>
				</a>
			</div>
			<h3 style="text-align: center;">GROCERY</h3>
			<p style="text-align: center; font-weight: bold; color: grey;">{{ $grocery }} products</p>
		</div>

	</div>
	<br><br>

	<div class="row">
		
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/w3images/lights.jpg">
					<img src="/images/products/honey.jpg" alt="Lights" style="width:100%; height: 280px;">
					<div class="caption" style="text-align: center; background-color: rgb(153, 192, 151, 50%);">
					</div>
				</a>
			</div>
			<h3 style="text-align: center;">HONEY</h3>
			<p style="text-align: center; font-weight: bold; color: grey;">{{ $honey }} products</p>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/w3images/lights.jpg">
					<img src="/images/products/Chutney-Pickles.jpg" alt="Lights" style="width:100%; height: 280px;">
					<div class="caption" style="text-align: center; background-color: rgb(153, 192, 151, 50%);">

					</div>
				</a>
			</div>
			<h3 style="text-align: center;">PICKLE & CHUTNEY</h3>
			<p style="text-align: center; font-weight: bold; color: grey;">{{ $pickle }} products</p>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/w3images/lights.jpg">
					<img src="/images/products/grocery.jpg" alt="Lights" style="width:100%; height: 280px;">
					<div class="caption" style="text-align: center; background-color: rgb(153, 192, 151, 50%);">

					</div>
				</a>
			</div>
			<h3 style="text-align: center;">GROCERY</h3>
			<p style="text-align: center; font-weight: bold; color: grey;">{{ $grocery }} products</p>
		</div>

	</div>

</div>
@endsection