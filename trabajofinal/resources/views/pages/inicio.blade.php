@extends('layouts.default')

@section('content')

<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
        style="background-image: url(images/cover_bg_1.jpg);">
        <div class="desc animate-box">
            <h2>Viaja por todo el Perú</h2>
        </div>
    </div>
</div>

<div class="fh5co-listing">
    <div class="container">
        <div class="row">
            @foreach ($lugares as $lugar)
                <div class="col-md-4 col-sm-4 fh5co-item-wrap">
                <a href="lugares/{{ $lugar->url }}" class="fh5co-listing-item">
                    <img src="{{ $lugar->img }}" alt="{{ $lugar->nombre }}"
                        class="img-responsive">
                    <div class="fh5co-listing-copy">
                        <h2>{{ $lugar->nombre }}</h2>
                        <span class="icon">
                            <i class="icon-chevron-right"></i>
                        </span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 fh5co-news">
                <h3>Noticias</h3>
                <ul>
                      @foreach ($noticias as $noticia)
                       <li>
                        <div>
                            <span class="fh5co-date">{{ $noticias->fecha }}</span>
                            <h3>{{ $noticia->titulo }}</h3>
                            <p>{{ $noticia->descripcion }}</p>
                        </div>
                      </li>   
                      @endforeach
                </ul>
            </div>
            <div class="col-md-6 fh5co-testimonial">
                <img src="images/cover_bg_1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"
                    class="img-responsive mb20">
                <img src="images/cover_bg_1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"
                    class="img-responsive">
            </div>
        </div>
    </div>
</div>

@stop
