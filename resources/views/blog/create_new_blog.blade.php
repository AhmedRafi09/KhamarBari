
@extends('layouts.app')
@section('content')

@if(Auth::guest())
    <h2>Unauthorized!</h2>
@elseif(Auth::user()->isAdmin == 0)
    <h2>Unauthorized!</h2>
@elseif(auth()->user()->isAdmin == 1)
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Create New Blog
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ url('/store_blog') }}" enctype="multipart/form-data">
       @csrf
        
        <div class="form-group">
          <label for="exampleInputEmail1">Author</label>
          <input type="text" id="author" name="author" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="img_url">Upload Image</label>
          <input type="file" name="img_url" id="img_url">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <input type="text" id="description" name="description" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Category</label>
          <input type="text" id="category" name="category" class="form-control" required="">
        </div>
        
        <button type="submit" class="btn btn-primary">Create Blog</button>
      </form>
    </div>
  </div>
</div>
@endif    
@endsection
{{-- </html> --}}




