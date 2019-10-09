@extends('main')
@section('content')
    
            <div class="section text-center landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Somos KMY</h2>
                            <h4>Garantizamos a nuestros clientes todos y cada uno de nuestros espéctaculos con puntualidad y profesionalismo.</h4>
                        </div>
                    </div>
                </div>
            </div> 
            
            {{-- <div class="section section-light-brown landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 column">
                            <h4>First Attribute</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="col-md-4 column">
                            <h4>Second Attribute</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="col-md-4 column">
                            <h4>Third Attribute</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section section-dark text-center landing-section">
                <div class="container">
                    <h2>Let's talk about us</h2>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="{{ asset('paper_img/chet_faker_2.jpg') }}" alt="Thumbnail Image" class="img-circle img-responsive">
                            <h5>Chet Faker <br /><small class="text-muted">Music</small></h5>
                            <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="{{ asset('paper_img/flume.jpg') }}" alt="Thumbnail Image" class="img-circle img-responsive">
                            <h5>Flume <br /><small class="text-muted">Production</small></h5>
                            <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="{{ asset('paper_img/banks.jpg') }}" alt="Thumbnail Image" class="img-circle img-circle img-responsive">
                            <h5>Banks <br /><small class="text-muted">Music</small></h5>
                            <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            
            <div class="section landing-section">
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
                                <div class="text-center">
                                     <a href="#" target="_blank" class="btn btn-simple"><i class="fab fa-facebook-square fa-2x" style="color: #3b5998 "></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
@endsection