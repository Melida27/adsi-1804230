<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Filtros</h1>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
						<input type="number" class="form-control" name="age" placeholder="Ingresar la edad">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Ingresar correo electrónico">
					</div>
					<div class="form-group">
						<input type="url" class="form-control" name="url" placeholder="Ingresar dirección de Internet">
					</div>
					<div class="form-group">
						<input type="submit" value="Aplicar Filtros" class="btn btn-success">
					</div>
				</form>
			</div>
		</section>
	</main>

	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>