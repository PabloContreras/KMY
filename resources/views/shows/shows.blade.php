@extends('main')
<style type="text/css">
    button{
        margin-bottom: 10px !important;
    }
</style>
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
    <center><h1>Shows</h1></center><br><br>

    <div class="col-md-4">
            <ol>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter3">
                        Angry Birds
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter4">
                        Animación
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter9">
                        Atrévete a soñar
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
                        Aurora
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter10">
                        Avengers
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter5">
                        Baby Shower
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter6">
                        Backyardigans
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter7">
                        Barney
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter11">
                        Batman
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter12">
                        Bella y Bestia
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter13">
                        Bely y Beto
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter14">
                        Ben 10
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter15">
                        Blancanieves
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter16">
                        Bob Esponja
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter17">
                        Cenicienta
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter18">
                        Coco
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter19">
                        Corazón y cupido
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter20">
                        Descendientes
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter21">
                        Doctora juguetes
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter22">
                        Dora la exploradora
                    </button>
                </li><li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter23">
                        El chavo del ocho
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter24">
                        Frozen
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter25">
                        Gallina pintadita
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter26">
                        Hadas
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter27">
                        Hannah Montana
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter28">
                        Héroes en pijama
                    </button>
                </li>
            </ol>            
        </div>
        <div class="col-md-4">
            <ol start="27">
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter29">
                        Hi5
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter30">
                        High School Musical
                    </button>
                </li>
               <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter31">
                        Increíbles
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter32">
                        Intensamente
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter33">
                        Jake y los piratas
                    </button>
                </li>
               <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter34">
                        Jasmine
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter35">
                        La CQ
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter37">
                        La sirenita
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter36">
                        Lady bug    
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter38">
                        Lazy Town
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter39">
                        Lilo y Stitch
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter40">
                        Madagascar
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter41">
                        Mario Bros
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter42">
                        Masha y el oso
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter43">
                        Mickey Mouse
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter44">
                        Minions
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter45">
                        Mis XV
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter46">
                        Moana
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter47">
                        Monster High
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter48">
                        Monsters, Inc
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter49">
                        Mounstros
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter50">
                        My Little Pony
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter51">
                        Paw Patrol
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter52">
                        Peppa Pig
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter53">
                        Peter Pan
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter54">
                        Phineas and Ferb
                    </button>
                </li>

            </ol>
        </div>
        <div class="col-md-4">
            <ol start="53">
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter55">
                        Pinta caritas
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter56">
                        Pistas de Blue
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter57">
                        Plaza Sésamo
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter58">
                        Pocoyo
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter59">
                        Pokémon
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter60">
                        Power Rangers
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter61">
                        Presencias
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter62">
                        Princesas
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter63">
                        Pucca y Garu
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter64">
                        Rapunzel
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter65">
                        Reyes Magos
                    </button>
                </li>
                {{--<li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter66">
                        Rosita Fresita
                    </button>
                </li>--}}
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter66">
                        Santa Clous
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter67">
                        Scooby Doo
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter68">
                        Shrek
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter69">
                        Soy Luna
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter70">
                        Spider Man
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter71">
                        Súper Héroes
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter72">
                        Súper Heroínas
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter73">
                        Tatiana
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter74">
                        Toy Story
                    </button>
                </li> 
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter75">
                        Transformers
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter76">
                        Trolls
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter77">
                        Unicornio
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter78">
                        Valiente
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
                        Winnie Pooh
                    </button>
                </li>
            </ol>  
        </div>



    @for ($i = 1; $i < 79; $i++)
        <div class="modal fade" id="exampleModalCenter{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Nuestros shows</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('/img/shows/index_shows/'.$i.'.jpg') }}" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    @endfor
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'de6c7a72-5e87-48c0-a163-d049367df9d7', f: true }); done = true; } }; })();</script>
@endsection