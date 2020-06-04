@extends('layouts/app')
@section('title', 'Página Principal')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            	<h2><i class="fas fa-tag"></i> Artículos Importantes</h2>
                <div class="owl-carousel owl-theme">
                    @foreach ($sliders as $slider)
                        <div class="slider" style="background-image: url( {{ asset($slider->image) }} )">
                            <p>{{ $slider->content}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <h3>
                    <i class="fa fa-filter"></i> 
                    Filtrar por Categoría
                </h3>
                <hr>
                <div class="row">
                    <div class="form-group col-md-4 offset-4">
                        @csrf
                        <select name="idcat" id="idcat" class="form-control">
                            <option value="">Seleccione Categoría</option>
                            <option value="0">Todas</option>

                            @foreach ($cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>

                        <div class="loader d-none text-center">
                            <img src="{{ asset('imgs/loader.gif') }}" width="140px">
                        </div>
                    </div> 
                </div>
                <hr>
            </div>
        </div>
        {{--  --}}
        <div class="row justify-content-center">
            <div class="col-md-12" id="content">
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
            </div>
        </div>
        {{--  --}}
    </div>
    
@endsection