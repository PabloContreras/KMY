<div class="alert landing-alert" style="background-color: #00bdf2;">
    <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li style="font-size: 12px;">
                    @if( Request::path() == 'salon')
                        <a href="#contacto" style="color: white;">Contacto</a>
                    @else
                        <a href="/salon
                        #contacto" style="color: white;">Contacto</a>
                    @endif
                </li>
                <li style="font-size: 12px;"><a href="{{ url('/salon/videos') }}" style="color: white;">Vídeos</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/salon/galeria') }}" style="color: white;">Galería</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/salon/paquetes') }}" style="color: white;">Paquetes</a></li>
                <li style="font-size: 12px;"><a href="#{{-- url('/salon/promociones') --}}" style="color: white;">Promociones</a></li>
                <li style="font-size: 12px;"><a href="{{ url('/salon/ven_a_jugar') }}" style="color: white;">Ven a jugar</a></li>
            </ul>
        </div>
    </div> 
    <div class="text-center"> <b>Estás
        {{ Request::path() == 'salon' ? 'en contacto' : '' }} 
        {{ Request::path() == 'salon/videos' ? 'en vídeos' : '' }} 
        {{ Request::path() == 'salon/galeria' ? 'en galería' : '' }}
        {{ Request::path() == 'salon/paquetes' ? 'viendo nuestros paquetes' : '' }}
        {{ Request::path() == 'salon/promociones' ? 'en promociones' : '' }} 
        {{ Request::path() == 'salon/ven_a_jugar' ? 'en ven a jugar' : '' }} 
        </b>
    </div>
</div>