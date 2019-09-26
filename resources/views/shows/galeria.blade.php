@extends('main')
@section('navtab')
    <div class="alert landing-alert" style="background-color: #00bdf2;">
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li style="font-size: 12px;"><a href="#contacto" style="color: white;">Contacto</a></li>
                    <li style="font-size: 12px;"><a href="{{ url('/shows/videos') }}" style="color: white;">Vídeo</a></li>
                    <li style="font-size: 12px;"><a href="{{ url('/shows/galeria')}}" style="color: white;">Galería</a></li>
                    <li style="font-size: 12px;"><a href="{{ url('/shows/todos')}}" style="color: white;">Shows</a></li>
                    <li style="font-size: 12px;"><a href="{{ url('/shows/personal')}}" style="color: white;">Personal</a></li>
                    <li style="font-size: 12px;"><a href="{{ url('/shows/promociones') }}" style="color: white;">Promociones</a></li>
                </ul>
            </div>
        </div> 
        <div class="text-center"> <b>Estás
            {{ Request::path() == 'shows' ? 'en shows' : '' }} 
            {{ Request::path() == 'shows/videos' ? 'en vídeos' : '' }} 
            {{ Request::path() == 'shows/galeria' ? 'en galería' : '' }}
            {{ Request::path() == 'shows/todos' ? 'viendo todos nuestros shows' : '' }}
            {{ Request::path() == 'shows/personal' ? 'en nuestro personal' : '' }}
            {{ Request::path() == 'shows/promociones' ? 'en promociones' : '' }} </b>
        </div>
    </div>
@endsection
@section('content')
    <center><h2>Galería</h2></center>
    <section id="galeria">
        <article>
            <center>
                <figure>
                    <img src="/paper_img/galeria/alex.jpg" style="width: 200px;" /> 
                </figure>
            </center>
        </article>
        <br>
        <article>
            <center>
                <figure>
                    <img src="/paper_img/galeria/marti.jpg" style="width: 200px;" /> 
                </figure>
            </center>
        </article>
        <br>
        <article>
            <center>
                <figure>
                    <img src="/paper_img/galeria/zebra.jpg" style="width: 200px;" /> 
                </figure>
            </center>
        </article>
        <br>
        <article>
            <center>
                <figure>
                    <img src="/paper_img/galeria/littlepony.jpg" style="width: 200px;" /> 
                </figure>
            </center>
        </article>
        <br>
        <article>
            <center>
                <figure>
                    <img src="/paper_img/galeria/peppa.jpg" style="width: 200px;" /> 
                </figure>
            </center>
        </article>
        <br>
        <article>
            <center>
                <figure>
                    <img src="/paper_img/galeria/bb.jpg" style="width: 200px;" /> 
                </figure>
            </center>
        </article>
        <br>
        <article>
            <center>
                <figure>
                    <img src="/paper_img/galeria/frozen.jpg" style="width: 200px;" /> 
                </figure>
            </center>
        </article>
        <br>
         <article>
            <center>
                <figure>
                    <img src="/paper_img/galeria/sirenita.jpg" style="width: 200px;" /> 
                </figure>
            </center>
        </article>
        <br>
    </section>
@endsection