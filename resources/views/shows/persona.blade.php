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
    <center><h2>Galería de {{ $persona->nombre }}</h2></center>
    <div class="row">
        <center>
            @for( $i = 1; $i < $persona->cantidad; $i++)
            <div class="col-md-6">
                <br>
                <a href="{{ url('/shows/personal/'.$persona->id ) }}">
                    <div class="card border-primary mb-3">
                        <div class="card-body">
                            <img src="{{ asset('/paper_img/personal/'.$persona->nombre.'/'.$persona->nombre.'_'.$i.'.jpg')}}" style="max-height: 200px;" /> 
                        </div>
                    </div>
                </a>
            </div>  
            <br>
            @endfor
        </center>  
    </div>
    <br><br><br><br><br><br>
@endsection