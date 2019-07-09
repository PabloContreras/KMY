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
    {{--<center>
        <section>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JmQ-Rds71k0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
    </center>--}}
    <br><br><br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

      <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <center>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JmQ-Rds71k0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
                </center> 
            </div>

            <div class="item">
                <center>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0R2pm8gQ8Ng" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </center>
            </div>

            <div class="item">
                <center>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zZbcqENqRFE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </center>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="fas fa-arrow-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="fas fa-arrow-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<br><br><br>



@endsection