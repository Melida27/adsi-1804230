@extends('layouts.app')
@section('title', 'Consultar Categoria')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1 class="mt-2"><i class="fa fa-search"></i> Consultar Categoría</h1>
				<hr>
				<a href="{{ url('categories') }}" class="btn btn-custom">
					<i class="fa fa-list"></i> 
					Ir a lista de Categorías
				</a>
				<br>
				<br>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
							<img class="rounded-circle img-thumbnail" src="{{ asset($category->image) }}" style="width: 14rem; height: 14rem;">
						</td>
					</tr>

					<tr>
						<th>Nombre: </th>
						<td>{{ $category->name }}</td>
					</tr>

					<tr>  
						<th>Descripción: </th>
						<td>{{ $category->description }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>	
@endsection