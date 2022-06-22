@extends('templates.master')

@section('title', 'List Order')

@section('css')
	<style>
		body{
			padding-top: 30px;
		}
		th, td {
			padding: 10px;
			text-align: center;
		}
		td a{
			margin: 3px;
			align-content: center;
			color: white;
		}
		td a:hover{
			text-decoration: none;
		}
		td button{
			margin-top: 5px;
			cursor: pointer;
		}
		button{
			border: none;
		}
	</style>
@endsection

@section('content')

	<div class="container">
	<h1>Order</h1>
	<hr>

	@if (session('status'))
		<div class="alert alert-info alert-dismissible fade show" role="alert">
			<strong> {{ session('status') }} </strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif

		<div class="row">
			<div class="col-sm-2">
				<a href=" {{ route('orders.create') }} " class="btn btn-outline-success">
					<span data-feather="plus-square"></span> Add Order<span class="sr-only">(current)</span>
				</a>
			</div>
			<div class="col-md-8">
				<form action=" {{ route('orders.search') }} " method="get">
					<div class="input-group custom-search-form">
						<input type="text" name="search" placeholder="Filter by Invoice Number" class="form-control" id="search">
						<select name="search2" class="col-sm-2">
							<option value="">Any</option>
							<option value="SUBMIT">SUBMIT</option>
							<option value="PROCESS">PROCESS</option>
							<option value="FINISH">FINISH</option>
							<option value="CANCEL">CANCEL</option>
						</select>
						<span class="input-group-btn">&nbsp;
							<button class="btn btn-outline-dark" type="submit">Filter</button>
						</span>
					</div>
				</form>
			</div>
		</div>

	<br>

		<div class="tabel-responsive">
			<table class="table table-hover">
				<thead class="thead-dark">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Invoice Number</th>
						<th scope="col">Total Payment</th>
						<th scope="col">Status</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($orders as $order)
					<tr>
						<th>{{ $order['id'] }}</th>
						<td>{{ $order['invoice_number'] }}</td>
						<td>{{ $order['total_price'] }}</td>
						<td>
							@if($order->status == "SUBMIT")
								<span class="badge badge-primary">{{ $order['status'] }}</span>
							@elseif($order->status == "PROCESS")
								<span class="badge badge-warning">{{ $order['status'] }}</span>
							@elseif($order->status == "FINISH")
								<span class="badge badge-success">{{ $order['status'] }}</span>
							@else
								<span class="badge badge-danger">{{ $order['status'] }}</span>
							@endif
						</td>
						<td>
							<a href="{{ route('orders.show', ['id'=>$order['id']]) }}" class="btn-sm btn-primary">
								<span data-feather="eye"></span> Detail<span class="sr-only">(current)</span>
							</a>
							<a href="{{ route('orders.edit', ['id'=>$order['id']]) }}" class="btn-sm btn-success">
								<span data-feather="edit"></span> Edit<span class="sr-only">(current)</span>
							</a>
							<form class="d-inline" onsubmit="return confirm('Permanently Delete Order?')" action="{{ route('orders.destroy', ['id'=>$order['id']]) }}" method="POST">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn-sm btn-danger" value="Delete" name="submit">
									<span data-feather="trash"></span> Delete<span class="sr-only">(current)</span>
								</button>
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>

		<div class="pagination justify-content-center"> {{ $orders->links() }} </div>
		
	</div>

@endsection