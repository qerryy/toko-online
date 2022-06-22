@extends('templates.master')

@section('title', 'Create Category')

@section('content')

	<div class="container">
	<h1>Add Category</h1>
	<hr>

		@if (session('status'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong> {{ session('status') }} </strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif

		<div class="card border-success" style="max-width: 70%; margin: auto; margin-top: 40px;">
			<div class="card-header bg-success text-white">
				<h5>Create a New Category</h5>
			</div>

			<div class="card-body">
				<div class="container text-success">

				<form class="form-group" action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="row">
					<div class="col-md-3">
						<label  for="category_name">Category Name</label>
					</div>
					<div class="col-md-8">
						<input class="form-control {{$errors->first('category_name')? "is-invalid": ""}}" type="text" name="category_name" id="category_name">
						<div class="invalid-feedback">
							{{$errors->first('category_name')}}
						</div>
					</div>
				</div>
				
			<br>

				<div class="row">
					<div class="col-md-3 offset-md-5 offset-md-4">
						<button class="btn btn-outline-success" type="submit">Save</button>
					</div>
				</div>
				</form>
				</div>
			</div>
		</div>
	</div>
@endsection