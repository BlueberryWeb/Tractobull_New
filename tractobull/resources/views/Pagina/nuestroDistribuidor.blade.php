<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>TRACTOBULL | NUEVO DISTRIBUIDORES</title>
</head>
<body>
     <!-- Google Tag Manager (noscript) 2022/10-->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3Q95ZN"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    @include('components.menu')
 <!-- Header -->
 <header class="masthead-short distribuidores-form">
    <div class="container">
     
    </div>
  </header>
 <section class="register-form">

	<div class="container ">
		<div class="row justify-content-center mt-2 mb-5">
			<div class="col-md-8">
			<h2 class="gris-dark popins font-weight-normal text-center">Sé parte de nuestra red de  
                <span class=" font-weight-bold">distribuidores autorizados </span>
                <span class="font-weight-bold azul-dark"> Tractobull.</span></h2>
			</div>
		</div>
		<div class="row d-flex justify-content-center">

			<div class="pos-formulario col-md-9 ">	
				<form id="register_form" class="formulario-contacto " name="formID" role="form" method="post" enctype="multipart/form-data" action="#">
			    	<!-- ++++++++ Nombre +++++++++ -->
			        <div class="col-12 rows-forms  d-sm-flex justify-content-center"> 
				        <div class=" col-12 col-6 col-sm-6 sep-form-b">
				            <label class="label-text">Nombre*</label>
				            <div class="col-12 input-info p-0">
					            <input type="text" autocomplete="off" tabindex="1" data-required="true" title="first_name" id="first_name" name="first_name" class="form-control form-input" placeholder="" value="" style="">  
					            <label class="form-error error text-danger" for="first_name" generated="true"></label>
				            </div> 
				        </div>

				        <div class="col-12 col-6 col-sm-6  sep-form-b">
			               <!-- Correo Electrónico --> 
			               		<label class="label-text">E-mail*</label>
			                	<input type="text" autocomplete="off" tabindex="2" data-required="true" title="email" id="email" name="email" class="form-control form-input" placeholder="" value="" style=""> 
			                  <label class="form-error error text-danger" for="email" generated="true"></label> 
				        </div>
					</div>
			        <div class="col-12 p-0 rows-forms  d-sm-flex justify-content-center">        
				        <div class="col-12 col-sm-6  sep-form-b">
			               <div class="col-12 col-sm-12 col-md-12 input-info ">
			               		<label class="label-text">Empresa o Razón Social *</label>
			                	<input type="text" autocomplete="off" tabindex="2" title="company" id="company" name="company" class="form-control form-input" placeholder="" value="" style=""  required="required"> 
			                  <label class="form-error error text-danger" for="company" generated="true"></label>
			               </div> 
				        </div>
				        <div class="col-12 col-sm-6  sep-form-b">
			               <div class="col-12 col-sm-12 col-md-12 input-info ">
			               		<label class="label-text">RFC *</label>
			                	<input type="text" autocomplete="off" tabindex="2" title="rfc" id="rfc" name="rfc" class="form-control form-input" placeholder="" value="" style=""  required="required"> 
			                  <label class="form-error error text-danger" for="rfc" generated="true"></label>
			               </div> 
				        </div>
					</div>
					<div class="col-12 p-0 rows-forms  d-sm-flex justify-content-center">        
				        <div class="col-12 col-sm-6  sep-form-b">
			               <div class="col-12 col-sm-12 col-md-12 input-info ">
			               		<label class="label-text">Fecha de inicio de operacione  <small>(personas físicas)</small>*</label>
			                	<input type="text" autocomplete="off" tabindex="2" title="fecha_inicio" id="fecha_inicio" name="fecha_inicio" class="form-control form-input" placeholder="" value="" style=""  required="required"> 
			                  <label class="form-error error text-danger" for="company" generated="true"></label>
			               </div> 
				        </div>
				        <div class="col-12 col-sm-6  sep-form-b">
			               <div class="col-12 col-sm-12 col-md-12 input-info ">
			               		<label class="label-text">Teléfono*</label>
			                	<input type="text" autocomplete="off" tabindex="2" title="telephone" id="telephone" name="telephone" class="form-control form-input" placeholder="" value="" style=""  required="required"> 
			                  <label class="form-error error text-danger" for="rfc" generated="true"></label>
			               </div> 
				        </div>
					</div>
					<div class="col-12 p-0 rows-forms  d-sm-flex justify-content-center"> 
				        <div class="col-12 col-sm-12 sep-form-b">
			               <!-- Correo Electrónico -->
			               <div class="col-12 col-sm-12 col-md-12 input-info ">
			               		<label class="label-text">Domicilio Completo*</label>
			                	<input type="text" autocomplete="off" tabindex="2" data-required="true" title="address" id="address" name="address" class="form-control form-input" placeholder="" value="" style=""  required="required"> 
			                  <label class="form-error error text-danger" for="street" generated="true"></label>
			               </div> 
				        </div>
					</div>
					<div class="col-12 p-0 rows-forms  d-sm-flex justify-content-center"> 
				        <div class="col-12 col-sm-4 sep-form-b">
			               <!-- Correo Electrónico -->
			               <div class="col-12 col-sm-12 col-md-12 input-info ">
			               		<label class="label-text">Página web (opcional)</label>
			                	<input type="text" autocomplete="off" tabindex="2" data-required="true" title="website" id="website" name="website" class="form-control form-input" placeholder="" value="" style=""> 
			                  <label class="form-error error text-danger" for="website" generated="true"></label>
			               </div> 
				        </div>
				        <div class="col-12 col-sm-8  sep-form-b">
			               <!-- Correo Electrónico -->
			               <div class="col-12 col-sm-12 col-md-12 input-info ">
			               		<label class="label-text">Actividad Primaria*</label>
			                	<input type="text" autocomplete="off" tabindex="2" title="activity" id="activity" name="activity" class="form-control form-input" placeholder="" value="" style=""  required="required"> 
			                  <label class="form-error error text-danger" for="activity" generated="true"></label>
			               </div> 
				        </div>
					</div>
					<div class="col-12 p-0 rows-forms  d-sm-flex justify-content-center"> 
				        <div class="col-12 col-sm-12 sep-form-b">
			               <!-- Correo Electrónico -->
			               <div class="col-12 col-sm-12 col-md-12 input-info ">
			               		<label class="label-text">Productos que Comercializa *</label>
			                	<input type="text" autocomplete="off" tabindex="2" data-required="true" title="products" id="products" name="products" class="form-control form-input" placeholder="" value="" style=""  required="required"> 
			                  <label class="form-error error text-danger" for="products" generated="true"></label>
			               </div> 
				        </div>
					</div>
					
					<div class="col-12 p-0 rows-forms d-sm-flex justify-content-center"> 
				        <div class="col-12 col-sm-6  sep-form-b">
			               <!-- Copasswordrreo Electrónico -->
			               <div class="col-12 col-sm-12 col-md-12 input-info ">
			               		<label class="label-text">Número de Empleados  *</label>
			                	<input type="text" autocomplete="off" tabindex="2" data-required="true" title="employees" id="employees" name="employees" class="form-control form-input" placeholder="" value="" style=""  required="required"> 
			                  	<label class="form-error error text-danger" for="employees" generated="true"></label>
			               </div> 
				        </div>
				        <div class="col-12 col-sm-6  sep-form-b">
			               <!-- Correo Electrónico -->
			               <div class="col-12 col-sm-12 col-md-12 input-info ">
			               		<label class="label-text">Promedio Ventas Anuales * </label>
			                	<input type="text" autocomplete="off" tabindex="2" title="anual_sales" id="anual_sales" name="anual_sales" class="form-control form-input" placeholder="" value="" style=""  required="required"> 
			                  	<label class="form-error error text-danger" for="anual_sales" generated="true"></label>
			               </div> 
				        </div>
					</div>
					
				        <div class="col-12  session-rem sep-form-b">
				            <input type="checkbox" name="terms"  required="required">
				            <a href="{{route('terminos')}}"> He leído y acepto los términos y condiciones</a> 
				            <a href="{{route('aviso')}}"> y la política de privacidad </a>  de Tractobull
							<label class="form-error error text-danger" for="terms" generated="true"></label>
				        </div> 
				        <div class="col-12" >
                            <div class="form-group" >
                                <div class="g-recaptcha" data-sitekey="6LdKeLMZAAAAAKQju2glkMC8X0HGtRRXXLhIOGX1"></div>
                            </div>
                        </div>
				        <div class="col-12 d-flex justify-content-center mt-4 responsive-b-space">
				            <!-- Boton -->
				            <button  type="submit" id="register" class="btn btn-lg btn-primary ">ENVIAR SOLICITUD  </button>  
				        </div> 
				        
				</form>			   		
        	</div>
        </div>
	</div>

</section>




    @include('components.footer')

    @include('components.scripts')
    
</body>
</html>