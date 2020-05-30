@if (isset($cat))
	<h3><img src="{{ asset($cat->image) }}" width="80px"></h3>
	<hr>
	@foreach ($arts as $art)
		@if ($cat->id == $art->category_id)
			<div>
				{{ $art->title }}
			</div>
		@endif
	@endforeach
@else
	@foreach ($cats as $cat)
		<h3><img src="{{ asset($cat->image) }}" width="80px"></h3>
		<hr>
		@foreach ($arts as $art)
			@if ($cat->id == $art->category_id)
				<div>
					{{ $art->title }}
				</div>
			@endif
		@endforeach
	@endforeach
@endif