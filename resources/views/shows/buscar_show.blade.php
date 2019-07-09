@extends('main')
@section('navtab')
    <div class="alert landing-alert" style="background-color: #00bdf2;">
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li style="font-size: 12px;"><a href="{{ url('/shows')}}" style="color: white;">Contacto</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/shows/videos') }}" style="color: white;">Vídeo</a></li>
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
            <h2>Busca tu show</h2>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Shows">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </center>
    </section>

    <br><br><br><br>
@endsection