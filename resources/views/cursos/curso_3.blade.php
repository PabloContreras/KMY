@extends('main')
@section('content')
    <section class="galeria">
        <div id="div_shows_en_vivo">
            @for( $i = 1; $i < 47; $i++)
                <article>
                    <center>
                        <figure>
                            <img src="{{ asset('/img/cursos/curso_3/'.$i.'.jpg') }}" style="width: 200px;" /> 
                        </figure>
                    </center>
                </article>
                <br>
            @endfor
        </div>
    </section>
@endsection