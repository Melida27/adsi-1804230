@extends('layouts.app')
@section('title', 'Consultar Usuario')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class="mt-2"><i class="fa fa-search"></i> Consultar Usuario</h1>
				<hr>
				<a href="{{ url('users') }}" class="btn btn-custom">
					<i class="fa fa-users"></i> 
					Ir a lista de Usuarios
				</a>
				<br>
				<br>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
							<img class="rounded-circle img-thumbnail" src="{{ asset($user->photo) }}" style="width: 14rem; height: 14rem;">
						</td>
					</tr>

					<tr>
						<th>Nombre Completo: </th>
						<td>{{ $user->fullname }}</td>
					</tr>

					<tr>  
						<th>Correo Electrónico: </th>
						<td>{{ $user->email }}</td>
					</tr>

					<tr>
						<th>Teléfono: </th>
						<td>{{ $user->phone }}</td>
					</tr>

					<tr>
						<th>Fecha de Nacimiento:</th>
						<td>
							{{ $user->birthdate }}
							&nbsp; | &nbsp;
							@php use \Carbon\Carbon; @endphp
							{{ Carbon::createFromDate($user->birthdate)->diff(Carbon::now())->format('%y años, %m meses y %d días') }}
						</td>
					</tr>

					<tr>
						<th>Genero:</th>
						<td>
							@if ($user->gender == "Female")
							Mujer
							@else
							Hombre    
							@endif
						</td>
					</tr>

					<tr>
						<th>Dirección: </th>
						<td>{{ $user->address }}</td>
					</tr>

					<tr>
						<th>Estado:</th>
						<td>
							@if ($user->status == "1")
								<span class="btn btn-success">Activo</span>
							@else
								<span class="btn btn-danger">Inactivo</span>    
							@endif
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>	
@endsection