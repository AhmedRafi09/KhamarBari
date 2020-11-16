@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<h2>All Products</h2>
	<hr>
	<br>

	<div class="row">
		@foreach ($products as $product)
		<div class="col-md-3">
		    <div class="thumbnail">
		      <a href="/w3images/lights.jpg">
		        <img src="{{ $product->img_url }}" alt="Lights" style="width:100%">
		        <div class="caption" style="text-align: center; background-color: rgb(153, 192, 151, 50%);">
		          <h5>{{ $product->prod_name }}</h5>
		          <p>{{ $product->qty_or_wt }}</p>
		          {{-- <p>{{ $product->category }}</p> --}}
		          <p>Price: {{ $product->price }}</p>
		        </div>
		      </a>
		    </div>
		</div>
		@endforeach
	</div>
</div>
@endsection
		 {{-- <div class="col-md-4">
		    <div class="thumbnail">
		      <a href="/w3images/nature.jpg">
		        <img src="/images/veg/3.jpg" alt="Nature" style="width:100%">
		        <div class="caption">
		        	<h3 style="text-align: center;">Title</h3>
		          <p>Lorem ipsum..  </p>
		        </div>
		      </a>
		    </div>
		</div>
		<div class="col-md-4">
		    <div class="thumbnail">
		      <a href="/w3images/fjords.jpg">
		        <img src="/images/veg/2.jpg" alt="Fjords" style="width:100%">
		        <div class="caption">
		          <p>Lorem ipsum...</p>
		        </div>
		      </a>
		    </div>
		</div>
	</div> 

	<div class="row">
		<div class="col-md-4">
		    <div class="thumbnail">
		      <a href="/w3images/lights.jpg">
		        <img src="/images/veg/1.jpg" alt="Lights" style="width:100%">
		        <div class="caption">
		          <p>Lorem ipsum...</p>
		        </div>
		      </a>
		    </div>
		</div>
		 <div class="col-md-4">
		    <div class="thumbnail">
		      <a href="/w3images/nature.jpg">
		        <img src="/images/veg/3.jpg" alt="Nature" style="width:100%">
		        <div class="caption">
		        	<h3 style="text-align: center;">Title</h3>
		          <p>Lorem ipsum...  </p>
		        </div>
		      </a>
		    </div>
		</div>
		<div class="col-md-4">
		    <div class="thumbnail">
		      <a href="/w3images/fjords.jpg">
		        <img src="/images/veg/2.jpg" alt="Fjords" style="width:100%">
		        <div class="caption">
		          <p>Lorem ipsum...</p>
		        </div>
		      </a>
		    </div>
		</div>
	</div>  
</div>
 --}}


