<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Categorías General</title>
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
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Imágen</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td>{{ $category->description }}</td>	
					<td>
						<img src="{{ public_path().'/'.$category->image }}" width="40px">
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>