@include("header")
<div class="container-fluid">

	<div class="row">
		@foreach ($products as $product)
		<div class="col-md-4">
		    <div class="thumbnail">
		      <a href="/w3images/lights.jpg">
		        <img src="/images/veg/1.jpg" alt="Lights" style="width:100%">
		        <div class="caption">
		          <p>$product->prod_name</p>
		        </div>
		      </a>
		    </div>
		</div>
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
		</div> --}}
	</div> 

	{{-- <div class="row">
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
	</div> --}}  
</div>



