@extends('templates.master')

@section('title', 'Detail Book')

@section('content')

	<h1>Detail Book</h1>
	<hr>
	
	<div class="card bg-light border-success" style="max-width: 60%; margin: auto; min-height: 500px;">

		<div class="row" style="padding: 25px;">
			<div class="col-md-4 offset-sm-5 offset-md-4">
				&nbsp;&nbsp;<img src=" {{ asset('storage/'.$books['cover']) }} " alt="gambar" style="width:150px; height: 130px;" class="img-thumbnail">
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 text-center">
				<h3>{{ $books['title'] }} </h3>
			</div>
		</div>
		<hr>
		<br>

		<div class="row">
			<div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
				<b>ID</b>
			</div>
			<div class="col-md-4 col-sm-4">
				{{ $books['id'] }}
			</div>		
		</div>

		<div class="row">
			<div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
				<b>Author</b>
			</div>
			<div class="col-md-4 col-sm-4">
				{{ $books['author'] }}
			</div>
		</div>

		<div class="row">
			<div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
				<b>Publisher</b>
			</div>
			<div class="col-md-4 col-sm-4">
				{{ $books['publisher'] }}
			</div>
		</div>

		<div class="row">
			<div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
				<b>Price</b>
			</div>
			<div class="col-md-4 col-sm-4">
				{{ $books['price'] }}
			</div>
		</div>

		<div class="row">
			<div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
				<b>Stock</b>
			</div>
			<div class="col-md-4 col-sm-4">
				{{ $books['stock'] }}
			</div>
		</div>

		<div class="row">
			<div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
				<b>Category</b>
			</div>
			<div class="col-md-4 col-sm-4">
					@foreach($books->categories as $ct)
						<span class="badge badge-primary"> 
							{{$ct->category_name}}
						</span>
					@endforeach
			</div>
		</div>

		<div class="row">
			<div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
				<b>Description</b>
			</div>
			<div class="col-md-6 col-sm-8">
				{{ $books['description'] }}
			</div>		
		</div>

	</div>

@endsection