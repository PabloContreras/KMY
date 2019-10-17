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
        <div class="col-md-12 text-center" >
          <h4>Busca tu show por orden alfabético</h4>
        </div>
        <br>
        <div class="col-md-4">
            <ol>
              <li>
                <a>Angry Birds</a>
              </li>
              <li>
                  <a href="https://www.youtube.com/watch?v=PELO2gAm_-A" target="__blank" rel="tooltip" title="Ver Vídeo">Animación <i class="fas fa-link"></i></a>
              </li>  
              <li>
                  <a>Atrévete a soñar</a>
              </li>
              <li>
                  <a>Aurora</a>
              </li>
              <li>
                  <a href="https://www.youtube.com/watch?v=zZbcqENqRFE" target="__blank" rel="tooltip" title="Ver Vídeo">Avengers <i class="fas fa-link"></i></a>
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
                  <a href="https://www.youtube.com/watch?v=U8BlephthZk" target="__blank" rel="tooltip" title="Ver Vídeo">Bely y Beto <i class="fas fa-link"></i></a>
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
                  <a href="https://www.youtube.com/watch?v=FSVyFHtwv9Y" target="__blank" rel="tooltip" title="Ver Vídeo">Coco <i class="fas fa-link"></i></a>
              </li>
              <li>
                  <a>Corazón y cupido</a>
              </li>
              <li>
                  <a href="https://www.youtube.com/watch?v=lI_wxrK2KBU" target="__blank" rel="tooltip" title="Ver Vídeo">Descendientes <i class="fas fa-link"></i></a>
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
                  <a href="https://www.youtube.com/watch?v=0R2pm8gQ8Ng" target="__blank" rel="tooltip" title="Ver Vídeo">Frozen <i class="fas fa-link"></i></a>
              </li>
              <li>
                  <a href="https://www.youtube.com/watch?v=wboove-nO3A" target="__blank" rel="tooltip" title="Ver Vídeo">Gallina pintadita <i class="fas fa-link"></i></a>
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
                    <a href="https://www.youtube.com/watch?v=FvEb0aVo0x4" target="__blank" rel="tooltip" title="Ver Vídeo">Jasmine <i class="fas fa-link"></i></a>
                </li>
                <li>
                    <a>La CQ</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=FSVyFHtwv9Y" target="__blank" rel="tooltip" title="Ver Vídeo">La sirenita <i class="fas fa-link"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=r1Vg3HNps0o" target="__blank" rel="tooltip" title="Ver Vídeo">Lady bug <i class="fas fa-link"></i></a>
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
                    <a href="https://www.youtube.com/watch?v=eEmtEdvMcss" target="__blank" rel="tooltip" title="Ver Vídeo">Masha y el Oso <i class="fas fa-link"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=j81rJM4VTiY" target="__blank" rel="tooltip" title="Ver Vídeo">Mickey Mouse <i class="fas fa-link"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=Z57DI2j-X9I" target="__blank" rel="tooltip" title="Ver Vídeo">Minions <i class="fas fa-link"></i></a>
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
                    <a href="https://www.youtube.com/watch?v=MdJPAnEXGuc" target="__blank" rel="tooltip" title="Ver Vídeo">My Little Pony <i class="fas fa-link"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=yy6TeOUhUUE" target="__blank" rel="tooltip" title="Ver Vídeo">Paw Patrol <i class="fas fa-link"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=ftWs2wjwO1Y" target="__blank" rel="tooltip" title="Ver Vídeo">Peppa Pig <i class="fas fa-link"></i></a>
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
                    <a href="https://www.youtube.com/watch?v=kSYGceACSuA" target="__blank" rel="tooltip" title="Ver Vídeo">Pinta caritas <i class="fas fa-link"></i></a>
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
                    <a href="https://www.youtube.com/watch?v=v8A5tKeP-iQ" target="__blank" rel="tooltip" title="Ver Vídeo">Power Rangers <i class="fas fa-link"></i></a>
                </li>
                <li>
                    <a>Presencias</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=4k1rS27NCzA" target="__blank" rel="tooltip" title="Ver Vídeo">Princesas <i class="fas fa-link"></i></a>
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
                    <a href="https://www.youtube.com/watch?v=EO0ut_7N7lM" target="__blank" rel="tooltip" title="Ver Vídeo">Soy Luna <i class="fas fa-link"></i></a>
                </li>
                <li>
                    <a>Spider Man</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=IDUSyaHdF_Q" target="__blank" rel="tooltip" title="Ver Vídeo">Súper Héroes <i class="fas fa-link"></i></a>
                </li>
                <li>
                    <a>Súper Heroínas</a>
                </li>
                <li>
                    <a>Tatiana</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=JmQ-Rds71k0" target="__blank" rel="tooltip" title="Ver Vídeo">Toy Story <i class="fas fa-link"></i></a>
                </li>
                <li>
                    <a>Transformers</a>
                </li>
                <li>
                    <a>Trolls</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=x7xR_hvaqTg" target="__blank" rel="tooltip" title="Ver Vídeo">Unicornio <i class="fas fa-link"></i></a>
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
