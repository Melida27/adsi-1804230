<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Usuario</title>
</head>
<body>
	<h1>Crear Usuario</h1>
	<hr>
	<a href="{{ url('users') }}">Ir a lista Usuarios</a>
	<hr>
	<form action="{{ url('users') }}" method="post">
		@csrf
		<input type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
		<br>
		<input type="text" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">
		<br>
		<input type="text" name="phone" value="{{ old('phone') }}" placeholder="Teléfono">
		<br>
		<input type="date" name="birthdate" value="{{ old('birthdate') }}" placeholder="Fecha de Nacimiento">
		<br>
		<input type="text" name="gender" value="{{ old('gender') }}" placeholder="Género">
		<br>
		<input type="text" name="address" value="{{ old('address') }}" placeholder="Dirección">
		<br>
		<input type="password" name="password" value="{{ old('password') }}" placeholder="Contraseña">

		<button type="submit"> Guardar </button>
	</form>
</body>
</html>