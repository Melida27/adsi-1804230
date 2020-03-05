<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1 class="mt-5 mb-4"><i class="fa fa-search"></i> Consultar Usuario</h1>
				<hr>
				<nav area-label = "breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="./">
								<i class="fa fa-home"></i>
								Inicio
							</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Consultar Usuario
						</li>
					</ol>
				</nav>
				<hr>
				<table class="table table-striped table-bordered table-hover">
					<?php 
						while ($row = mysqli_fetch_array($data)) {	
					?>
						<tr>
							<td colspan="2" class="text-center">
								<img class="rounded-circle img-thumbnail" src="<?php echo $row['photo']; ?>" style="width: 14rem; height: 14rem;">
							</td>
						</tr>

						<tr>
							<th>Nombre Completo</th>
							<td><?php echo $row['names']; ?></td>
						</tr>

						<tr>
							<th>Correo Electrónico</th>
							<td><?php echo $row['email']; ?></td>
						</tr>

						<tr>
							<th>Fecha Nacimiento</th>
							<td><?php echo $row['birthdate']; ?></td>
						</tr>

						<tr>
							<th>Estado</th>
							<td>
								<?php if ($row['status'] == "Active"): ?>
									<span class="badge badge-success">
										<i class="fa fa-check"></i> Activo
									</span>
								<?php else: ?>
									<span class="badge badge-danger">
										<i class="fa fa-times"></i> Inactivo
									</span>
								<?php endif ?>
							</td>
						</tr>
					<?php } ?>
				</table>	
			</div>
		</div>
	</div>
	
</body>
</html>