<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('front/website/img/logo.png')}}" alt="Tracto Bull Logo" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item my-auto">
            <a class="nav-link" href="{{url('/')}}">INICIO </a>
          </li>
          <li class="nav-item  my-auto">
            <a class="nav-link " href="{{route('nosotros')}}">NOSOTROS</a>
          </li>
          <li class="nav-item  my-auto">
            <a class="nav-link " href="{{route('productos')}}">PRODUCTOS</a>
          </li>
           <li class="nav-item  my-auto">
            <a class="nav-link " href="{{route('distribuidores')}}">DISTRIBUIDORES</a>
          </li>	
          <li class="nav-item  my-auto">
            <a class="nav-link " href="{{route('contacto')}}">CONTACTO</a>
          </li>
          <li class="nav-item  my-auto">
            <div class="row">
              <div class="col-md-3 p-0"> 
                <a class="nav-link click-lang" data-lang="es" href="#">
                  ESP
                </a> 
              </div>
              <div class="col-md-2 p-0">
               <span class="nav-link p-0" style="padding:1.1em .8em !important;">/</span>
              </div>
              <div class="col-md-3 p-0">
                <a class="nav-link click-lang" href="#" data-lang="en"  style="padding-left: 0px!important;">
                  ENG
                </a> 
              </div>
            </div>
          </li> 
          <!--<li class="nav-item dropdown my-auto">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-globe"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li class="nav-link p-1 active ">
                <a class="nav-link click-lang" data-lang="es" href="#">
                  
                </a> 
              </li>
              <li class="nav-link p-1"><a href="//tractobullusa.com">English</a></li>              
            </ul> 
          </li>--> 
          <li class="nav-item ml-2  my-auto">
            <a class="nav-link add-dist" href="{{route('nuevoDistribuidor')}}">QUIERO SER DISTRIBUIDOR</a>
          </li>    
                   
        </ul>
      </div>
    </div>
  </nav> 