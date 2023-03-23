
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>TRACTOBULL</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) 2022/10-->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3Q95ZN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('Eng.components.menu')
     <!-- Header -->
 <header class="masthead index">
    <video id="my-video" class="video" loop muted autoplay playsinline>
        <source src="{{ asset('front/website/img/videos/inicio.mp4')}}" type="video/mp4">
    </video>
    <div class="intro-text ptn-index">
        <div class="intro-heading text-uppercase">TRACTO BULL <br/> IS POWER</div>
        <div class="intro-lead-in">All <strong>for Tractor Trucks </strong><br/>Parts and Accessories</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{route('about')}}">MORE</a>
    </div>
</header>
<div class="video-modal"> 
    <img src="{{ asset('front/website/img/inicio/02_video/tracto-bg.jpg')}}"/>
    <div class="boton-play-index">
        <button class="play play-btn video-btn" data-toggle="modal" data-src="https://vimeo.com/436118208" data-target="#myModal">
            <img src="{{ asset('front/website/img/inicio/02_video/play.png')}}" alt="Tracktobull Play Video">
        </button>
    </div>
</div>

<section class="video-div">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-5 d-block tex-center">
                <img src="{{asset('front/website/img/inicio/02_video/logo_tractobull.png')}}" class="logo-tracto" alt="Tracto Bull Logo" />

            </div>
            <div class="col-md-7 p-3">
                <h4 data-aos="zoom-in-right">
                    <span class="withe">We are the leading company in the </span><br>
                    <span class="azul-dark">manufacture and export </span>
                    <span class="withe">of</span><br>
                    <span class="gris-light roboto font-weight-normal">truck parts and accessories</span>
                </h4>
                <a href="{{route('about')}}" class="btn btn-primary conoce-responsive mt-2">MORE</a>
            </div>
        </div>
    </div>

</section>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close action-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="action-close">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9"> 
                    <iframe id="video-corp" src="https://player.vimeo.com/video/436118208?loop=1" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="fortalezas w-100 d-block position-relative fortaleza-t-space">
    <div class="container">
        <div class="row">
            <div class="col-md-6 withe text-uppercase">
                <h3 data-aos="fade-up">STRENGTHS</h3>
            </div>
            <div class="col-md-6 withe f-text right-info">
                <p data-aos="fade-down">We are a company that firmly pursues its ideals with respect, trust, honesty and responsibility through a commitment 
                    to work in which excellence is required every day to provide the best to our customers.</p>
            </div>
        </div>
        <div class="row p-0 mt-5 justify-content-around pb-5 pb-md-0 ">
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/liderazgo-b.png')}}" alt="Liderazgo"/></div>
                    <div class="col-md-8 ml-md-4">
                        <h6 data-aos="fade-down-right">Leadership</h6>
                        <p class="text-justify">We are consolidated as leaders in the manufacture and marketing og high quality tracto parts.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2" data-aos="flip-up"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/innovacion-b.png')}}" alt="Innovacion"></div>
                    <div class="col-md-8 ml-md-4" data-aos="flip-down">
                        <h6>Innovation</h6>
                        <p class="text-justify">We integrate innovative processes inside and outside our company.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2" data-aos="slide-down"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/creatividad-b.png')}}" alt="Creatividad"></div>
                    <div class="col-md-8 ml-md-4">
                        <h6>Creativity</h6>
                        <p class="text-justify">We seek to be creative in developing new products and new processes for our customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/competitividad-b.png')}}" alt="Competitividad"></div>
                    <div class="col-md-8 ml-md-4" data-aos="fade-up">
                        <h6>Competitiveness</h6>
                        <p class=" text-justify">We seek at all times to be more competitive in the quality of our products and services.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2" data-aos="slide-down"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/calidad-b.png')}}" alt="Calidad"></div>
                    <div class="col-md-8 ml-md-4">
                        <h6>Quality</h6>
                        <p class=" text-justify">We work every day on the continuous improvement of our quality processes.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2" data-aos="slide-up"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/servicio-b.png')}}" alt="Servicio"></div>
                    <div class="col-md-8 ml-md-4" data-aos="slide-up">
                        <h6>Service</h6>
                        <p class=" text-justify">We advise our clients in order to achieve their growth and success</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- valores -->
<section class="valores">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2 mb-4">
                <h2 class="withe text-uppercase" data-aos="slide-rigth">VALUES</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('front/website/img/inicio/04_valores/competitividad.png')}}" alt="Tractobull Competitividad" data-aos="fade-down-right" />
            </div>
            <div class="col-md-6">
                <h6 class="withe">Competitiveness</h6>
                <div class="d-flex w-100 position-relative">
                    <span class="line-blue1"></span>
                    <p class="color-white">One of our main values at Tractobull is to lead the whole group towards competitiveness and profitability.</p>
                </div>
                <a href="{{route('about')}}" class="btn btn-primary conoce-responsive">MORE</a>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <h6 class="withe" data-aos="slide-down">Efficiency, quality and service</h6>
                <div class="d-flex w-100 position-relative">
                    <span class="line-blue"></span>
                    <p class="color-white">To satisfy with efficiency, quality and service the needs of our customers is one of our main values, as well as to promote 
                        the professional development of our staff, according to the needs of the company.</p>
                </div>
                <a href="{{route('about')}}" class="btn btn-primary conoce-responsive">MORE</a>
            </div>
            <div class="col-md-6">
                <img src="{{asset('front/website/img/inicio/04_valores/eficiencia.png')}}" alt="Eficiencia y calidad tractobull" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('front/website/img/inicio/04_valores/responsabilidad.png')}}" alt="Responsabilidad" />
            </div>
            <div class="col-md-6">
                <h6 class="withe" data-aos="slide-up">Environmental responsibility</h6>
                <div class="d-flex w-100 position-relative">
                    <span class="line-blue"></span>
                    <p class="color-white">Another of our important pillars at Tractobull is our responsibility to the environment. We respect and seek the well-being 
                        of the communities and ecological environment in which we operate.</p>
                </div>
                <a href="{{route('about')}}" class="btn btn-primary">MORE</a>
            </div>
        </div>
    </div>
</section>
<!-- productos -->
<section class="productos">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12 pb-2 text-center">
                <h3 class="withe">Our products</h3>
            </div>
            <hr class="index-hr">
        </div>

        <div class="row   tex-center p-2 align-middle d-flex justify-content-center">
            <p style="" class="text-center our-products">Our products are made in the factory with machinery of the highest technology, since we count with last 
                generation laser cutter and with our highly qualified personnel we can produce quality tracto parts.</p>
        </div>
        <div class="row tex-center p-5 align-middle d-flex justify-content-center">
            <a class="btn btn-secondary text-uppercase btn-blue" href="{{route('productos')}}">VIEW PRODUCTOS</a>
        </div>
    </div>
</section>
<!-- Testimonios-->
<section class="testimonios">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-down">
                <h3 class="mb-5 pt-2 text-uppercase">WHAT DO
                    OUR CLIENTS SAY?</h3>
            </div>
            <div class="col-md-6 text-md-right text-center pb-2 pb-md-0" data-aos="fade-down">
                <img src="{{asset('front/website/img/logo.png')}}" alt="Tractobull Logo Footer">
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-carousel-testimonial pb-4 pb-md-0">
                <div class="item" data-aos="zoom-out-up">
                    <!--<img clas="img-fluid" src="asset('front/website/img/inicio/06_clientes/luis_hernandez.png'); ?>" alt="testimonios tractobull cliente" />-->
                    <div class="d-block d-md-flex position-relative w-100 justify-content-md-between">
                        <h4>Luis Hernandez</h4>
                        <span>Guadalajara, Jalisco</span>
                    </div>
                    <p>“At the head of a transport company I have always counted on the excellent service of Tactobull, as well as the accessories always being delivered on time.”</p>
                </div>
                <div class="item" data-aos="zoom-out-down">
                    <!-- <img clas="img-fluid"  src="asset('front/website/img/inicio/06_clientes/rogelio_figueroa.png'); ?>" alt="testimonios tractobull cliente 1" />-->
                    <div class="d-block d-md-flex position-relative w-100 justify-content-md-between">
                        <h4>Rogelio Figueroa</h4>
                        <span>Culiacán, Sinalóa</span>
                    </div>
                    <p>“My logistical servides have never stopped thanks to the constant support of Tractobull, who are always aware of my needs.”</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Datos-->
@include('Eng.components.data')
<!-- Marcas -->
@include('Eng.components.brands')
    @include('Eng.components.footer')

    @include('components.scripts')
    
</body>
</html>