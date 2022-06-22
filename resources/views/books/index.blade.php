@extends('templates.master')

@section('title', 'List Book')

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
	<h1>Book</h1>
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
			<div class="col-md-2">
				<a href=" {{ route('books.create') }} " class="btn btn-outline-success">
					<span data-feather="plus-square"></span> Add book<span class="sr-only">(current)</span>
				</a>
			</div>
			<div class="col-md-8">
				<form action=" {{ route('books.search') }} " method="get">
					<div class="input-group custom-search-form">
						<input type="text" name="search" placeholder="Filter by Title" class="form-control">
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
						<th scope="col">Title</th>
						<th scope="col">Author</th>
						<th scope="col">Price</th>
						<th scope="col">Cover</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($books as $book)
					<tr>
						<th>{{ $book['id'] }}</th>
						<td>{{ $book['title'] }}</td>
						<td>{{ $book['author'] }}</td>
						<td>{{ $book['price'] }}</td>
						<td>
							<img src="{{ asset('storage/'.$book['cover']) }}" alt="Cover" width="100px" height="80px">
						</td>
						<td>
							<a href="{{ route('books.show', ['id'=>$book['id']]) }}" class="btn-sm btn-primary">
								<span data-feather="eye"></span> Detail<span class="sr-only">(current)</span>
							</a>
							<a href="{{ route('books.edit', ['id'=>$book['id']]) }}" class="btn-sm btn-success">
								<span data-feather="edit"></span> Edit<span class="sr-only">(current)</span>
							</a>
							<form class="d-inline" onsubmit="return confirm('Permanently Delete Book?')" action="{{ route('books.destroy', ['id'=>$book['id']]) }}" method="POST">
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

		<div class="pagination justify-content-center"> {{ $books->links() }} </div>

	</div>

@endsection