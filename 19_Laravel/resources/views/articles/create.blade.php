@extends('layouts.app')
@section('title', 'Crear Artículo')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class="mt-2"><i class="fa fa-plus"></i> Adicionar Artículo</h1>
				<hr>
				<a href="{{ url('articles') }}" class="btn btn-custom">
					<i class="fa fa-list"></i>
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

				<form action="{{ url('articles') }}" method="post" enctype="multipart/form-data">
					@csrf
					{{-- ********************************************************************************************************* --}}
					<div class="form-group">
						<label for="title">Título</label>
						<input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" value="{{ old('title') }}">

						@error('title')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- ********************************************************************************************************* --}}
					
					<div class="form-group">
						<label for="content">Descripción</label>
						<textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Descripción">{{ old('content') }}</textarea>

						@error('content')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- ******************************************************************************************************** --}}

					<div class="form-group">
						<button class="btn btn-block btn-custom btn-upload" type="button">
							<i class="fa fa-upload"></i>
							Seleccionar Imágen
						</button>
						<input type="file" name="image" id="photo" class="d-none" accept="image/*">
						<br>
						<div class="text-center @error('image') is-invalid @enderror">
							<img id="preview" class="img-thumbnail" src="{{ asset('imgs/no-article.png') }}" width="120px">
						</div>

						@error('image')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- ****************************************************************************************************** --}}

					<div class="form-group">
						<select name="user_id" class="form-control  @error('user_id') is-invalid @enderror">
							<option value="">Seleccione  Usuario...</option>
							@foreach ($users as $user)
								<option value="{{ $user->id }}" @if (old('user_id') == $user->id) selected @endif>{{ $user->fullname }}</option>
							@endforeach
						</select>

						@error('user_id')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					{{-- ****************************************************************************************************** --}}

					<div class="form-group">
						<select name="category_id" class="form-control  @error('category_id') is-invalid @enderror">
							<option value="">Seleccione Categoría...</option>
							@foreach ($cats as $cat)
								<option value="{{ $cat->id }}" @if (old('category_id') == $cat->id) selected @endif>{{ $cat->name }}</option>
							@endforeach
						</select>

						@error('category_id')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					{{-- ****************************************************************************************************** --}}

					<div class="form-group">
						<button type="submit" class="btn btn-custom">
							<i class="fa fa-save"></i>
							Guardar
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