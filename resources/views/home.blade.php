
@if(Auth::guest())
<h2>Unauthorized!</h2>
@elseif(Auth::user()->isAdmin == 0)
@section('content')
@include('pages.index')

@elseif(auth()->user()->isAdmin == 1)
@extends('layouts.app')
@section('content')



<div class="container-fluid" style="background-color: white;">
	<div class="row justify-content-center" style="text-align: center;">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3>Welcome to Admin Panel!</h3>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="row justify-content-center">
		<div class="col-lg-3 col-6">
			<div class="card" style="width: 18rem;">
				<div class="card-header" style="text-align: center; background-color: #02B0B9; color: white;">
					PRODUCT
				</div>
				<ul class="list-group list-group-flush">
					<a href="/store_product" style="text-decoration: none;">
						<li class="list-group-item" style="color: #02B0B9; font-weight: bold;">ADD NEW</li>
					</a>
					<a href="/products/show" style="text-decoration: none;">
						<li class="list-group-item" style="color: #02B0B9; font-weight: bold;">EDIT</li>
					</a>
					<a href="" style="text-decoration: none;">
						<li class="list-group-item" style="color: #02B0B9; font-weight: bold;">UPDATE</li>
					</a>
					<a href="" style="text-decoration: none;">
						<li class="list-group-item" style="color: #02B0B9; font-weight: bold;">DELETE</li>
					</a>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-6">
			<div class="card" style="width: 18rem;">
				<div class="card-header" style="text-align: center; background-color: #6B02B9; color: white;">
					BLOG
				</div>
				<ul class="list-group list-group-flush">
					<a href="/store_blog" style="text-decoration: none;">
						<li class="list-group-item" style="color: #6B02B9; font-weight: bold;">ADD NEW</li>
					</a>
					<a href="" style="text-decoration: none;">
						<li class="list-group-item" style="color: #6B02B9; font-weight: bold;">EDIT</li>
					</a>
					<a href="" style="text-decoration: none;">
						<li class="list-group-item" style="color: #6B02B9; font-weight: bold;">UPDATE</li>
					</a>
					<a href="" style="text-decoration: none;">
						<li class="list-group-item" style="color: #6B02B9; font-weight: bold;">DELETE</li>
					</a>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-6">
			<div class="card" style="width: 18rem;">
				<div class="card-header" style="text-align: center; background-color: #92D488; color: white;">
					BLOG
				</div>
				<ul class="list-group list-group-flush">
					<a href="/store_blog" style="text-decoration: none;">
						<li class="list-group-item" style="color: #6B02B9; font-weight: bold;">ADD NEW</li>
					</a>
					<a href="" style="text-decoration: none;">
						<li class="list-group-item" style="color: #6B02B9; font-weight: bold;">EDIT</li>
					</a>
					<a href="" style="text-decoration: none;">
						<li class="list-group-item" style="color: #6B02B9; font-weight: bold;">UPDATE</li>
					</a>
					<a href="" style="text-decoration: none;">
						<li class="list-group-item" style="color: #6B02B9; font-weight: bold;">DELETE</li>
					</a>
				</ul>
			</div>
		</div>
	</div>
	<br>
	
	
<br>
</div>
@endif
@endsection
