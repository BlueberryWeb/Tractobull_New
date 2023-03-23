<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>TRACTOBULL | NOSOTROS</title>
</head>
<body>
     <!-- Google Tag Manager (noscript) 2022/10-->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3Q95ZN"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    @include('components.menu')

     <!-- Header -->
  <header class="masthead about">
    <video id="my-video" class="video" loop muted autoplay playsinline   >
         <source src="{{asset('front/website/img/videos/nosotros.mp4')}}" type="video/mp4" >
      </video>
    <div class="container">
      <div class="intro-text">
        <div class="years">Más de 30 años de experiencia nos avalan.</div> 
        <div class="intro-heading text-uppercase">NOSOTROS</div>
        <!--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"><i class="fas fa-arrow-down"></i></a>-->
      </div>
    </div>
  </header>
  <section class="about-info bg-light pad-res " id="services">
  	<div class="container">
	  	<div class="row">
	  		<div class="col-md-6">
	  			<img class="img-fluid" src="{{asset('front/website/img/nosotros/empresa_lider.png')}}" alt="Tractobull about"/>
	  		</div>
	  		<div class="col-md-6 ">
	  			<img  class="pt-3 pb-3" src="{{asset('front/website/img/logo.png')}}" alt="Tractobull Logo Footer" />
	  			<h2 class="gris-dark popins font-weight-normal">Empresa líder en la
                    <span class=" azul-dark">fabricación y exportación</span>  
                    de partes <span class="font-weight-bold">y accesorios para</span>
                    <span class="azul-dark font-weight-bold"> tracto camión</span></h2>
	  			<p class="mt-3">
                    Tracto Bull Store es una empresa mexicana dedicada a la fabricación y comercialización de partes y accesorios para 
                    tracto camión en territorio Nacional y extranjero con una experiencia de más de 30 años en el ramo, siempre manteniendo 
                    el enfoque en cubrir las necesidades de nuestros clientes día con día a través de un servicio de excelencia.
	  			</p>
	  			<div class="text-justify d-flex justify-content- about-values m-3">
            <div class="row">
              <div class="col-12 col-md-4 responsive-bt-space" >
			          <div class="back-circle-image">
                        <img  class="mr-3" src="{{asset('front/website/img/nosotros/Pasion.png')}}" alt="Tractobull About" />
                    </div><br/> 
                    <span class="about-text-icons text-uppercase"> PASIÓN</span>                        
              </div>
              <div class="col-12 col-md-4 p-0 responsive-bt-space fortaleza-pl" >
                    <div class="back-circle-image">
                        <img  class="mr-3" src="{{asset('front/website/img/nosotros/Profesionalismo.png')}}" alt="Tractobull About 2" />
                    </div>
                    <span class="about-text-icons text-uppercase">PROFESIONALISMO</span> 
              </div>
			
              <div class="col-12 col-md-4 responsive-bt-space " >
                    <div class="back-circle-image">
                        <img  class="mr-3" src="{{asset('front/website/img/nosotros/Experiencia.png')}}" alt="Tractobull About 3" />
                    </div><span class="about-text-icons text-uppercase"> EXPERIENCIA</span>
              </div>
            </div>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-6">
	  			<h3 class="gris-dark popins font-weight-normal">
                    Empresa líder en la <span class=" azul-dark">fabricación y exportación </span> 
                    de partes <span class="font-weight-bold">y accesorios para </span><span class="azul-dark font-weight-bold"> tracto camión</span></h3>
	  		</div>
	  		<div class="col-md-6">
	  			<p>
                    Nuestra Visión es exceder las expectativas de nuestros clientes creando partes de calidad y otorgando servicio excepcional a 
                    cada uno de nuestros clientes. Tracto Bull es la marca de tracto partes más usada por los transportistas.
                </p>
	  		</div>
	  	</div>	  	
  	</div>  
  </section>
  <div class="row h-100 index-video-bg m-0" style="height: 400px;">
       <div class="col-sm-12 my-auto  w-100 d-flex ">
         <div class="mx-auto">
                <button class="play play-btn video-btn"  data-toggle="modal" data-src="https://vimeo.com/417366014" data-target="#myModal">
                    <img src="{{asset('front/website/img/inicio/02_video/play.png')}}" alt="Tracktobull Play Video">
                </button>
         </div>
      </div>
  </div>
  <section class="about-products">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 text-center p-4"><h4 class="gris-dark">Nuestros productos</h4></div>
  		</div>
  		<div class="row">
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Caja de herramientas.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Caja de herramientas</h4>
  			</div>
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Escapes.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Escapes</h4>
  			</div>
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Otros productos.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Otros Productos</h4>
  			</div>
  			 			
  		</div>
  		<div class="row mt-3">
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Partes de colision.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Partes de colisión</h4>
  			</div>
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Servicios.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Servicios</h4>
  			</div>
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Tanques y accesorios.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Tanques y accesorios</h4>
  			</div> 
  		</div>
  	</div>
  </section>
   <!-- Datos-->
    @include('components.datos')
  <!-- Marcas -->
  @include('components.marcas')

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <button type="button" class="close  action-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
       <div class="embed-responsive embed-responsive-16by9">      
          <iframe id="video-corp" src="https://player.vimeo.com/video/417366014?loop=1" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div> 





    @include('components.footer')

    @include('components.scripts')
    
</body>
</html>