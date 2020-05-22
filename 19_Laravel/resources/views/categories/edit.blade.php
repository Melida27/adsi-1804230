@extends('layouts.app')
@section('title', 'Editar Categoría')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class="mt-2"><i class="fa fa-pen"></i> Editar Categoría</h1>
				<hr>
				<a href="{{ url('categories') }}" class="btn btn-custom">
					<i class="fa fa-list"></i>
					Ir a lista Categorías
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
				<form action="{{ url('categories/'.$category->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{ $category->id }}">
					<div class="form-group">
						<label for="name">Nombre</label>
						<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}">

						@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					{{-- ******************************************************************************************************************************* --}}
					<div class="form-group">
						<label for="description">Descripción</label>
						<textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Descripción">{{ old('description', $category->description) }}</textarea>

						@error('description')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					{{-- ******************************************************************************************************************************* --}}
					<div class="form-group">
						<button class="btn btn-block btn-custom btn-upload" type="button">
							<i class="fa fa-upload"></i>
							Seleccionar Foto
						</button>
						<input type="file" name="image" id="photo" class="d-none" accept="image/*">
						<br>
						<div class="text-center @error('image') is-invalid @enderror">
							<img id="preview" class="img-thumbnail" src="{{ asset($category->image) }}" width="120px">
						</div>

						@error('image')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					{{-- ******************************************************************************************************************************* --}}
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