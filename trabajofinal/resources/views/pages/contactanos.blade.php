@extends('layouts.default')

@section('content')

    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
            style="background-image: url(images/cover_bg_1.jpg);">
            <div class="desc animate-box">
                <h2>Contáctanos</h2>
            </div>
        </div>

    </div>


    <div id="fh5co-contact" class="fh5co-section animate-box">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="section-title">Nuestra Dirección</h3>
                        <p>A dos cuadras de la iglesia San Sebastián.</p>
                        <ul class="contact-info">
                            <li><i class="icon-location-pin"></i>Jirón 2 de Mayo 125, Huánuco 10003</li>
                            <li><i class="icon-phone2"></i>+51 935341253</li>
                            <li><i class="icon-mail"></i><a href="#">info@citytours.com</a></li>
                            <li><i class="icon-globe2"></i><a href="#">www.citytours.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Enviar" class="btn btn-primary btn-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
