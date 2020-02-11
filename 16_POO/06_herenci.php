<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Herencia</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-5">
				<h1 class="h3 text-center">Herencia</h1>
				<hr>
				<?php
					class Operacion {
						protected $name;
						protected $val;
						protected $cant;
						protected $result;

						public function __construct($name, $val, $cant){
							$this->name = $name;
							$this->val = $val;
							$this->cant = $cant;
						}

						public function showProduct() {
							echo "<ul class='list-group'>";
							echo "<li class='list-group-item bg-secondary text-center'><strong>Producto: </strong>".$this->name."</li>";
							echo "<li class='list-group-item'><strong>Valor Unitario: </strong>".$this->val."</li>";
							echo "<li class='list-group-item'><strong>Cantidad: </strong>".$this->cant."</li>";
							$this->calcular();
							echo "<li class='list-group-item'><strong>Valor Total: </strong>".$this->result."</li>";
							echo "</ul><br>";
						}
					}

					class Producto extends Operacion {
						public function calcular() {
							$this->result = $this->val * $this->cant;
						}
					}

					$pro = new Producto('Arroz', 1600, 10);
					$pro->showProduct();

					$pro1 = new Producto('Frijol', 1950, 3);
					$pro1->showProduct();

					$pro2 = new Producto('Salchicha', 2500, 9);
					$pro2->showProduct();

					$pro3 = new Producto('Chicharrón', 7000, 3);
					$pro3->showProduct();
				?>
			</div>
		</div>
	</div>
</body>
</html>