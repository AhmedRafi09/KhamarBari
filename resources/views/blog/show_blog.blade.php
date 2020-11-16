@extends('layouts.app')
@section('content')
<div class="row justify-content-center" style="text-align: center;">
	<div class="col-md-12">
		<div style="height: 100px; background-image: url('/images/blogs/S.png');">

		</div>
	</div>
</div>
<div class="container-fluid" style="background-color: white;">
	<br>
	<div class="row justify-content-center">
		<div class="row-content" style="background-color: #83B735; height: 25px; width: 120px;">
			<p style="color: white; text-align: center;  font-size: 15px;">
				{{ $blog->category }}
			</p>
		</div>
	</div>
	<br>
	<div class="row justify-content-center">
		<div>
			<h1 style="font-weight: bold;">{{ $blog->title }}</h1>

		</div>
		
	</div>
	<div class="row justify-content-center">
		<div>
			<p style="color: grey;">Posted by: {{ $blog->author }}</p>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="row-content">
			<img src="{{ $blog->img_url }}" alt="" style="width: 1200px; height: 600px;">	
		</div>	
		
	</div>
	<br>
	<br>
	<div class="row justify-content-center">
		<div class="container">
			<p style="font-size: 16px;">
				{{ $blog->description }}
			</p>	
		</div>	
		
	</div>
</div>
@endsection
