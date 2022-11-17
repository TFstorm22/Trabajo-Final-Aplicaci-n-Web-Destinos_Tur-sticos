@extends('layouts.default')

@section('content')

<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
        <div class="desc animate-box">
            <h2>Lugares Turisticos</h2>
        </div>
    </div>
</div>
<div class="fh5co-listing">
    <div class="container">
        <div class="row">
            @foreach ($lugares as $lugar)
            <div class="col-md-4 fh5co-item-wrap">
                <a href="{{ $lugar->url }}" class="fh5co-listing-item">
                    <img src="{{ $lugar->img }}" alt="{{ $lugar->nombre }}" class="img-responsive">
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

@stop