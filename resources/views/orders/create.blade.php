@extends('templates.master')

@section('title', 'Create order')

@section('content')

	<div class="container">
		<h1>Add order</h1>
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
				<h5>Create a New Order</h5>
			</div>
			<div class="card-body">
				<div class="container text-success">

				<form class="form-group" action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="row">
					<div class="col-md-3">
						<label  for="invoice_number">Invoice Number</label>
					</div>
					<div class="col-md-8">
						<input class="form-control {{$errors->first('invoice_number') ? "is-invalid": ""}}" type="text" name="invoice_number" id="invoice_number">
						<div class="invalid-feedback">
							{{$errors->first('invoice_number')}}
						</div>
					</div>
				</div>

			<br>

				<div class="row">
					<div class="col-md-3">
						<label for="user_id">User</label>
					</div>
					<div class="col-md-8">
						<select name="user_id" id="user_id" class="form-control {{$errors->first('user_id') ? "is-invalid": ""}}">
							<option value="">Select User</option>
								@foreach ($orders as $user)
									<option value="{{$user->id}}">
										{{$user->username}}
									</option>
								@endforeach
						</select>
						<div class="invalid-feedback">
							{{$errors->first('user_id')}}
						</div>
					</div>
				</div>

			<br>
				
				<div class="row">
					<div class="col-md-3">
						<label for="total_price">Total Price</label>
					</div>
					<div class="col-md-8">
						<input type="number" name="total_price" id="total_price" class="form-control {{$errors->first('total_price') ? "is-invalid": ""}}">
						<div class="invalid-feedback">
							{{$errors->first('total_price')}}
						</div>
					</div>
				</div>
				
			<br>
				
				<div class="row">
					<div class="col-md-3">
						<label for="status">Status</label>
					</div>
					<div class="col-md-8">
						<select name="status" id="status" class="form-control {{$errors->first('status') ? "is-invalid": ""}}">
							<option value="">Select Status</option>
							<option value="SUBMIT">SUBMIT</option>
							<option value="PROCESS">PROCESS</option>
							<option value="FINISH">FINISH</option>
							<option value="CANCEL">CANCEL</option>
						</select>
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