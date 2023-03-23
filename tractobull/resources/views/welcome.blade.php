
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
    @include('components.menu')
     <!-- Header -->
 <header class="masthead index">
    <video id="my-video" class="video" loop muted autoplay playsinline>
        <source src="{{ asset('front/website/img/videos/inicio.mp4')}}" type="video/mp4">
    </video>
    <div class="intro-text ptn-index">
        <div class="intro-heading text-uppercase">TRACTO BULL <br/> ES PODER</div>
        <div class="intro-lead-in">Todas las <strong>Refracciones y Accesorios </strong><br/>para Tracto Camiones</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{route('nosotros')}}">CONOCER MÁS</a>
    </div>
</header>
<div class="video-modal"> 
    <img src="{{ asset('front/website/img/inicio/02_video/tracto-bg.jpg')}}"/>
    <div class="boton-play-index">
        <button class="play play-btn video-btn" data-toggle="modal" data-src="https://vimeo.com/417366014" data-target="#myModal">
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
                    <span class="withe">Somos la empresa líder en la </span><br>
                    <span class="azul-dark">fabricación y exportación</span>
                    <span class="withe">de</span><br>
                    <span class="gris-light roboto font-weight-normal">partes y accesorios para Tracto Camiones</span>
                </h4>
                <a href="{{route('nosotros')}}" class="btn btn-primary conoce-responsive mt-2">CONOCER MÁS</a>
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
                    <iframe id="video-corp" src="https://player.vimeo.com/video/417366014?loop=1" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="fortalezas w-100 d-block position-relative fortaleza-t-space">
    <div class="container">
        <div class="row">
            <div class="col-md-6 withe text-uppercase">
                <h3 data-aos="fade-up">FORTALEZAS</h3>
            </div>
            <div class="col-md-6 withe f-text right-info">
                <p data-aos="fade-down">Somos una empresa que persigue firmemente sus ideales con respeto, confiaza, honestidad y 
                    responsabilidad por medio de un compromiso de trabajo en el que día a día se exige la excelencia para brindar la mejor a nuestros clientes.</p>
            </div>
        </div>
        <div class="row p-0 mt-5 justify-content-around pb-5 pb-md-0 ">
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/liderazgo-b.png')}}" alt="Liderazgo"/></div>
                    <div class="col-md-8 ml-md-4">
                        <h6 data-aos="fade-down-right">Liderazgo</h6>
                        <p class="text-justify">Nos vemos consolidando como líderes en la fabricación y comercialización de tractoparte de alta calidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2" data-aos="flip-up"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/innovacion-b.png')}}" alt="Innovacion"></div>
                    <div class="col-md-8 ml-md-4" data-aos="flip-down">
                        <h6>Innovación</h6>
                        <p class="text-justify">Integramos procesos innovadores dentro y fuera de nuestra compañía.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2" data-aos="slide-down"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/creatividad-b.png')}}" alt="Creatividad"></div>
                    <div class="col-md-8 ml-md-4">
                        <h6>Creatividad</h6>
                        <p class="text-justify">Buscamos ser creativos en el desarrollo de nuevos productos y nuevos procesos para nuestros clientes.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/competitividad-b.png')}}" alt="Competitividad"></div>
                    <div class="col-md-8 ml-md-4" data-aos="fade-up">
                        <h6>Competitividad</h6>
                        <p class=" text-justify">Buscamos en todo momento ser más competitivos en la calidad de nuestros productos y nuestros servicios.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2" data-aos="slide-down"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/calidad-b.png')}}" alt="Calidad"></div>
                    <div class="col-md-8 ml-md-4">
                        <h6>Calidad</h6>
                        <p class=" text-justify">Trabajamos todos los días en la mejora continua de nuestros procesos de calidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 card">
                <div class="row pt-4 pb-2 pl-1 pr-1">
                    <div class="col-md-2" data-aos="slide-up"><img class="" src="{{asset('front/website/img/inicio/03_fortalezas/servicio-b.png')}}" alt="Servicio"></div>
                    <div class="col-md-8 ml-md-4" data-aos="slide-up">
                        <h6>Servicio Completo</h6>
                        <p class=" text-justify">Asesoramos a nuestros clientes con la finalidad de lograr su crecimiento y su éxito.</p>
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
                <h2 class="withe text-uppercase" data-aos="slide-rigth">NUESTROS VALORES</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('front/website/img/inicio/04_valores/competitividad.png')}}" alt="Tractobull Competitividad" data-aos="fade-down-right" />
            </div>
            <div class="col-md-6">
                <h6 class="withe">Competitividad</h6>
                <div class="d-flex w-100 position-relative">
                    <span class="line-blue1"></span>
                    <p class="color-white">Uno de nuestros principales valores en Tractobull es llevar a todo el grupo hacia la competitividad y la rentabilidad.</p>
                </div>
                <a href="{{route('nosotros')}}" class="btn btn-primary conoce-responsive">CONOCER MÁS</a>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <h6 class="withe" data-aos="slide-down">Eficiencia, calidad y servicio</h6>
                <div class="d-flex w-100 position-relative">
                    <span class="line-blue"></span>
                    <p class="color-white">Satisfacer con eficiencia, calidad y servicio las necesidades de nuestros clientes es uno de nuestros principales valores, 
                        así como impulsar el desarrollo profesional de nuestro personal, de acuerdo con las necesidades de la empresa.</p>
                </div>
                <a href="{{route('nosotros')}}" class="btn btn-primary conoce-responsive">CONOCER MÁS</a>
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
                <h6 class="withe" data-aos="slide-up">Responsabilidad ambiental</h6>
                <div class="d-flex w-100 position-relative">
                    <span class="line-blue"></span>
                    <p class="color-white">Otro de nuestros pilares importantes de Tractobull es la responsabilidad con el medio ambiente por ello respetamos y procuramos el 
                        bienestar de las comunidades y el entorno ecológico en donde operamos.</p>
                </div>
                <a href="{{route('nosotros')}}" class="btn btn-primary">CONOCER MÁS</a>
            </div>
        </div>
    </div>
</section>
<!-- productos -->
<section class="productos">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12 pb-2 text-center">
                <h3 class="withe">Nuestros productos</h3>
            </div>
            <hr class="index-hr">
        </div>

        <div class="row   tex-center p-2 align-middle d-flex justify-content-center">
            <p style="" class="text-center our-products">Nuestros productos están hechos en fábrica con maquinaría de la más alta tecnología, 
                ya que contamos con cortadora Laser de última generación y con nuestro personal altamente calificado podemos producir tracto partes de calidad.</p>
        </div>
        <div class="row tex-center p-5 align-middle d-flex justify-content-center">
            <a class="btn btn-secondary text-uppercase btn-blue" href="{{route('productos')}}">VER PRODUCTOS</a>
        </div>
    </div>
</section>
<!-- Testimonios-->
<section class="testimonios">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-down">
                <h3 class="mb-5 pt-2 text-uppercase">¿QUÉ DICEN  NUESTROS CLIENTES?</h3>
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
                    <p>“Al mando de una empresa transportista siempre he contado con el excelente servicio de Tractobull, así como los accesorios siempre se entregan en tiempo y forma”.</p>
                </div>
                <div class="item" data-aos="zoom-out-down">
                    <!-- <img clas="img-fluid"  src="asset('front/website/img/inicio/06_clientes/rogelio_figueroa.png'); ?>" alt="testimonios tractobull cliente 1" />-->
                    <div class="d-block d-md-flex position-relative w-100 justify-content-md-between">
                        <h4>Rogelio Figueroa</h4>
                        <span>Culiacán, Sinalóa</span>
                    </div>
                    <p>“Mis servicios de logística nunca han parado gracias a que cuento con el apoyo constante de Tractobull, estando en todo momento al pendiente de mis necesidades.”</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Datos-->
@include('components.datos')
<!-- Marcas -->
@include('components.marcas')
    @include('components.footer')

    @include('components.scripts')
    
</body>
</html>