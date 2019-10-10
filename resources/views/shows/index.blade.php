@extends('main')
@section('navtab')
	<div class="alert landing-alert" style="background-color: #00bdf2;">
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li style="font-size: 12px;"><a href="#contacto" style="color: white;">Contacto</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/shows/videos') }}" style="color: white;">Vídeos</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/shows/galeria')}}" style="color: white;">Galería</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/shows/todos')}}" style="color: white;">Shows</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/shows/personal')}}" style="color: white;">Personal</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/shows/promociones') }}" style="color: white;">Promociones</a></li>
            </ul>
            </div>
        </div>  
    </div>
@endsection
@section('content')
    <div id="contacto" class="section landing-section" style="padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Contáctanos</h2>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nombre</label>
                                <input class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <label>Mensaje</label>
                        <textarea class="form-control" rows="4" placeholder="Cuéntanos tus pensamientos y sentimientos..."></textarea>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <button class="btn btn-dark btn-block btn-lg btn-fill">Enviar</button>
                            </div>
                        </div>
                    </form>
                    <br><br>
                    <div class="text-center">
                         <a href="https://www.facebook.com/showsinfantileskmy/" target="_blank" class="btn btn-simple">
                            <i class="fab fa-facebook-square fa-2x" style="color: #3b5998;"></i>
                         </a>
                         <a href="https://www.youtube.com/channel/UCIbsCicBj-8OWxtDI09oWLg/videos" target="_blank" class="btn btn-simple">
                             <i class="fab fa-youtube fa-2x" style="color: #c4302b;"></i>
                         </a>
                         <a href="https://www.instagram.com/showskmy/" target="_blank" class="btn btn-simple">
                             <i class="fab fa-instagram fa-2x"></i>
                         </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection