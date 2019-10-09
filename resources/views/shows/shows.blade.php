@extends('main')
@section('navtab')
    <div class="alert landing-alert" style="background-color: #00bdf2;">
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li style="font-size: 12px;"><a href="{{ url('/shows')}}" style="color: white;">Contacto</a></li>
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
    <center><h1>Shows</h1></center>
    <section>
        <center>
            <a href="{{ url('/shows/buscar') }}" class="btn btn-secondary my-2 my-sm-0">Busca tu show...</a>
        </center>
    </section>
    <section id="galeria">
    {{--@for ($i = 1; $i < 79; $i++)
        <article>
            <center>
                <figure>
                    <img src="{{ asset('/paper_img/shows/'.$i.'.jpg')}}" style="width: 200px;" /> 
                </figure>
            </center>
        </article>
        <br>
    @endfor--}}

    </section>
@endsection