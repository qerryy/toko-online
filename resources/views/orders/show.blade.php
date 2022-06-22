@extends('templates.master')

@section('title', 'Detail Order')

@section('content')

	<h1>Detail Order</h1>
	<hr>
	
	<div class="card bg-light border-success" style="max-width: 70%; margin: auto; min-height: 250px;">
		<div class="row" style="padding: 35px;">
			<div class="col-md-12 text-center">
				<h3>Invoice Number : {{ $orders['invoice_number'] }} </h3>
			</div>
		</div>
		<hr>

		<br>

		<div class="row">
			<div class="col-md-3 offset-md-3 col-sm-3 offset-sm-2">
				<b>User</b>
			</div>
			<div class="col-md-4 col-sm-4">
				&nbsp;{{ $orders->user->username }}
			</div>
			<br>
		</div>
		<div class="row">
			<div class="col-md-3 offset-md-3 col-sm-3 offset-sm-2">
				<b>Total Payment</b>
			</div>
			<div class="col-md-4 col-sm-4">
				&nbsp;{{ $orders['total_price'] }}
			</div>
			<br>
		</div>

		<div class="row">
			<div class="col-md-3 offset-md-3 col-sm-3 offset-sm-2">
				<b>Status</b>
			</div>
			<div class="col-md-4 col-sm-4">

				@if($orders->status == "SUBMIT")
					<span class="badge badge-primary">{{ $orders['status'] }}</span>
				@elseif($orders->status == "PROCESS")
					<span class="badge badge-warning">{{ $orders['status'] }}</span>
				@elseif($orders->status == "FINISH")
					<span class="badge badge-success">{{ $orders['status'] }}</span>
				@else
					<span class="badge badge-danger">{{ $orders['status'] }}</span>
				@endif
				
			</div>
			<br>
		</div>

	</div>

@endsection