<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>TRACTOBULL | WHO WE ARE</title>
</head>
<body>
     <!-- Google Tag Manager (noscript) 2022/10-->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3Q95ZN"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    @include('Eng.components.menu')

     <!-- Header -->
  <header class="masthead about">
    <video id="my-video" class="video" loop muted autoplay playsinline   >
         <source src="{{asset('front/website/img/videos/nosotros.mp4')}}" type="video/mp4" >
      </video>
    <div class="container">
      <div class="intro-text">
        <div class="years">More than 30 years of experience guarantee us.</div> 
        <div class="intro-heading text-uppercase">WHO WE ARE</div>
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
	  			<h2 class="gris-dark popins font-weight-normal">Leading
                    <span class=" azul-dark">manufacturer and exporter</span>  
                    of <span class="font-weight-bold">truck parts</span>
                    <span class="azul-dark font-weight-bold"> and accessories</span></h2>
	  			<p class="mt-3">
                    Tracto Bull Store is a Mexican company dedicated to the manufacture and marketing of parts and accessories for 
                    truck tractors in national and foreign territory with an experience of more than 30 years in the field, always 
                    keeping the focus on meeting the needs of our customers day with Day through an excellent service.
	  			</p>
	  			<div class="text-justify d-flex justify-content- about-values m-3">
            <div class="row">
              <div class="col-12 col-md-4 responsive-bt-space" >
			          <div class="back-circle-image">
                        <img  class="mr-3" src="{{asset('front/website/img/nosotros/Pasion.png')}}" alt="Tractobull About" />
                    </div><br/> 
                    <span class="about-text-icons text-uppercase"> PASSION</span>                        
              </div>
              <div class="col-12 col-md-4 p-0 responsive-bt-space fortaleza-pl" >
                    <div class="back-circle-image">
                        <img  class="mr-3" src="{{asset('front/website/img/nosotros/Profesionalismo.png')}}" alt="Tractobull About 2" />
                    </div>
                    <span class="about-text-icons text-uppercase">PROFESSIONALISM</span> 
              </div>
			
              <div class="col-12 col-md-4 responsive-bt-space " >
                    <div class="back-circle-image">
                        <img  class="mr-3" src="{{asset('front/website/img/nosotros/Experiencia.png')}}" alt="Tractobull About 3" />
                    </div><span class="about-text-icons text-uppercase"> EXPERIENCE</span>
              </div>
            </div>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-6">
	  			<h3 class="gris-dark popins font-weight-normal">
                    Leading <span class=" azul-dark">manufacturer and exporter </span> 
                    of <span class="font-weight-bold">truck parts </span><span class="azul-dark font-weight-bold"> and accessories</span></h3>
	  		</div>
	  		<div class="col-md-6">
	  			<p>
                    Our Vision is to exceed our customer's expectations by creating quality parts and providing exceptional service to each of 
                    our customers. Tracto Bull is the most widely used brand of tracto parts by the transportation.
                </p>
	  		</div>
	  	</div>	  	
  	</div>  
  </section>
  <div class="row h-100 index-video-bg m-0" style="height: 400px;">
       <div class="col-sm-12 my-auto  w-100 d-flex ">
         <div class="mx-auto">
                <button class="play play-btn video-btn"  data-toggle="modal" data-src="https://vimeo.com/436118208" data-target="#myModal">
                    <img src="{{asset('front/website/img/inicio/02_video/play.png')}}" alt="Tracktobull Play Video">
                </button>
         </div>
      </div>
  </div>
  <section class="about-products">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 text-center p-4"><h4 class="gris-dark">Our products</h4></div>
  		</div>
  		<div class="row">
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Caja de herramientas.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Toolbox</h4>
  			</div>
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Escapes.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Escapes</h4>
  			</div>
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Otros productos.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Other products</h4>
  			</div>
  			 			
  		</div>
  		<div class="row mt-3">
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Partes de colision.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Collision parts</h4>
  			</div>
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Servicios.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Services</h4>
  			</div>
  			<div class="col-md-4">
  				<img class="img-fluid" src="{{asset('front/website/img/nosotros/03_productos/Tanques y accesorios.png')}}" alt="Tractobull ">
  				<h4 class="withe category-title">Tanks and accessories</h4>
  			</div> 
  		</div>
  	</div>
  </section>
   <!-- Datos-->
    @include('Eng.components.data')
  <!-- Marcas -->
  @include('Eng.components.brands')

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





    @include('Eng.components.footer')

    @include('components.scripts')
    
</body>
</html>