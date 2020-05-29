@extends('layouts.app')
@section('title', 'Editar Artículo')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class="mt-2"><i class="fa fa-pen"></i> Editar Artículo</h1>
				<hr>
				<a href="{{ url('articles') }}" class="btn btn-custom">
					<i class="fa fa-file"></i>
					Ir a lista Artículos
				</a>
				<hr>
				{{-- @if ($errors->any())
					<ul class="alert alert-danger alert-dismissible fade show">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						@foreach ($errors->all() as $message)
							<li>{{ $message }}</li>	
						@endforeach
					</ul>
				@endif --}}
				<form action="{{ url('articles/'.$art->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{ $art->id }}">
					{{-- **************************************************************************************** --}}
					<div class="form-group">
						<label for="title">Título</label>
						<input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" 
						value="{{ old('name', $art->title) }}">

						@error('title')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- ****************************************************************************************** --}}
					
					<div class="form-group">
						<label for="content">Contenido</label>
						<textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Contenido">{{ old('content', $art->content) }}</textarea>

						@error('content')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- ************************************************************************************** --}}

					<div class="form-group">
						<button class="btn btn-block btn-custom btn-upload" type="button">
							<i class="fa fa-upload"></i>
							Seleccionar Imágen
						</button>
						<input type="file" name="image" id="photo" class="d-none" accept="image/*">
						<br>
						<div class="text-center @error('image') is-invalid @enderror">
							<img id="preview" class="img-thumbnail" src="{{ asset($art->image) }}" width="120px">
						</div>

						@error('image')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- **************************************************************************************** --}}

					<div class="form-group">
						<select name="user_id" class="form-control  @error('user_id') is-invalid @enderror">
							<option value="">Seleccione  Usuario...</option>
							@foreach ($users as $user)
								<option value="{{ $user->id }}" @if (old('user_id', $art->user_id) == $user->id) selected @endif>{{ $user->fullname }}</option>
							@endforeach
						</select>

						@error('user_id')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					{{-- **************************************************************************************** --}}

					<div class="form-group">
						<select name="category_id" class="form-control  @error('category_id') is-invalid @enderror">
							<option value="">Seleccione Categoría...</option>
							@foreach ($cats as $cat)
								<option value="{{ $cat->id }}" @if (old('category_id', $art->category_id) == $cat->id) selected @endif>{{ $cat->name }}</option>
							@endforeach
						</select>

						@error('category_id')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- ***************************************************************************************** --}}

					<div class="form-group">
						<select name="slider" class="form-control  @error('slider') is-invalid @enderror">
							<option value="">Seleccione Importante...</option>
							<option value="1" @if (old('slider', $art->slider) == 1) selected @endif>Sí</option>
							<option value="2" @if (old('slider', $art->slider) == 2) selected @endif>No</option>
						</select>

						@error('slider')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- ********************************************************************************* --}}

					<div class="form-group">
						<input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $art->price) }}" placeholder="Precio" min="1" max="100">

						@error('price')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- ********************************************************************************* --}}

					<div class="form-group">
						<button type="submit" class="btn btn-custom">
							<i class="fa fa-save"></i>
							Modificar
						</button>
						<button type="reset" class="btn btn-dark">
							<i class="fa fa-eraser"></i>
							Limpiar
						</button>
					</div>	
				</form>
			</div>
		</div>
	</div>
@endsection