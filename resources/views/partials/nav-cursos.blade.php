<div class="alert landing-alert" style="background-color: #00bdf2;">
    <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li style="font-size: 12px;"><a href="{{ url('/cursos/curso_1') }}" style="color: white;">Curso 1</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/cursos/curso_2') }}" style="color: white;">Curso 2</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/cursos/curso_3') }}" style="color: white;">Curso 3</a></li>
            </ul>
        </div>
    </div> 
    <div class="text-center"> <b>Estás
        {{ Request::path() == 'cursos/curso_1' ? 'viendo información sobre el curso 1' : '' }} 
        {{ Request::path() == 'cursos/curso_2' ? 'viendo información sobre el curso 2' : '' }} 
        {{ Request::path() == 'cursos/curso_3' ? 'viendo información sobre el curso 3' : '' }}
        {{-- Request::path() == 'salon/paquetes' ? 'viendo nuestros paquetes' : '' --}}
        </b>
    </div>
</div>