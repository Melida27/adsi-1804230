@extends('layouts.app')
@section('title', 'Lista de Usuarios')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h1 class="mt-2"><i class="fa fa-users"></i> Lista de Usuarios</h1>
				<hr>
				<a href="{{ url('users/create') }}" class="btn btn-custom">
					<i class="fa fa-plus"></i> 
					Adicionar Usuario
				</a>

				<form action="{{ url('import/excel/users') }}" method="post" enctype="multipart/form-data" style="display: inline-block;">

					@csrf

					<input type="file" class="d-none" id="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
					<button type="button" class="btn btn-custom btn-excel">
						<i class="fa fa-file-excel"></i>
						Importar Usuarios
					</button>
				</form>

				<a href="{{ url('generate/pdf/users') }}" class="btn btn-custom">
					<i class="fa fa-file-pdf"></i> 
					Reporte PDF
				</a>

				<a href="{{ url('generate/excel/users') }}" class="btn btn-custom">
					<i class="fa fa-file-excel"></i> 
					Reporte Excel
				</a>
				
				@csrf
				<input type="hidden" id="tmodel" value="users">
				<input type="search" id="qsearch" class="form-search" autocomplete="off" placeholder="Buscar">
				
				<br>
				<hr>

				{{-- @if (session('message'))
					<div class="alert alert-success alert-dismissible fade show">
					  {{ session('message') }}
					  <button type="button" class="close" data-dismiss="alert">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				@endif --}}
				<div class="loader text-center d-none">
					<img src="{{ asset('imgs/loader.gif') }}" width="140px">
					<br>
					<br>
				</div>

				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th>Nombre Completo</th>
							<th class="d-none d-sm-table-cell">Correo Electrónico</th>
							<th>Teléfono</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody id="content">
						@foreach ($users as $user)
							<tr>
								<td>{{ $user->fullname }}</td>
								<td class="d-none d-sm-table-cell">{{ $user->email }}</td>
								<td>{{ $user->phone }}</td>
								<td>
									<a href="{{ url('users/'.$user->id )}}" class="btn btn-sm btn-custom">
										<i class="fa fa-search"></i>
									</a>

									<a href="{{ url('users/'.$user->id.'/edit/') }}" class="btn btn-sm btn-custom">
										<i class="fa fa-pen"></i>
									</a>

									<form action="{{ url('users/'.$user->id) }}" method="post" style="display: inline-block;">
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
				
				{{ $users->links() }}
			</div>
		</div>
	</div>
@endsection