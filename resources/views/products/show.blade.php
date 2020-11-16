@extends('layouts.app')
@section('content')
@if(Auth::guest())
    <h2>Unauthorized!</h2>
@elseif(Auth::user()->isAdmin == 0)
    <h2>Unauthorized!</h2>
@elseif(auth()->user()->isAdmin == 1)
<div class="container">
	<table class="table table-hover">
    <thead>
    <tr>
    	<th scope="col">ID</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Category</th>
        <th scope="col">Price</th>
        <th scope="col">Qty/Wt</th>
        
        {{-- <th scope="col">infected_total</th>
        <th scope="col">test_positivity</th> --}}

    </tr>
    </thead>
    <tbody>
@foreach($products as $product)
    <tr>
    	<td>{{ $product->id }}</td>
        <td>{{ $product->prod_name }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->qty_or_wt }}</td>
        <td>
        	<a href="/products/edit_product/{{ $product->id }}" class="btn btn-primary">EDIT</a>
        </td>
        <td>
        	<a href="/products/delete_product/{{ $product->id }}" class="btn btn-danger">DELETE</a>
        </td>
        {{-- <td>{{ $product->infected_24_hrs }}</td>
        <td>{{ $product->infected_total }}</td>
        <td>{{ ($product->infected_24_hrs)/($d->test_24_hrs)*100 }}</td> --}}

    </tr>
@endforeach
    </tbody>
</table>
@endif
@endsection
	
</div>
