@extends('templates.master')

@section('title', 'Edit User')

@section('content')

	<div class="container">
		<h1>Edit User</h1>
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
			<h5> {{ $user['username'] }} </h5>
		</div>

		<div class="card-body">

		<div class="container text-success">
			<form action="{{ route('users.update', $user['id']) }}" method="POST" class="form-group" enctype="multipart/form-data">
				@csrf
				@method('PUT')
		</div>

		<div class="row">
			<div class="col-md-3">
				<label for="address" class="text-success">Address</label>
			</div>
			<div class="col-md-8">
				<textarea class="form-control {{$errors->first('address')? "is-invalid": ""}} " name="address" id="address" cols="10" rows="5">
					{{$user['address']}}
				</textarea>
				<div class="invalid-feedback">
					{{$errors->first('address')}}
				</div>
			</div>
		</div>

	<br>

		<div class="row">
			<div class="col-md-3">
				<label for="phone" class="text-success">Phone</label>
			</div>
			<div class="col-md-8">
				<input class="form-control {{$errors->first('phone')? "is-invalid": ""}} " type="number" name="phone" id="phone" value="{{ old('phone') ? old('phone') : $user['phone']}}">
				<div class="invalid-feedback">
					{{$errors->first('phone')}}
				</div>
			</div>
		</div>

	<br>

		<div class="row">
			<div class="col-md-3">
				<label for="status" class="text-success">Status</label>
			</div>
			<div class="col-md-8">
				<div class="custom-control custom-radio custom-control-inline">

					<input {{ $user['status'] == "ACTIVE" ? 'checked':'' }} type="radio" name="status" id="active" value="ACTIVE" class="custom-control-input">
					<label class="custom-control-label" for="active">ACTIVE</label>

				</div>

				<div class="custom-control custom-radio custom-control-inline">

					<input  {{ $user['status'] == "INACTIVE" ? 'checked':'' }} type="radio" name="status" id="inactive" value="INACTIVE" class="custom-control-input">
					<label class="custom-control-label" for="inactive">INACTIVE</label>

				</div>
			</div>
		</div>

	<br>

		<div class="row">
			<div class="input-group mb-3">
				<div class="col-md-3 text-success">
					Avatar
				</div>
				<div class="col-md-8">

					<img src=" {{ asset('storage/'.$user['avatar'])}} " alt="avatar" class="img-thumbnail" height="150px" width="150px">
					<br><br>
				<div class="custom-file">
					
					<label class="custom-file-label" for="inputGroupFile01">Avatar</label>
					<input type="file" class="custom-file-input {{$errors->first('avatar')? "is-invalid": ""}} " name="avatar" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="{{ old('avatar') ? old('avatar') : $user['avatar']}}">
						<div class="invalid-feedback">
							{{$errors->first('avatar')}}
						</div>
					
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