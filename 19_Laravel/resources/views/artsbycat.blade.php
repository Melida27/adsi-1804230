@if (isset($cat))
	<h3><img src="{{ asset($cat->image) }}" width="80px"></h3>
	<hr>
	@foreach ($arts as $art)
		@if ($cat->id == $art->category_id)
			<div class="card mb-3 ml-3" style="max-width: 350px; display: inline-block; max-height: 200px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="{{ asset($art->image) }}" class="card-img" width="200px" height="180px">
					</div>
					<div>
						<div class="card-body">
							<p class="card-text">
								<small class="text-muted">{{ $cat->name }}</small>
							</p>
							<h5>{{ $art->title }}</h5>
							<h5><i class="fas fa-dollar-sign"></i>{{$art->price}}</h5>
                            <button type="button" class="btn btn-outline-secondary btn-block"><i class="fa fa-plus-circle"></i> Comprar</button>
						</div>
					</div>
				</div>
			</div>
		@endif
	@endforeach
@else
	@foreach ($cats as $cat)
		<h3><img src="{{ asset($cat->image) }}" width="80px"></h3>
		<hr>
		@foreach ($arts as $art)
			@if ($cat->id == $art->category_id)
				<div class="card mb-3 ml-3" style="max-width: 350px; display: inline-block; max-height: 200px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="{{ asset($art->image) }}" class="card-img" width="200px" height="180px">
						</div>
						<div>
							<div class="card-body">
								<p class="card-text">
									<small class="text-muted">{{ $cat->name }}</small>
								</p>
								<h5>{{ $art->title }}</h5>
								<h5><i class="fas fa-dollar-sign"></i>{{$art->price}}</h5>
                                <button type="button" class="btn btn-outline-secondary btn-block"><i class="fa fa-plus-circle"></i> Comprar</button>
							</div>
						</div>
					</div>
				</div>
			@endif
		@endforeach
		<br>
		<br>
	@endforeach
@endif