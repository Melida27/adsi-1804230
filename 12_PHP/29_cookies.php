<?php 
	//Crear Cookie
	setcookie('nombre', 'Melida', time()+60);
	//Eliminar Cookie:
	//setcookie('nombre', 'Melida', time()-60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Cookies</h1>
				<hr>
				<div class="jumbotron">
					<small>
						Ver cookies: Ir a la consola/Application/Cookies
					</small>
					<?php if (isset($_COOKIE['nombre'])): ?>
						<p class="lead">
							<strong>Nombre: </strong>
							<?php echo $_COOKIE['nombre'] ?>
						</p>
					<?php else: ?>
						<p class="lead">
							Bienvenido Visitante!
						</p>
					<?php endif ?>
				</div>
			</div>
		</section>
	</main>

	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>