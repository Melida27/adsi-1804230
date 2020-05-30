@extends('layouts.app')
@section('title', 'Consultar Artículo')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1 class="mt-2"><i class="fa fa-search"></i> Consultar Artículo</h1>
				<hr>
				<a href="{{ url('myarticles') }}" class="btn btn-custom">
					<i class="fa fa-file"></i> 
					Ir a Mis Artículos
				</a>
				<br>
				<br>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
							<img class="rounded-circle img-thumbnail" src="{{ asset($art->image) }}" style="width: 14rem; height: 14rem;">
						</td>
					</tr>

					<tr>
						<th>Título: </th>
						<td>{{ $art->title }}</td>
					</tr>

					<tr>  
						<th>Descripción: </th>
						<td>{{ $art->content }}</td>
					</tr>

					<tr>  
						<th>Categoría: </th>
						<td>
							<img class="rounded-circle img-thumbnail" src="{{ asset($art->category->image) }}" width="60px">
						</td>
					</tr>

					<tr>
						<th>Importante: </th>
						<td class="d-none d-sm-table-cell">
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
					</tr>

					<tr>
						<th>Price: </th>
						<td>{{ $art->price }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>	
@endsection