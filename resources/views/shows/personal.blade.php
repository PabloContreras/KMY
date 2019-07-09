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
    <center><h2>Personal</h2></center>
    <div class="row">
        <center>
        @foreach( $personal as $persona )
            <div class="col-md-6">
                <br>
                <a href="{{ url('/shows/personal/'.$persona->id ) }}">
                    <div class="card border-primary mb-3">
                        <div class="card-header"> <strong>{{ $persona->nombre }} </strong></div>
                        <div class="card-body">
                            <img src="{{ asset('/paper_img/personal/'.$persona->nombre.'/'.$persona->nombre.'_1.jpg')}}" style="max-height: 200px;" /> 
                        </div>
                    </div>
                </a>
            </div>  
            <br>
        @endforeach    
        </center>  
    </div>
    <br><br>
@endsection