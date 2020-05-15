@extends('layouts.app')
@section('title', 'Crear Usuario')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class="mt-2"><i class="fa fa-plus"></i> Adicionar Usuario</h1>
				<hr>
				<a href="{{ url('users') }}" class="btn btn-custom">
					<i class="fa fa-users"></i>
					Ir a lista Usuarios
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

				<form action="{{ url('users') }}" method="post" enctype="multipart/form-data">
					@csrf
					{{-- *************************************************************************************************************************** --}}
					<div class="form-group">
						<label for="fullname">Nombre Completo</label>
						<input type="text" name="fullname" class="form-control  @error('fullname') is-invalid @enderror" value="{{ old('fullname') }}">

						@error('fullname')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					{{-- *************************************************************************************************************************** --}}
					<div class="form-group">
						<label for="email">Correo Electrónico</label>
						<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">

						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					{{-- *************************************************************************************************************************** --}}
					<div class="form-group">
						<label for="phone">Teléfono</label>
						<input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Teléfono">

						@error('phone')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					{{-- *************************************************************************************************************************** --}}
					<div class="form-group">
						<label for="birthdate">Fecha de Nacimiento</label>
						<input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" value="{{ old('birthdate') }}">

						@error('birthdate')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					{{-- *************************************************************************************************************************** --}}
					<div class="form-group">
						<label for="gender">Género</label>
						<select name="gender" class="form-control @error('gender') is-invalid @enderror">
							<option value="">Seleccione...</option>
							<option value="male" @if(old('gender')=='male') selected @endif>Male</option>
							<option value="female" @if(old('gender')=='female') selected @endif>Female</option>
						</select>

						@error('gender')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					{{-- *************************************************************************************************************************** --}}
					<div class="form-group">
						<button class="btn btn-block btn-custom btn-upload" type="button">
							<i class="fa fa-upload"></i>
							Seleccionar Foto
						</button>
						<input type="file" name="photo" id="photo" class="d-none" accept="image/*">
						<br>
						<div class="text-center @error('photo') is-invalid @enderror">
							<img id="preview" class="img-thumbnail" src="{{ asset('imgs/no-photo.png') }}" width="120px">
						</div>

						@error('photo')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					{{-- *************************************************************************************************************************** --}}
					<div class="form-group">
						<label for="address">Dirección</label>
						<input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" placeholder="Dirección">

						@error('address')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					{{-- *************************************************************************************************************************** --}}
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Contraseña">

						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					{{-- *************************************************************************************************************************** --}}
					<div class="form-group">
						<label for="password_confirmation">Confirmar Contraseña</label>
						<input type="password" name="password_confirmation" class="form-control" value="{{ old('password') }}" placeholder="Confirmar Contraseña">

						@error('password_confirmation')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					{{-- *************************************************************************************************************************** --}}
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