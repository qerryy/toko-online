@extends('templates.master')

@section('title', 'Edit Book')

@section('content')

	<div class="container">
		<h1>Edit Book</h1>
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
			<h5> {{ $books['title'] }} </h5>
		</div>

		<div class="card-body">

		<div class="container text-success">
			<form action="{{ route('books.update', $books['id']) }}" method="POST" class="form-group" enctype="multipart/form-data">
			@csrf
			@method('PUT')
		</div>

			<div class="row">
				<div class="col-md-3">
					<label class="text-success" for="title">Title</label>
				</div>
				<div class="col-md-8">					
					<input class="form-control {{$errors->first('title')? "is-invalid": ""}}" type="text" name="title" id="title" value="{{ old('title') ? old('title') : $books['title']}}">
					<div class="invalid-feedback">
						{{$errors->first('title')}}
					</div>
				</div>
			</div>

		<br>

			<div class="row">
				<div class="col-md-3">
					<label class="text-success" for="author">Author</label>
				</div>
				<div class="col-md-8">
					<input class="form-control {{$errors->first('author')? "is-invalid": ""}}" type="text" name="author" id="author" value="{{ old('author') ? old('author') : $books['author'] }}">
					<div class="invalid-feedback">
						{{$errors->first('author')}}
					</div>
				</div>
			</div>

		<br>

			<div class="row">
				<div class="col-md-3">
					<label class="text-success" for="publisher">Publisher</label>
				</div>
				<div class="col-md-8">
					<input class="form-control {{$errors->first('publisher')? "is-invalid": ""}}" type="text" name="publisher" id="publisher" value="{{ old('publisher') ? old('publisher') : $books['publisher'] }}">
					<div class="invalid-feedback">
						{{$errors->first('publisher')}}
					</div>
				</div>
			</div>

		<br>

			<div class="row">
				<div class="col-md-3">
					<label for="price" class="text-success">Price</label>
				</div>
				<div class="col-md-8">
					<input class="form-control {{$errors->first('price')? "is-invalid": ""}}" type="number" name="price" id="price" value="{{ old('price') ? old('price') : $books['price'] }}">
					<div class="invalid-feedback">
						{{$errors->first('price')}}
					</div>
				</div>
			</div>

		<br>

			<div class="row">
				<div class="col-md-3">
					<label for="stock" class="text-success">Stock</label>
				</div>
				<div class="col-md-8">
					<input class="form-control {{$errors->first('stock')? "is-invalid": ""}}" type="number" name="stock" id="stock" value="{{ old('stock') ? old('stock') : $books['stock'] }}">
					<div class="invalid-feedback">
						{{$errors->first('stock')}}
					</div>
				</div>
			</div>

		<br>

			<div class="row">
				<div class="col-md-3">
					<label for="description" class="text-success">Description</label>
				</div>
				<div class="col-md-8">
					<textarea class="form-control {{$errors->first('description')? "is-invalid": ""}}" name="description" id="description" cols="30" rows="10">
						{{ $books['description'] }}
					</textarea>
					<div class="invalid-feedback">
						{{$errors->first('description')}}
					</div>
				</div>
			</div>

		<br>

			<div class="row text-success">
				<div class="col-md-3">
					<label for="categories">Category</label>
				</div>
				<div class="col-md-8">
					<select multiple="" name="categories[]" id="categories" class="form-control {{$errors->first('category_name') ? "is-invalid": ""}}">
							
						@foreach ($categories as $cats)
							<option  {{old('category_name', $cats->categories)==$cats->id ? "selected":''}} value="{{$cats->id}}">
								{{$cats->category_name}}
							</option>
						@endforeach
					</select>
					
					<div class="invalid-feedback">
						{{$errors->first('category_name')}}
					</div>
				</div>
			</div>

		<br>


			<div class="row">
				<div class="input-group mb-3">
					<div class="col-md-3 text-success">
						Cover
					</div>

					<div class="col-md-8">
						<img src=" {{asset('storage/'.$books['cover'])}} " alt="Cover" class="img-thumbnail" height="150px" width="150px">
						<br><br>
						<div class="custom-file">
							<input type="file" class="custom-file-input {{$errors->first('cover')? "is-invalid": ""}}" name="cover" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="{{ old('cover') }}">
								<div class="invalid-feedback">
									{{$errors->first('cover')}}
								</div>
							<label class="custom-file-label" for="inputGroupFile01">Cover</label>
						</div>
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