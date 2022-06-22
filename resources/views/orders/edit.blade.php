@extends('templates.master')

@section('title', 'Edit Order')

@section('content')

	<div class="container">
		<h1>Edit Order</h1>
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
			<h5> {{ $orders['invoice_number'] }} </h5>
		</div>

		<div class="card-body">

		<div class="container text-success">
			<form action="{{ route('orders.update', $orders['id']) }}" method="POST" class="form-group" enctype="multipart/form-data">
			@csrf
			@method('PUT')
		</div>

		<div class="row">
				<div class="col-md-3">
					<label class="text-success" for="invoice">Invoice Number</label>
				</div>
				<div class="col-md-8">					
					<input class="form-control {{$errors->first('invoice_number')? "is-invalid": ""}}" type="text" name="invoice_number" id="invoice_number" value="{{ old('invoice_number') ? old('invoice_number') : $orders['invoice_number'] }}">
					<div class="invalid-feedback">
						{{$errors->first('invoice_number')}}
					</div>
				</div>
			</div>

	<br>

			<div class="row">
				<div class="col-md-3">
					<label class="text-success" for="user_id">User</label>
				</div>
				<div class="col-md-8">
					<select name="user_id" id="user_id" class="form-control {{$errors->first('user_id')? "is-invalid": ""}}">

					<option value="">Select User</option>

						@foreach($users as $user)
							<option value=" {{ $user->id }} " {{ $orders->user_id == $user->id ? "selected":''}}>
								{{ $user->username }}
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
					<label for="total_price" class="text-success">Total Payment</label>
				</div>
				<div class="col-md-8">
					<input class="form-control {{$errors->first('total_price')? "is-invalid": ""}}" type="text" name="total_price" id="total_price" value="{{ $orders['total_price'] }}">
					<div class="invalid-feedback">
						{{$errors->first('total_price')}}
					</div>
				</div>
			</div>

		<br>

			<div class="row">
				<div class="col-md-3">
					<label for="status" class="text-success">Status</label>
				</div>
				<div class="col-md-8">
					<select name="status" id="status" class="form-control {{$errors->first('status') ? "is-invalid": ""}}">
						<option value="">Select Status</option>
						<option {{old('status', $orders->status)=="SUBMIT"? 'selected':''}} value="SUBMIT">SUBMIT</option>
						<option {{old('status', $orders->status)=="PROCESS"? 'selected':''}} value="PROCESS">PROCESS</option>
						<option {{old('status', $orders->status)=="FINISH"? 'selected':''}} value="FINISH">FINISH</option>
						<option {{old('status', $orders->status)=="CANCEL"? 'selected':''}} value="CANCEL">CANCEL</option>
					</select>
					<div class="invalid-feedback">
						{{$errors->first('status')}}
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