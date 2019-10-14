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
    <div class="row text-center">
        <div class="col-md-4">
            <ol>
              <li>
                <a>Angry Birds</a>
              </li>
              <li>
                  <a href="">Animación</a>
              </li>  
              <li>
                  <a>Atrévete a soñar</a>
              </li>
              <li>
                  <a>Aurora</a>
              </li>
              <li>
                  <a>Avengers</a>
              </li>
              <li>
                  <a>Baby Shower</a>
              </li>
              <li>
                  <a>Backyardigans</a>
              </li>
              <li>
                  <a>Barney</a>
              </li>
              <li>
                  <a>Batman</a>
              </li>
              <li>
                  <a>Bella y bestia</a>
              </li>
              <li>
                  <a>Bely y Beto</a>
              </li>
              <li>
                  <a>Ben 10</a>
              </li>
              <li>
                  <a>Blanca Nieves</a>
              </li>
              <li>
                  <a>Bob Esponja</a>
              </li>
              <li>
                  <a>Cenicienta</a>
              </li>
              <li>
                  <a>Coco</a>
              </li>
              <li>
                  <a>Corazón y cupido</a>
              </li>
              <li>
                  <a>Descendientes</a>
              </li>
              <li>
                  <a>Doctora juguetes</a>
              </li>
              <li>
                  <a>Dora la exploradora</a>
              </li>
              <li>
                  <a>El Chavo del ocho</a>
              </li>
              <li>
                  <a>Frozen</a>
              </li>
              <li>
                  <a>Gallina pintadita</a>
              </li>
              <li>
                  <a>Hadas</a>
              </li>
              <li>
                  <a>Hannah Montana</a>
              </li>
              <li>
                  <a>Héroes en pijama</a>
              </li>
            </ol>            
        </div>
        <div class="col-md-4">
            <ol start="27">
                <li>
                    <a>Hi5</a>
                </li>
                <li>
                    <a>High School Musical</a>
                </li>
                <li>
                    <a>Increíbles</a>
                </li>
                <li>
                    <a>Intensamente</a>
                </li>
                <li>
                    <a>Jake y los piratas</a>
                </li>
                <li>
                    <a>Jazmín</a>
                </li>
                <li>
                    <a>La CQ</a>
                </li>
                <li>
                    <a>La sirenita</a>
                </li>
                <li>
                    <a>Lady bug</a>
                </li>
                <li>
                    <a>Lazy town</a>
                </li>
                <li>
                    <a>Lilo y Stitch</a>
                </li>
                <li>
                    <a>Madagascar</a>
                </li>
                <li>
                    <a>Mario Bros</a>
                </li>
                <li>
                    <a>Masha y el Oso</a>
                </li>
                <li>
                    <a>Micky Mouse</a>
                </li>
                <li>
                    <a>Minions</a>
                </li>
                <li>
                    <a>Mis XV</a>
                </li>
                <li>
                    <a>Moana</a>
                </li>
                <li>
                    <a>Monster High</a>
                </li>
                <li>
                    <a>Monsters, Inc</a>
                </li>
                <li>
                    <a>Mounstros</a>
                </li>
                <li>
                    <a>My Little Pony</a>
                </li>
                <li>
                    <a>Paw Patrol</a>
                </li>
                <li>
                    <a>Peppa Pig</a>
                </li>
                <li>
                    <a>Peter Pan</a>
                </li>
                <li>
                    <a>Phineas And Ferb</a>
                </li>

            </ol>
        </div>
        <div class="col-md-4">
            <ol start="53">
                <li>
                    <a>Pinta caritas</a>
                </li>
                <li>
                    <a>Pistas de Blue</a>
                </li>
                <li>
                    <a>Plaza Sésamo</a>
                </li>
                <li>
                    <a>Pocoyo</a>
                </li>
                <li>
                    <a>Pokémon</a>
                </li>
                <li>
                    <a>Power Rangers</a>
                </li>
                <li>
                    <a>Presencias</a>
                </li>
                <li>
                    <a>Princesas</a>
                </li>
                <li>
                    <a>Pucca y Garu</a>
                </li>
                <li>
                    <a>Rapunzel</a>
                </li>
                <li>
                    <a>Reyes Magos</a>
                </li>
                <li>
                    <a>Rosita Fresita</a>
                </li>
                <li>
                    <a>Santa Clous</a>
                </li>
                <li>
                    <a>Scooby Doo</a>
                </li>
                <li>
                    <a>Shrek</a>
                </li>
                <li>
                    <a>Soy Luna</a>
                </li>
                <li>
                    <a>Spider Man</a>
                </li>
                <li>
                    <a>Súper Héroes</a>
                </li>
                <li>
                    <a>Súper Heroínas</a>
                </li>
                <li>
                    <a>Tatiana</a>
                </li>
                <li>
                    <a>Toy Story</a>
                </li>
                <li>
                    <a>Transformers</a>
                </li>
                <li>
                    <a>Trolls</a>
                </li>
                <li>
                    <a>Unicornio</a>
                </li>
                <li>
                    <a>Valiente</a>
                </li>
                <li>
                    <a>Winnie Pooh</a>
                </li>
            </ol>  
        </div>
        {{--<div class="row text-center">
            
            <div>
                <div class="col-md-3">
                    <div class="card">
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
        </div>--}}
    </div>
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'de6c7a72-5e87-48c0-a163-d049367df9d7', f: true }); done = true; } }; })();</script>
@endsection
