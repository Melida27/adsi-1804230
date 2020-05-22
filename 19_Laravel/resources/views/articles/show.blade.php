@extends('layouts.app')
@section('title', 'Consultar Artículo')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1 class="mt-2"><i class="fa fa-search"></i> Consultar Artículo</h1>
				<hr>
				<a href="{{ url('articles') }}" class="btn btn-custom">
					<i class="fa fa-file"></i> 
					Ir a lista Artículos
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
						<th>Usuario: </th>
						<td>{{ $art->user->fullname }}</td>
					</tr>

					<tr>  
						<th>Categoría: </th>
						{{-- <td>{{ $art->category->name }}</td> --}}
						<td>
							<img class="rounded-circle img-thumbnail" src="{{ asset($art->category->image) }}" width="60px">
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>	
@endsection