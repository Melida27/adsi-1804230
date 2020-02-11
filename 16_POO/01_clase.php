<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clase (Métodos/Atributos)</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 mt-5">
				<h1 class="h3 text-center">Clase (Átributos/Métodos)</h1>
				<hr>
				<?php
					// Clase
					class VideoGame {
						// Atributos (Características Propias del Objeto)
						public $name; // Nombre del VideoJuego
						public $platform; // Plataforma - Consola
						public $price; // Precio venta
						public $year; // Año de lanzamiento

						// Métodos(Acciones-Lógica);
						public function setAttributes($name, $platform, $price, $year){
							$this->name = $name;
							$this->platform = $platform;
							$this->price = $price;
							$this->year = $year;
						}

						public function getAttributes(){
							return $this->name." - ".
							$this->platform." - ".
							$this->price." - ".
							$this->year;
						}
					}

					$vg1 = new VideoGame; // Crear objeto
					$vg1->setAttributes('Pokemon Espada', 'Nintendo Switch', 50, 2019);
					echo $vg1->getAttributes();

					echo "<hr>";

					$vg2 = new VideoGame; // Crear objeto
					$vg2->setAttributes('Mario Oddysey', 'Nintendo Switch', 40, 2017);
					echo "El nombre del video juego es: ".$vg2->name;
				?>
			</div>
		</div>
	</div>
</body>
</html>
