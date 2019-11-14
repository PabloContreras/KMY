@extends('main')
@section('content')
    <div id="contacto" class="section landing-section" style="padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Contáctanos</h2>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nombre</label>
                                <input class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <label>Mensaje</label>
                        <textarea class="form-control" rows="4" placeholder="Cuéntanos tus pensamientos y sentimientos..."></textarea>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <button class="btn btn-dark btn-block btn-lg btn-fill">Enviar</button>
                            </div>
                        </div>
                    </form>
                    <br><br>
                    <div class="text-center">
                         <a href="https://www.facebook.com/KMYsalonAragon/" target="_blank" class="btn btn-simple">
                            <i class="fab fa-facebook-square fa-2x" style="color: #3b5998;"></i>
                         </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection