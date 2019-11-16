@extends('main')
@section('content')

    <center>
        <h2>Galería</h2>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <button class="btn btn-success" id="instalaciones">Instalaciones</button>
            <button class="btn btn-success" id="shows_en_vivo">Eventos en vivo</button>
        </div>
    </center>
    <section class="galeria">
        <div id="div_instalaciones">
            @for( $i = 1; $i < 14; $i++)
                <article>
                    <center>
                        <figure>
                            <img src="{{ asset('/img/salon/instalaciones/'.$i.'.png') }}" style="width: 200px;" /> 
                        </figure>
                    </center>
                </article>
                <br>
            @endfor
        </div>
        <br>
        <div id="div_shows_en_vivo">
            @for( $i = 1; $i < 42; $i++)
                <article>
                    <center>
                        <figure>
                            <img src="{{ asset('/img/salon/eventos_en_vivo/'.$i.'.jpg') }}" style="width: 200px;" /> 
                        </figure>
                    </center>
                </article>
                <br>
            @endfor
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
        
    </script>
    <script type="text/javascript">
        // Botones que contienen action listener
        var showsBtn = document.getElementById('shows_en_vivo');
        var instalacionesBtn = document.getElementById('instalaciones');
        //secciones a desaparecer
        var divShows = document.getElementById('div_shows_en_vivo');
        var divInstalaciones = document.getElementById('div_instalaciones');

        //Iniciar componentes
        function iniciarComponentes() {
            $(divInstalaciones).show();
            $(divShows).hide();
        }
        // Funciones para ocultar y mostrar
        function mostrarOcultarDivInstalaciones() {
            $(divInstalaciones).show();
            $(divShows).hide();
        }
        function mostrarOcultarDivShows() {
            $(divInstalaciones).hide();
            $(divShows).show();
        }
        //Agregar eventos a cada botón
        function agregarEventos() {
            instalacionesBtn.addEventListener('click', function () {
                mostrarOcultarDivInstalaciones();
            });
            showsBtn.addEventListener('click', function () {
                mostrarOcultarDivShows();
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