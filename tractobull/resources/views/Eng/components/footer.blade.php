<!-- Footer -->
<footer class="footer">
    <div class="container">
      <!-- -->
      <div class="row">
      	<div class="col-md-4">
      		<img src="{{asset('front/website/img/logo.png')}}" alt="Tractobull Logo Footer" >
      		<p class="mt-4 text-justify text-lg-left text-sm-center text-xs-center">
            Tracto Bull Store is a Mexican company dedicated to the manufacture and marketing of 
            parts and accessories for truck tractors in national and foreign territory.
          </p>
      		<p>
            Maintaining the focus on meeting the needs of our customers day by day through an excellent service.  
          </p>
      	</div>
      	<div class="col-md-2 text-lg-left text-sm-center text-xs-center">
      		<h4  class="footer-title"> Menu</h4>
      		<ul class="footer-links mt-4">
      			<li><a href="{{route('index')}}"><i class="fas fa-caret-right"></i> Index</a></li>
      			<li><a href="{{route('about')}}"><i class="fas fa-caret-right"></i>Who we are</a></li>
      			<li><a href="{{route('products')}}"><i class="fas fa-caret-right"></i> Products</a></li>
      			<li><a href="{{route('dealers')}}"><i class="fas fa-caret-right"></i> Dealers</a></li>
      			<li><a href="{{route('contact')}}"><i class="fas fa-caret-right"></i> Contac us</a></li>
      		</ul>
      	</div>
      	<div class="col-md-3 text-lg-left text-sm-center text-xs-center">
      		<h4  class="footer-title">Legal</h4>
      		<ul class="footer-links mt-4">
      			<li><a href="{{route('privacity')}}"><i class="fas fa-caret-right"></i>   Privacy Policy</a></li>
      			<li><a href="{{route('terms')}}"><i class="fas fa-caret-right"></i> Terms and conditions</a></li>
      			<li><a href="{{route('cookiesPolicy')}}"><i class="fas fa-caret-right"></i> Cookie policy</a></li>
      			<li><a href="{{route('contact')}}"><i class="fas fa-caret-right"></i> Contact & Support</a></li>
            <li><a href="https://tractobull.co/login/index.php"><i class="fas fa-caret-right"></i> <span>Capacitaciones</span></a></li>      		
      		</ul>
      	</div>
      	<div class="col-md-3 text-lg-left text-sm-center text-xs-center">
      		<h4 class="withe footer-title">
            Follow us   
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
      		<h4 class="footer-title">Subscribe to our newsletter</h4>
      		<div class="newlester">
                <div class="input-group">
                    <form class="form-inline" method="post" action="asset('newsletterSubscribers'); ?>" id="newsletterForm">
                        <input type="text" required="required" class="form-control borde-buscador" placeholder="Correo Electrónico" name="email">
                        <button class="sb-search btn-primary" type="submit" value="Enviar">SUBSCRIBE ME</button>
                    </form>
                </div>
            </div>

      	</div>
      	
      </div>
       <hr class="mb-4 mt-4">
      <div class="row align-items-center ">
        <div class="col-md-6">
          <span class="copyright"><strong class="withe">Tractobull</strong> &copy; <?php echo date('Y'); ?>. All rights reserved.</span>
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

