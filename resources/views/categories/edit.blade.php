@extends('templates.master')

@section('title', 'Edit Category')

@section('content')

	<div class="container">
		<h1>Edit Category</h1>
		<hr>

		@if (session('status'))
			<div class="alert alert-info alert-dismissible fade show" role="alert">
				<strong> {{ session('status') }} </strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif

		<div class="card border-success" style="max-width: 70%; margin: auto; margin-top: 40px;">

		<div class="card-header bg-success text-white">
			<h5> {{ $categories['category_name'] }} </h5>
		</div>

		<div class="card-body">

		<div class="container text-success">
			<form action="{{ route('categories.update', $categories['id']) }}" method="POST" class="form-group" enctype="multipart/form-data">
			@csrf
			@method('PUT')
		</div>

		<div class="row">
				<div class="col-md-3">
					<label class="text-success" for="categori">Category Name</label>
				</div>
				<div class="col-md-8">					
					<input class="form-control {{$errors->first('category_name')? "is-invalid": ""}}" type="text" name="category_name" id="category_name" value="{{ old('category_name') ? old('category_name') : $categories['category_name'] }}">
					<div class="invalid-feedback">
						{{$errors->first('category_name')}}
					</div>
				</div>
			</div>

		<br>

			<div class="row">
				<div class="col-md-3 offset-md-5 offset-md-4">
					<button type="submit" class="btn btn-outline-success">Save</button>
				</div>
			</div>

		</form>
	</div>
</div>
</div>
</div>
</div>
@endsection