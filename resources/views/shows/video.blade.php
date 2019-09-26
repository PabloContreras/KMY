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
    <div class="col-md-10 col-md-offset-1">
        <div class="row text-center">
            <div class="col-md-12" style="margin-bottom: 10px;">
                <a href="#" class="btn btn-success">Shows</a>
                <a href="#" class="btn btn-success">Empresas</a>
                <a href="#" class="btn btn-success">Escuelas</a>
                <a href="#" class="btn btn-success">Artistas</a>
            </div>
            <div>
                <div class="col-md-3">
                    <div class="card">
                        {{--<video src="https://www.youtube.com/watch?v=j81rJM4VTiY" style="width: 100%; display: block;"></video>--}}
                        <iframe src="https://www.youtube.com/embed/j81rJM4VTiY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;"></iframe>
                        <div class="card-body">
                            <p class="card-text">Coco</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <iframe src="https://www.youtube.com/embed/t_N6vUu8Dfs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;"></iframe>
                        <div class="card-body">
                            <p class="card-text">Mickey Mouse</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <iframe src="https://www.youtube.com/embed/lI_wxrK2KB0U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;"></iframe>
                    
                        <div class="card-body">
                            <p class="card-text">Descendientes</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <iframe src="https://www.youtube.com/embed/eEmtEdvMcss" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%"></iframe>
                        <div class="card-body">
                            <p class="card-text">Masha y el oso</p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

@endsection
