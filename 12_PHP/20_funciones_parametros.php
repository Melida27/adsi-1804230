<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones (Parámetros) </title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Funciones (Parámetros)</h1>
				<hr>

				<?php 
					function show_info($name, $description){
						echo '<h1 class="display-4">'.$name.'</h1>';
						echo '<p class="lead">'.$description.'</p>';
					}
				?>
				<div class="jumbotron jumbotron-fluid">
					<div class="container">
						<?php 
							$desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident dicta ex, asperiores nisi, itaque eveniet ducimus neque quas inventore ab fugiat quam eos minus beatae quibusdam temporibus assumenda at porro";
							show_info('Saitama Sensei', $desc); 
							show_info('Garou', 'One punch man season 2'); 
						?>
					</div>
				</div>
			</div>
		</section>
	</main>

	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>