<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-9 offset-md-1">
				<h1 class="mt-5 mb-4"><i class="fa fa-users"></i> Welcome!</h1>
				<hr>
				<a href="?method=add" class="btn btn-success mb-3">
					<i class="fa fa-plus"></i>
					Adicionar Usuario
				</a>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Nombre Completo</th>
							<th class="d-none d-sm-table-cell">Fecha Nacimiento</th>
							<th class="d-none d-sm-table-cell">Correo Electrónico</th>
							<th>Rol</th>
							<th>Acciones</th>
						</tr>
					</thead>

					<tbody>
						<?php 
							while($row = mysqli_fetch_array($data)){
						?>
								<tr>
									<td><?php echo $row['names'] ?></td>
									<td class="d-none d-sm-table-cell"><?php echo $row['birthdate'] ?></td>
									<td class="d-none d-sm-table-cell"><?php echo $row['email'] ?></td>
									<td><?php echo $row['role'] ?></td>
									<td>
										<a href="?method=show&id=<?php echo $row['id'] ?>" class="btn btn-light btn-sm">
											<i class="fa fa-search"></i>
										</a>
										<a href="?method=edit&id=<?php echo $row['id'] ?>" class="btn btn-light btn-sm">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="javascript:;" data-id="<?php echo $row['id'] ?>" class="btn btn-danger btn-sm btn-delete">
											<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>
							<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="public/js/jquery-3.4.1.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/sweetalert2.all.min.js"></script>

	<script>
		$(document).ready(function(){
			$('.btn-delete').click(function(event){
				$id = $(this).attr('data-id');
				Swal.fire({
					title: '¿Esta usted seguro?',
					text: "¿Desea eliminar este registro?",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#218838',
					cancelButtonColor: 'rgb(221, 51, 51)',
					cancelButtonText: 'Cancelar',
					confirmButtonText: 'OK'
				}).then((result) => {
					if (result.value) {
						window.location.replace('?method=delete&id='+$id);
					}
				})
			});
		});
	</script>
</body>
</html>

<!-- $('.btn-delete').click(function(event){
				$id = $(this).attr('data-id');
				Swal.fire({
					title: '¿Esta usted seguro?',
					text: "¿Desea eliminar este registro?",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#218838',
					cancelButtonColor: 'rgb(221, 51, 51)',
					cancelButtonText: 'Cancelar',
					confirmButtonText: 'OK'
				}).then((result) => {
					if (result.value) {
						window.location.replace('?method=delete&id='+$id);
					}
				})
			}); -->