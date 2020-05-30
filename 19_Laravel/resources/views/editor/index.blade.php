@extends('layouts.app')
@section('title', 'Mis Artículos')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h1 class="mt-2"><i class="fa fa-file"></i> Mis Artículos</h1>
				<hr>
				<a href="{{ url('editor/articles/create') }}" class="btn btn-custom">
					<i class="fa fa-plus"></i> 
					Adicionar Artículo
				</a>
				<hr>

				<table class="table table-striped table-hover mt-3">
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Imagen</th>
							<th class="d-none d-sm-table-cell">Categoría</th>
							<th>Importante</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody id="content">
						@foreach ($arts as $art)
							<tr>
								<td>{{ $art->title }}</td>
								
								<td>
									<img src="{{ asset($art->image) }}" width="60px">
								</td>

								<td class="d-none d-sm-table-cell">
									<img src="{{ asset($art->category->image) }}" width="60px">
								</td>

								<td>
									@if($art->slider == 1)
										<button class="btn btn-success">
											<i class="fas fa-check-circle"></i>
										</button>
									@else
										<button class="btn btn-dark">
											<i class="fas fa-times-circle"></i>
										</button>
									@endif
								</td>

								<td>
									<a href="{{ url('editor/articles/'.$art->id )}}" class="btn btn-sm btn-custom">
										<i class="fa fa-search"></i>
									</a>

									<a href="{{ url('editor/articles/'.$art->id.'/edit/') }}" class="btn btn-sm btn-custom">
										<i class="fa fa-pen"></i>
									</a>

									<form action="{{ url('editor/articles/'.$art->id) }}" method="post" style="display: inline-block;">
										@csrf
										@method('delete')
										<button type="button" class="btn btn-sm btn-custom-danger btn-delete">
											<i class="fa fa-trash"></i>
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				
				{{ $arts->links() }}
			</div>
		</div>
	</div>
@endsection