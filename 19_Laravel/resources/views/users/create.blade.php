<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class="mt-2"><i class="fa fa-plus"></i> Adicionar Usuario</h1>
				<hr>
				<a href="{{ url('users') }}" class="btn btn-success">
					<i class="fa fa-users"></i>
					Ir a lista Usuarios
				</a>
				<hr>
				<form action="{{ url('users') }}" method="post">
					@csrf
					<div class="form-group">
						<label for="fullname">Nombre Completo</label>
						<input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}">
					</div>
					
					<div class="form-group">
						<label for="email">Correo Electrónico</label>
						<input type="email" name="email" class="form-control" value="{{ old('email') }}">
					</div>
					
					<div class="form-group">
						<label for="phone">Teléfono</label>
						<input type="text" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Teléfono">
					</div>
					
					<div class="form-group">
						<label for="birthdate">Fecha de Nacimiento</label>
						<input type="date" name="birthdate" class="form-control" value="{{ old('birthdate') }}">
					</div>
					
					<div class="form-group">
						<label for="gender">Género</label>
						<select name="gender" class="form-control">
							<option value="">Seleccione...</option>
							<option value="male" @if(old('gender')=='male') selected @endif>Male</option>
							<option value="female" @if(old('gender')=='female') selected @endif>Female</option>
						</select>
					</div>

					<div class="form-group">
						<label for="address">Dirección</label>
						<input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="Dirección">
					</div>
					
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Contraseña">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-save"></i>
							Guardar
						</button>
						<button type="reset" class="btn btn-dark">
							<i class="fa fa-eraser"></i>
							Limpiar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>