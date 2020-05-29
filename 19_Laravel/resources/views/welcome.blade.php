@extends('layouts/app')
@section('title', 'Página Principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	<h2>Artículos Importantes</h2>
            <div class="owl-carousel owl-theme">
                @foreach ($sliders as $slider)
                	<div class="slider" style="background-image: url( {{ asset($slider->image) }} )">
                		<p>{{ $slider->content}}</p>
                	</div>
                @endforeach
            </div>
        </div>
        <div class="col-md-12">
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
        </div>
    </div>
</div>
@endsection