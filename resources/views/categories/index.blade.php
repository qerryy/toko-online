@extends('templates.master')

@section('title', 'List Category')

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
	<h1>Category</h1>
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
				<a href=" {{ route('categories.create') }} " class="btn btn-outline-success">
					<span data-feather="plus-square"></span> Add Category
					<span class="sr-only">(current)</span>
				</a>
			</div>
			<div class="col-md-8">
				<form action=" {{ route('categories.search') }} " method="get">
					<div class="input-group custom-search-form">
						<input type="text" name="search" placeholder="Filter by Category" class="form-control">
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
						<th scope="col">Category Name</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($categories as $categori)
					<tr>
						<th>{{ $categori['id'] }}</th>
						<td>{{ $categori['category_name'] }}</td>
						<td>
							<a href="{{ route('categories.show', ['id'=>$categori['id']]) }}" class="btn-sm btn-primary">
								<span data-feather="eye"></span> Detail<span class="sr-only">(current)</span>
							</a>
							<a href="{{ route('categories.edit', ['id'=>$categori['id']]) }}" class="btn-sm btn-success">
								<span data-feather="edit"></span> Edit<span class="sr-only">(current)</span>
							</a>
							<form class="d-inline" onsubmit="return confirm('Permanently Delete Category?')" action="{{ route('categories.destroy', ['id'=>$categori['id']]) }}" method="POST">
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

		<div class="pagination justify-content-center"> {{ $categories->links() }} </div>
		
	</div>

@endsection