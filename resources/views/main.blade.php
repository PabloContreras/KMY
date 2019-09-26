<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('paper_img/kmylogo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>KMY | Eventos infantiles</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="{{ asset('bootstrap3/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/ct-paper.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" /> 
    <link href="{{ asset('css/examples.css') }}" rel="stylesheet" /> 
    <link href="{{ asset('css/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">

        
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <style type="text/css">
        .menu-fixed {
            position:fixed;
            z-index:1000;
            top:0;
            /*max-width:1000px;*/
            width:100%;
            box-shadow:0px 4px 3px rgba(0,0,0,.5);
        }
        video {
          max-width: 100%;
          height: auto;
        }
        #galeria {
            margin: 1rem auto;
            width:100%;
            max-width:960px;
            column-count: 4;
            -webkit-column-span:all;
            column-span:all;
            break-inside: avoid;
            page-break-inside: avoid;
            -moz-column-rule: 1px solid #bbb;
            -webkit-column-rule: 1px solid #bbb;
            column-rule: 1px solid #bbb;

        }
        @media (max-width: 767px) { 
            #galeria {
                columns:2;
            }

        }
                
        /* Móviles en vertical */

        @media (max-width: 480px) {
            #galeria {
                columns: 1;
            }
        }
        #active{
            background-color: #00bdf2; 
            color: white;
        }
    </style>

      
</head>
<body>
    
    <nav class="navbar navbar-default menu" role="navigation-demo" id="demo-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('paper_img/kmylogo.png') }}" style="height: 40px" alt=""></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ url('/shows') }}" class="btn btn-simple" 
                    {{ Request::path() == 'shows' ? 'id=active' : '' }} 
                    {{ Request::path() == 'shows/videos' ? 'id=active' : '' }} 
                    {{ Request::path() == 'shows/galeria' ? 'id=active' : '' }}
                    {{ Request::path() == 'shows/todos' ? 'id=active' : '' }}
                    {{ Request::path() == 'shows/personal' ? 'id=active' : '' }}
                    {{ Request::path() == 'shows/promociones' ? 'id=active' : '' }}>
                    Shows
                </a>
            </li>
            <li>
                <a href="#" class="btn btn-simple" {{ Request::path() == 'salon' ? 'id=active' : '' }}>Salón</a>
            </li>
            <li>
                <a href="{{ url('/nosotros') }}" class="btn btn-simple" {{ Request::path() == 'nosotros' ? 'id=active' : '' }}>Quiénes somos</a>
            </li>
            {{--<li>
                <a href="#" class="btn btn-simple" {{ Request::path() == 'otros-servicios' ? 'id=active' : '' }}>Otros servicios</a>
            </li>--}}
            <li>
                <a href="#" class="btn btn-simple" {{ Request::path() == 'blog' ? 'id=active' : '' }}>Blog</a>
            </li>
            <li>
                <a href="#" target="_blank" class="btn btn-simple"><i class="fab fa-facebook-square" style="color: #3b5998 "></i></a>
            </li>
           </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-->
    </nav>      
    @if(Request::path() == 'shows' || Request::path() == 'shows/videos' || Request::path() == 'shows/galeria' || Request::path() == 'shows/todos' || Request::path() == 'shows/personal' || Request::path() == 'shows/promociones' )
        @include('partials.nav-shows')
    @endif
    <div class="wrapper">
        <div class="landing-header" style="background-image: url('/paper_img/Kmy.png'); background-size: cover; background-position: center;">
        </div> 
        <div class="container">
            @yield('content')         

        </div>
        <div class="section" style="background-color: white;"></div>    
    </div>

    <footer class="footer-demo section-dark">
        <div class="container">
            <div class="row">
                @if( Request::path() == 'shows' || Request::path() == 'shows/videos' || Request::path() == 'shows/galeria' || Request::path() == 'shows/todos' || Request::path() == 'shows/personal' || Request::path() == 'shows/promociones')
                    <div class="col-md-8">
                        <p><i class="fas fa-phone" style="color: #00bdf2"></i> | 36131284 / 44981159</p>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <i class="fab fa-whatsapp" style="color: #00bdf2"></i> | 5536131284 / 5545981159
                        </p>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <i class="fas fa-at" style="color: #00bdf2"></i> | showsinfantiles@kmy.com.mx
                        </p>
                    </div>
                @endif
                <div class="col-md-4">
                    &copy; 2019, hecho con <i class="fa fa-heart heart"></i> & <i class="fa fa-coffee" style="color: white;"></i> 
                </div>
            </div>
        </div>
    </footer>
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'de6c7a72-5e87-48c0-a163-d049367df9d7', f: true }); done = true; } }; })();</script>

</body>

<script src="{{ asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('bootstrap3/js/bootstrap.js') }}" type="text/javascript"></script>

<!--  Plugins -->
<script src="{{ asset('js/ct-paper-checkbox.js') }}"></script>
<script src="{{ asset('js/ct-paper-radio.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>

<script src="{{ asset('js/ct-paper.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var altura = $('.menu').offset().top;
        
        $(window).on('scroll', function(){
            if ( $(window).scrollTop() > altura ){
                $('.menu').addClass('menu-fixed');
            } else {
                $('.menu').removeClass('menu-fixed');
            }
        });
     
    });
        $('#myCarousel').carousel({
            interval: false
        });
</script>

</html>