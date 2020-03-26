<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class="mt-2"><i class="fa fa-users"></i> Lista de Usuarios</h1>
				<hr>
				<a href="{{ url('users/create') }}" class="btn btn-success">
					<i class="fa fa-plus"></i> 
					Adicionar Usuario
				</a>
				<br>
				<hr>
				@if (session('message'))
					{{ session('message') }}
					<br>
				@endif
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Nombre Completo</th>
							<th>Correo Electrónico</th>
							<th>Teléfono</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td>{{ $user->fullname }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->phone }}</td>
								<td>
									<a href="{{ url('users/'.$user->id )}}" class="btn btn-sm btn-primary">
										<i class="fa fa-search"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>	
</body>
</html>