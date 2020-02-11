<?php 
	include '../config/app.php';
	include '../config/db.php'
?>

<?php include '../includes/header.php'; ?>

			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-muted">
					<i class="fa fa-plus fa-2x"></i>
					ADICIONAR GIMNASIO
				</h1>
				<hr>
				<nav area-label = "breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?php echo $url; ?>">
								<i class="fa fa-home"></i>
								Inicio
							</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo $url; ?>gyms/">
								<i class="fa fa-building"></i>
								Módulo Gimmasios
							</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Adicionar Gimnasio
						</li>
					</ol>
				</nav>
				
				<br><br>
				
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Nombre: </label>
						<input class="form-control" type="text" name="name" required>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-success">
							<i class="fa fa-save"></i>
							Crear Gimnasio
						</button>
						<button type="submit" class="btn btn-light">
							<i class="fa fa-eraser"></i>
							Limpiar formulario
						</button>
					</div>
				</form>
				<?php 
					if ($_POST) {
						$name       = mysqli_real_escape_string($con, $_POST['name']);
						$sql = "INSERT INTO gyms VALUES(DEFAULT, '$name')";

						if (mysqli_query($con, $sql)) {
							$_SESSION['message'] = "El gimnasio ".$name." fué adicionado con éxito!";
							echo "<script>window.location.replace('index.php');</script>";
						}else{
							echo "Error".mysqli_error($con);
						}
					}
				?>
			</div>	

<?php include '../includes/footer.php'; ?>