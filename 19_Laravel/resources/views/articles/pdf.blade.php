<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Artículos General</title>
	<style>
		table{
			border: 1px solid #999;
			border-collapse: collapse;
		}

		table th, table td{
			font-family: sans-serif;
			font-size: 12px;
			border: 1px solid #999;
			padding: 10px;
		}

		table th{
			background-color: #666;
			color: #fff;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Título</th>
				<th>Contenido</th>
				<th>Imágen</th>
				<th>Usuario</th>
				<th>Categoría</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($arts as $art)
				<tr>
					<td>{{ $art->id }}</td>
					<td>{{ $art->title }}</td>
					<td>{{ $art->content }}</td>

					<td>
						<img src="{{ public_path().'/'.$art->image }}" width="40px">
					</td>

					<td>{{ $art->user->fullname}}</td>
					<td>{{ $art->category->name}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>