<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>TRACTOBULL | CONTACTO</title>
</head>
<body>
     <!-- Google Tag Manager (noscript) 2022/10-->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3Q95ZN"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    @include('components.menu')

     <!-- Header -->
  <header class="masthead contacto">
    <video id="my-video" class="video" loop muted autoplay playsinline   >
        <source src="{{asset('front/website/img/videos/contacto.mp4')}}" type="video/mp4" >
     </video>
     <div class="container">
     <div class="intro-text ">
       <div class="intro-lead-in"></div>
       <div class="intro-heading text-uppercase">CONTACTO</div>
        <!--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"><i class="fas fa-arrow-down"></i></a>-->
     </div>
   </div>
 </header>
 <section class="about-info pb-0  pad-res mt-5" id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
            <p class="mt-3">Contáctanos</p>
            <h2 class="gris-dark popins text-contact font-weight-normal">Si tienes alguna duda o comentario <span class="font-weight-bold">no dudes en contactarnos</span></h2>
            <h4 class="font-weight-normal text-contact2">Nuestro equipo de especialistas estará listo para ayudarte en todo momento.</h4>
            <span class="lineBlueContact"> </span>
        </div>
      </div>
    </div>
</section>


<section class="seccion pb-0 pt-2">
    <div class="container p-0">
        <div class="row mb-0 justify-content-between">
            <div class="col-12 col-sm-6 col-lg-4 item-ubicacion mb-2">
                <div class="d-flex justify-content-center w-100 lugar">
                    <div class="col-3 p-0 borde-azul"> <a href="" class="icon-contact"><i class="fa fa-map-marker-alt"></i></a> </div>
                    <div class="col-7 p-0 borde-azul"><h3 class="text-data">
                        Gabino Barreda #1014
                        Col. San Carlos,
                        Guadalajara, Jal. Mexico</h3></div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 item-ubicacion mb-2">
                <div class="d-flex justify-content-center w-100 lugar">
                    <div class="col-3 p-0 pb-2 borde-azul"> <a href="" class="icon-contact"><i class="fa fa-phone"></i></a> </div>
                    <div class="col-7 p-0 pb-2 borde-azul"><h3 class="text-data pt-3">01 33 2015 8805</h3></div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 item-ubicacion mb-2">
                <div class="d-flex justify-content-center w-100 lugar">
                    <div class="col-3 p-0 pb-2 borde-azul"> <a href="" class="icon-contact"><i class="fa fa-envelope"></i></a> </div>
                    <div class="col-7 p-0 pb-2 borde-azul"><h3 class="text-data pt-3">Correo electrónico</h3></div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="w-100 secion-map position-relative">
    <div class="container ">
        <div id="mapa" class="mapsection borde-azul"></div>
    </div>
</section>

<section class="about-info testimonios" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <p class="mt-3">Nos gustaría escucharte</p>
                <h2 class="gris-dark popins text-contact font-weight-normal">Envíanos <span class="font-weight-bold">un mensaje</span></h2>
                <span class="lineBlueContact"> </span>
            </div>
        </div>

        <div class="row" >
              <div class="col-12 mt-5 mb-5 p-0" >
                <div class="rounded theme-border w-100 d-block position-relative mt-5 back-blanco" >
                    <form method="POST" class="form-contacto" id="contact_info" name="contact_info" enctype="multipart/form-data" action="{{ route('mail') }}" >
                        @csrf
                        <div class="row" > 
                            <div class="col-12 col-md-4" >
                                <div class="form-group" >
                                    <input type="text" class="form-control placeholder-fix" name="name" placeholder="Nombre completo" required="required" >
                                    <label class="form-error error" for="name" ></label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4" >
                                <div class="form-group" >
                                    <input type="text" class="form-control placeholder-fix" name="email" placeholder="Correo electrónico" required="required" >
                                    <label class="form-error error" for="email" ></label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4" >
                                <div class="form-group" >
                                    <input type="text" class="form-control placeholder-fix" name="phone" placeholder="Teléfono" >
                                    <label class="form-error error" for="telephone" ></label>
                                </div>
                            </div>
                            <div class="col-12" >
                                <div class="form-group" >
                                    <textarea type="text" name="message" class="form-control placeholder-fix" placeholder="Mensaje" ></textarea>
                                    <label class="form-error error" for="message" ></label>
                                </div>
                            </div>
                            <div class="col-12" >
                                <div class="form-group" >
                                    <div class="g-recaptcha" data-sitekey="6LdKeLMZAAAAAKQju2glkMC8X0HGtRRXXLhIOGX1"></div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center" >
                                <div class="col-12 col-md-2  p-0" >
                                    <input class="btn btn-primary rounded-0 btn-xs btn-block btn-send" type="submit" value="ENVIAR " >
                                </div>
                            </div>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</section>


    <!-- Marcas -->
@include('components.marcas')





    @include('components.footer')

    @include('components.scripts')
    
</body>
</html>