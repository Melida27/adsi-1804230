@forelse ($arts as $art)
<tr>
	<td>{{ $art->title }}</td>
	
	<td>
		<img src="{{ asset($art->image) }}" width="60px">
	</td>

	<td class="d-none d-sm-table-cell">
		<img src="{{ asset($art->category->image) }}" width="60px">
	</td>

	<td>
		<a href="{{ url('articles/'.$art->id )}}" class="btn btn-sm btn-custom">
			<i class="fa fa-search"></i>
		</a>

		<a href="{{ url('articles/'.$art->id.'/edit/') }}" class="btn btn-sm btn-custom">
			<i class="fa fa-pen"></i>
		</a>

		<form action="{{ url('articles/'.$art->id) }}" method="post" style="display: inline-block;">
			@csrf
			@method('delete')
			<button type="button" class="btn btn-sm btn-custom-danger btn-delete">
				<i class="fa fa-trash"></i>
			</button>
		</form>
	</td>
</tr>
@empty
	<tr>
		<td colspan="4">
			No hay artículos con ese nombre!!
		</td>
	</tr>
@endforelse