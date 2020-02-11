<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sobreescritura</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-5">
				<h1 class="h3 text-center">Sobreescritura Constructor</h1>
				<hr>
				<?php 
					class Vehicle{
						protected $brand;
						protected $refer;
						private $color;

						public function __construct($brand, $refer){
							$this->brand = $brand;
							$this->refer = $refer;
						}
					}

					class Auto extends Vehicle{
						public function __construct($brand, $refer, $color){
							parent::__construct($brand, $refer);
							$this->color = $color;
						}

						public function getVehicle(){
							echo "<ul class='list-group'>";
							echo "<li class='list-group-item'><strong>Marca: </strong>".$this->brand."</li>";
							echo "<li class='list-group-item'><strong>Referencia: </strong>".$this->refer."</li>";
							echo "<li class='list-group-item'><strong>Color: </strong>".$this->color."</li><br>";
							echo "</ul>";
						} 
					}

					$vh = new Auto('Audi', 'A5 SportBack', 'Negro');
					$vh->getVehicle();

					$vh = new Auto('Audi', 'A5 Coupe', 'Rojo');
					$vh->getVehicle();

					$vh = new Auto('Audi', 'A5 Sedán', 'Blanco');
					$vh->getVehicle();
				?>
			</div>
		</div>
	</div>
</body>
</html>