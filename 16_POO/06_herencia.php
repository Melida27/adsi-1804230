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
					class ArithmeticOperation{
						protected $n1;
						protected $n2;
						protected $rs;

						public function __construct($n1, $n2){
							$this->n1 = $n1;
							$this->n2 = $n2;
						}
					}

					class Sum extends ArithmeticOperation{
						public function calculate(){
							return $this->rs = "La suma de ".$this->n1." + ".$this->n2." = ".($this->n1+$this->n2);
						}
					}

					class Subtraction extends ArithmeticOperation{
						public function calculate(){
							return $this->rs = "La resta de ".$this->n1." - ".$this->n2." = ".($this->n1-$this->n2);
						}
					}

					class Division extends ArithmeticOperation{
						public function calculate(){
							return $this->rs = "La división de ".$this->n1." / ".$this->n2." = ".($this->n1/$this->n2);
						}
					}

					class Multiplication extends ArithmeticOperation{
						public function calculate(){
							return $this->rs = "La multiplicación de ".$this->n1." x ".$this->n2." = ".($this->n1*$this->n2);
						}
					}

					class Pow extends ArithmeticOperation{
						public function calculate(){
							return $this->rs = "La potencia de ".$this->n1." ^ ".$this->n2." = ".Pow($this->n1,$this->n2);
						}
					}

					$op = new Sum(7, 23);
					echo "<div class='alert alert-info'>";
					echo $op->calculate();
					echo "</div>";

					$op = new Subtraction(89, 45);
					echo "<div class='alert alert-info'>";
					echo $op->calculate();
					echo "</div>";

					$op = new Division(50, 5);
					echo "<div class='alert alert-info'>";
					echo $op->calculate();
					echo "</div>";


					$op = new Multiplication(56, 9);
					echo "<div class='alert alert-info'>";
					echo $op->calculate();
					echo "</div>";

					$op = new Pow(5, 3);
					echo "<div class='alert alert-info'>";
					echo $op->calculate();
					echo "</div>";
				?>
			</div>
		</div>
	</div>
</body>
</html>