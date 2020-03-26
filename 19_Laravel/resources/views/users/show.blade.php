<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar Usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class="mt-2"><i class="fa fa-search"></i>Consultar Usuario</h1>
				<hr>
				<a href="{{ url('users') }}" class="btn btn-success">
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
						<th>Fecha de Nacimiento: </th>
						<td>{{ $user->birthdate }}</td>
					</tr>
					<tr>
						<th>Género: </th>
						<td>{{ $user->gender }}</td>
					</tr>
					<tr>
						<th>Dirección: </th>
						<td>{{ $user->address }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>	
</body>
</html>