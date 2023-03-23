<!-- Footer -->
<footer class="footer">
    <div class="container">
      <!-- -->
      <div class="row">
      	<div class="col-md-4">
      		<img src="{{asset('front/website/img/logo.png')}}" alt="Tractobull Logo Footer" >
      		<p class="mt-4 text-justify text-lg-left text-sm-center text-xs-center">
                Tracto Bull Store es una empresa mexicana dedicada a la fabricación y comercialización de partes y accesorios para tracto camión en territorio Nacional y extranjero.
          </p>
      		<p>
                Manteniendo el enfoque en cubrir las necesidades de nuestros clientes día con día a través de un servicio de excelencia.  </p>
      		
      	</div>
      	<div class="col-md-2 text-lg-left text-sm-center text-xs-center">
      		<h4  class="footer-title"> Menú</h4>
      		<ul class="footer-links mt-4">
      			<li><a href="{{url('/')}}"><i class="fas fa-caret-right"></i> Inicio</a></li>
      			<li><a href="{{route('nosotros')}}"><i class="fas fa-caret-right"></i>Nosotros</a></li>
      			<li><a href="{{route('productos')}}"><i class="fas fa-caret-right"></i> Productos</a></li>
      			<li><a href="{{route('distribuidores')}}"><i class="fas fa-caret-right"></i> Distribuidores</a></li>
      			<li><a href="{{route('contacto')}}"><i class="fas fa-caret-right"></i> Contacto</a></li>
      		</ul>
      	</div>
      	<div class="col-md-3 text-lg-left text-sm-center text-xs-center">
      		<h4  class="footer-title">Legal</h4>
      		<ul class="footer-links mt-4">
      			<li><a href="{{route('aviso')}}"><i class="fas fa-caret-right"></i>  Aviso de Privacidad</a></li>
      			<li><a href="{{route('terminos')}}"><i class="fas fa-caret-right"></i> Términos y Condiciones</a></li>
      			<li><a href="{{route('cookies')}}"><i class="fas fa-caret-right"></i> Políticas de Cookies</a></li>
      			<li><a href="{{route('contacto')}}"><i class="fas fa-caret-right"></i> Contacto y Soporte</a></li>
            <li><a href="https://tractobull.co/login/index.php"><i class="fas fa-caret-right"></i> <span>Capacitaciones</span></a></li>      		
      		</ul>
      	</div>
      	<div class="col-md-3 text-lg-left text-sm-center text-xs-center">
      		<h4 class="withe footer-title">
                Síguenos    
          </h4>
      		<div class="row"> 
              <ul class="list-inline social-buttons">
                <!-- <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li> -->
                <li class="list-inline-item col-12">
                  <a href="https://www.facebook.com/tractobullstore/" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <!-- <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li> -->
              </ul> 
      		</div>
      	</div>
      </div>
      <div class="row">
      	<div class="col-md-4"> 
      	</div>
      	<div class="col-md-8">
      		<h4 class="footer-title">Suscríbete a nuestro boletín de noticias</h4>
      		<div class="newlester">
                <div class="input-group">
                    <form class="form-inline" method="post" action="asset('newsletterSubscribers'); ?>" id="newsletterForm">
                        <input type="text" required="required" class="form-control borde-buscador" placeholder="Correo Electrónico" name="email">
                        <button class="sb-search btn-primary" type="submit" value="Enviar">SUSCRIBIRME></button>
                    </form>
                </div>
            </div>

      	</div>
      	
      </div>
       <hr class="mb-4 mt-4">
      <div class="row align-items-center ">
        <div class="col-md-6">
          <span class="copyright"><strong class="withe">Tractobull</strong> &copy; <?php echo date('Y'); ?>. Todos los derechos reservados.</span>
        </div>
        <div class="col-md-2">
          
        </div>
       
        <div class="col-md-4">
          <ul class="list-inline quicklinks text-right">
            <li class="list-inline-item">
              <a href="//blueberry.mx" class="withe" target="_new"><img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785642/we-materialize_xwuusu.gif" class="img-fluid logo-bb"/></a>
            </li>            
          </ul>
        </div>
      </div>
    </div>
  </footer>

