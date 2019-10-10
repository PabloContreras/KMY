@extends('main')
@section('content')

    <center>
        <h2>Galería</h2>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <button class="btn btn-success" id="shows_en_vivo">Shows en vivo</button>
            <button class="btn btn-success" id="empresas">Empresas</button>
            <button class="btn btn-success" id="escuelas">Escuelas</button>
            {{--<button class="btn btn-success" id="artistas">Artistas</button>--}}
        </div>
    </center>
    <section class="galeria">
        <div id="div_shows_en_vivo">
            @for( $i = 1; $i < 30; $i++)
                <article>
                    <center>
                        <figure>
                            <img src="{{ asset('/img/shows/shows_en_vivo/'.$i.'.jpg') }}" style="width: 200px;" /> 
                        </figure>
                    </center>
                </article>
                <br>
            @endfor
        </div>
        <br>
        <div id="div_empresas">
            @for( $i = 1; $i < 10; $i++)
                <article>
                    <center>
                        <figure>
                            <img src="{{ asset('/img/shows/empresas/'.$i.'.png') }}" style="width: 200px;" /> 
                        </figure>
                    </center>
                </article>
                <br>
            @endfor
        </div>
        <br>
        <div id="div_escuelas">
            @for( $i = 1; $i < 12; $i++)
                <article>
                    <center>
                        <figure>
                            <img src="{{ asset('/img/shows/escuelas/'.$i.'.png') }}" style="width: 200px;" /> 
                        </figure>
                    </center>
                </article>
                <br>
            @endfor
        </div>
        
    </section>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
        // Botones que contienen action listener
        var showsBtn = document.getElementById('shows_en_vivo');
        var empresasBtn = document.getElementById('empresas');
        var escuelasBtn = document.getElementById('escuelas');
        //secciones a desaparecer
        var divShows = document.getElementById('div_shows_en_vivo');
        var divEmpresas = document.getElementById('div_empresas');
        var divEscuelas = document.getElementById('div_escuelas');

        //Iniciar componentes
        function iniciarComponentes() {
            $(divShows).show();
            $(divEmpresas).hide();
            $(divEscuelas).hide();
        }
        // Funciones para ocultar y mostrar
        function mostrarOcultarDivEmpresas() {
            $(divEmpresas).show();
            $(divEscuelas).hide();
            $(divShows).hide();
        }
        function mostrarOcultarDivShows() {
            $(divEmpresas).hide();
            $(divEscuelas).hide();
            $(divShows).show();
        }
        function mostrarOcultarDivEscuelas() {
            $(divEmpresas).hide();
            $(divEscuelas).show();
            $(divShows).hide();
        }
        //Agregar eventos a cada botón
        function agregarEventos() {
            empresasBtn.addEventListener('click', function () {
                mostrarOcultarDivEmpresas();
            });
            showsBtn.addEventListener('click', function () {
                mostrarOcultarDivShows();
            });
            escuelasBtn.addEventListener('click', function () {
                mostrarOcultarDivEscuelas();
            });

        }
        $(document).ready(function () {
            console.log('Ocultando componentes... ');
            iniciarComponentes();
            console.log('Agregando eventos...');
            agregarEventos();
            console.log('Listo!');
        });
    </script>
@endsection