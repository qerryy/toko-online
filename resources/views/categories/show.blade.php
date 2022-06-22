@extends('templates.master')

@section('title', 'Detail Category')

@section('content')

	<h1>Detail Category</h1>
	<hr>
	
	<div class="card bg-light border-success" style="max-width: 60%; margin: auto; min-height: 400px; padding-top: 50px;">

		<div class="row">
			<div class="col-md-3 offset-md-2 col-sm-3 offset-sm-2">
				<b>ID</b>
			</div>
			<div class="col-md-4 col-sm-4">
				{{ $categories['id'] }}
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 offset-md-2 col-sm-3 offset-sm-2">
				<b>Category Name</b>
			</div>
			<div class="col-md-5 col-sm-4">
				{{ $categories['category_name'] }}
			</div>
		</div>

	</div>
@endsection