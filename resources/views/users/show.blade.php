@extends('templates.master')

@section('title', 'Detail User')

@section('content')

	<h1>Detail User</h1>
	<hr>
	
	<div class="card bg-light border-success" style="max-width: 45%; margin: auto; min-height: 420px;">

		<div class="row" style="padding: 25px;">
			<div class="col-md-6 offset-sm-2 offset-md-3">
				<img src=" {{ asset('storage/'.$user['avatar']) }} " alt="Avatar" style="width:290px; height: 155px;" class="img-thumbnail">
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 text-center">
				<h3>{{ $user['username'] }} </h3>
			</div>
		</div>
		<hr>

	<br>

		<div class="row">
			<div class="col-md-3 offset-md-2 col-sm-3 offset-sm-5">
				<b>Email</b>
			</div>
			<div class="col-md-4 col-sm-4">
				{{ $user['email'] }}
			</div>
			<br>
		</div>

		<div class="row">
			<div class="col-md-3 offset-md-2 col-sm-3 offset-sm-2">
				<b>Address</b>
			</div>
			<div class="col-md-5 col-sm-4">
				{{ $user['address'] }}
			</div>		
		</div>

		<div class="row">
			<div class="col-md-3 offset-md-2 col-sm-3 offset-sm-2">
				Telp
			</div>
			<div class="col-md-4 col-sm-4">
				{{ $user['phone'] }}
			</div>		
		</div>

		<div class="row">
			<div class="col-md-3 offset-md-2 col-sm-3 offset-sm-2">
				<b>Status</b>
			</div>
			<div class="col-md-4 col-sm-4">
				<span class="badge {{ $user['status']  == "ACTIVE" ? "badge-primary" : "badge-danger" }}"> 
					{{ $user['status'] }} 
				</span>
			</div>
			<br>
		</div>

	</div>

@endsection