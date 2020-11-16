@extends('layouts.app')
@section('content')
<div class="container" style="background-color: white;">

	<div class="row">
		<div class="col-5">
			@include('admin.pie')
		</div>
		<div class="col-5">
			@include('admin.line')
		</div>
	</div>
</div>

<br>
<div class="container" style="background-color: white;">

	<div class="row">
		<div class="col-4">
			@include('admin.bar')
		</div>
		<div class="col-6" style="margin: auto;">
			@include('admin.donut')
		</div>
	</div>
</div>

<br>
<div class="container" style="background-color: white;">

	<div class="row">
		<div class="col-10">
			@include('admin.trendline')
		</div>
	</div>
</div>

<br>
<div class="container" style="background-color: white;">
	<div class="row">
		<div class="col-10">
			@include('admin.laravel_chart')
		</div>
	</div>
</div>
@endsection
