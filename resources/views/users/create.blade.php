@extends('templates.master')

@section('title', 'Create User')

@section('content')

	<div class="container">
	<h1>Add User</h1>
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
				<h5>Create a New User</h5>
			</div>
			<div class="card-body">
				<div class="container text-success">

				<form class="form-group" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="row">
					<div class="col-md-3">
						<label  for="username">Username</label>
					</div>
					<div class="col-md-8">
						<input class="form-control {{$errors->first('username')? "is-invalid": ""}} " type="text" name="username" id="username" value="{{ old('username') }}">
						<div class="invalid-feedback">
							{{$errors->first('username')}}
						</div>
					</div>
				</div>

			<br>
				<div class="row">
					<div class="col-md-3">
						<label for="email">Email</label>
					</div>
					<div class="col-md-8">
						<input class="form-control {{$errors->first('email')? "is-invalid": ""}} " type="email" name="email" id="email" value=" {{ old('email') }} ">
						<div class="invalid-feedback">
							{{$errors->first('email')}}
						</div>
					</div>
				</div>

			<br>

				<div class="row">
					<div class="col-md-3">
						<label for="password">Password</label>
					</div>
					<div class="col-md-8">
						<input type="password" class="form-control {{$errors->first('password')? "is-invalid": ""}} " name="password" id="password">
						<div class="invalid-feedback">
							{{$errors->first('password')}}
						</div>
					</div>
				</div>

			<br>

				<div class="row">
					<div class="col-md-3">
						<label for="password_confirmation">Password Confirmation</label>
					</div>
					<div class="col-md-8">
						<input type="password" class="form-control {{$errors->first('password_confirmation')? "is-invalid": ""}} " name="password_confirmation" id="password_confirmation">
						<div class="invalid-feedback">
							{{$errors->first('password_confirmation')}}
						</div>
					</div>
				</div>

			<br>

				<div class="row">
					<div class="col-md-3">
						<label for="address">Address</label>
					</div>
					<div class="col-md-8">
						<textarea class="form-control {{$errors->first('address')? "is-invalid": ""}}" name="address" id="address" cols="20" rows="4">
							{{old('address')}}
						</textarea>
						<div class="invalid-feedback">
							{{$errors->first('address')}}
						</div>
					</div>
				</div>

			<br>

				<div class="row">
					<div class="col-md-3">
						<label for="phone">Phone</label>
					</div>
					<div class="col-md-8">
						<input type="number" name="phone" id="phone" value=" {{old('phone')}} " class="form-control {{$errors->first('phone')? "is-invalid": ""}} ">
						<div class="invalid-feedback">
							{{$errors->first('phone')}}
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
							<div class="custom-file">
								<input type="file" class="custom-file-input {{$errors->first('avatar')? "is-invalid": ""}} " name="avatar" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
								<div class="invalid-feedback">
									{{$errors->first('avatar')}}
								</div>
								<label class="custom-file-label" for="inputGroupFile01">Avatar</label>
							</div>
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