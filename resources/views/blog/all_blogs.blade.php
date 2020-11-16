@extends('layouts.app')
@section('content')

<div class="container-fluid" style="background-color: white;">
	<div class="row">
		<div class="col-8">
			@foreach($blogs as $blog)
			<div class="row content" style="padding-top: 30px; padding-left: 20px;">				
				<div class="col-4">
					<a href="/show_blog/{{ $blog->id }}">
						<img src="{{ $blog->img_url }}" alt="Lights" style="width:280px; height: 150px;">
					</a>

				</div>

				<div class="col-7">
					<p style="color: green;">{{ $blog->category }}</p>
					<a href="/show_blog/{{ $blog->id }}" style="text-decoration: none; color: black;">
						<h2 style="font-weight: bold; ">{{ $blog->title }}</h2>
					</a>

					<p>Published at: {{ $blog->created_at }} By {{ $blog->author }}</p>
					<p style="font-size: 16px;">
						{{ \Illuminate\Support\Str::limit($blog->description, 60, $end='...') }}
					</p>


				</div>
			</div>
			<br>
			<br>
			@endforeach
		</div>
		<div class="col-4">
			<table class="table table-hover">
				<thead>
				    <tr>
				      <th scope="col" style="background-color: #83B735; color: white;">খাদ্যের গুনাগুণ</th>
				    </tr>
		  		</thead>
				<tbody>
					@foreach($blog_cats_1 as $blog)
					<tr>
						<td>
							<img src="{{ $blog->img_url }}" alt="Lights" style="width:80px; height: 50px;">
						</td>
						<td>
							<p style="color: green;">{{ $blog->category }}</p>
							<h5>
								{{ $blog->title }}
							</h5>
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
			<table class="table table-hover">
				<thead>
				    <tr>
				      <th scope="col" style="background-color: #83B735; color: white;">হেলথ টিপস</th>
				    </tr>
		  		</thead>
				<tbody>
					@foreach($blog_cats_2 as $blog)
					<tr>
						<td>
							<img src="{{ $blog->img_url }}" alt="Lights" style="width:80px; height: 50px;">
						</td>
						<td>
							<p style="color: green;">{{ $blog->category }}</p>
							<h5>
								{{ $blog->title }}
							</h5>
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
			<table class="table table-hover">
				<thead>
				    <tr>
				      <th scope="col" style="background-color: #83B735; color: white;">রেসিপি</th>
				    </tr>
		  		</thead>
				<tbody>
					@foreach($blog_cats_3 as $blog)
					<tr>
						<td>
							<img src="{{ $blog->img_url }}" alt="Lights" style="width:80px; height: 50px;">
						</td>
						<td>
							<p style="color: green;">{{ $blog->category }}</p>
							<h5>
								{{ $blog->title }}
							</h5>
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
			<table class="table table-hover">
				<thead>
				    <tr>
				      <th scope="col" style="background-color: #83B735; color: white;">কোরবানি</th>
				    </tr>
		  		</thead>
				<tbody>
					@foreach($blog_cats_4 as $blog)
					<tr>
						<td>
							<img src="{{ $blog->img_url }}" alt="Lights" style="width:80px; height: 50px;">
						</td>
						<td>
							<p style="color: green;">{{ $blog->category }}</p>
							<h5>
								{{ $blog->title }}
							</h5>
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection