<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>TRACTOBULL | PRODUCTOS</title>
</head>
<body>
     <!-- Google Tag Manager (noscript) 2022/10-->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3Q95ZN"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @include('components.menu')
    <style>
        .label-prod {
          font-size: 18px;
          color: #464646;
          text-align: start;
        }
      
        .signo {
          font-weight: 100;
          top: 10%;
          right: 0;
          font-size: 20px;
          position: absolute;
        }
      
        .label-prod2 {
          color: #464646 !important;
          font-weight: 200;
        }
      
        .checkbox-prod {
          border: 1px solid #464646;
          border-radius: 10px;
        }
      
        .btn-callapse {
          width: 250px;
          position: relative;
        }
      
        .btn-callapse:hover {
          background-color: #86C1F3;
        }
      
        .side-picture {
          transition: border-color 0.5s;
          width: 150px;
        }
      
        .side-picture img {
          width: 150px;
          height: 120px;
        }
      
        /* img.state:hover {
          background-color: transparent !important;
        } */
      
        /* .side-picture:hover {
          border-color: #36393b !important;
        } */
      
        .side-picture.active {
          transition: border 0.5s;
          border: 3px solid #2c4f78 !important;
        }
      
        #main-image {
          width: 100%;
          height: auto;
        }
      </style>
      
      <!-- Header -->
      <header class="masthead about">
        <video id="my-video" class="video" loop muted autoplay playsinline>
          <source src="{{asset('front/website/img/videos/productos.mp4')}}" type="video/mp4">
        </video>
        <div class="container">
          <div class="intro-text">
            <div class="intro-lead-in"></div>
            <div class="intro-heading text-uppercase poppins">PRODUCTOS</div>
            <!--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"><i class="fas fa-arrow-down"></i></a>-->
          </div>
        </div>
      </header>
      <section class="about-info mt-5  pad-res" id="services">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img class="img-fluid" src="asset{{('front/website/img/productos/productos_fabricados.png')}}" alt="Tractobull about">
            </div>
            <div class="col-md-6 ">
              <img class="pt-3 pb-3" src="{{asset('front/website/img/logo.png')}}" alt="Tractobull Logo Footer">
              <h2 class="gris-dark popins font-weight-normal">Productos fabricados <span class=" font-weight-bold">con la más alta</span><span class="font-weight-bold azul-dark"> tecnología.</span></h2>
              <p class="">
                Nuestros productos están hechos en fábrica con maquinaría de la más alta tecnología, ya que contamos con cortadora Laser de 
                última generación y con nuestro personal altamente calificado podemos producir tracto partes de calidad.
              </p>
            </div>
          </div>
      
        </div>
      </section>
      <section class="about-products-2">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center p-4">
              <h4 class="gris-dark text-uppercase">PRODUCTOS</h4>
            </div>
          </div>
      
          <div class="container-fluid">
            <div id="myApp">
              <div v-if="productoselect == 'vacio'" class="row">
                <div style="border-right: solid #EAEAEA 0.5px;" class="col-12 col-sm-12 col-md-12 col-lg-3">
                  <h4>FAMILIAS</h4>
                  <a @click="LimpiarFiltro" style="background-color: #1E507B; color: white; border-radius: 12px; width: 100%;" class="btn mt-2">
                    Limpiar filtros
                  </a>
                  <hr>
                  <a @click="valueEscapes" class="btn btn-callapse" data-toggle="collapse">
                    <h3 class="label-prod">Escapes </h3>
                    <span class="signo"><b>+</b></span>
                  </a>
                  <div v-for="familia in familias">
                    <div v-if="familia.name != 'Escapes'">
                      <a :href="'#'+familia.name" class="btn btn-callapse" data-toggle="collapse">
                        <h3 class="label-prod">{{familia.name}} </h3>
                        <span class="signo"><b>+</b></span>
                      </a>
                      <div :id="familia.name" class="collapse">
                        <div v-for="categoria in categorias">
                          <div v-if="categoria.id_familia == familia.id">
                            <div class="form-check">
                              <!-- <input class="form-check-input checkbox-prod" type="checkbox" value="" id="flexCheckDefault"> -->
                              <input class="form-check-input checkbox-prod" type="checkbox" name="test" :id="categoria.id" v-model="category" :value='categoria.id' @change="uniqueCheck">
                              <label style="margin-left: 10px;" class="form-check-label label-prod2" for="flexCheckDefault">
                                {{categoria.name}}
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex justify-content-center container">
                    <a href="https://tractobull.mx/distribuidores" style="background-color: #1E507B; color: white; width: 100%; border-radius: 12px;" class="btn mt-2">
                      Contacta a un distribuidor
                    </a>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                  <div class="row">
                    <div v-for="producto in filterProducts" class="col-12 col-sm-12 col-md-12 col-lg-4 mt-5" style="border-right: solid #EAEAEA 0.5px; border-left: solid #EAEAEA 0.5px;">
                      <div style="border: none;" class="thumbnail">
                        <div class="caption">
                          <div v-for="categoria in categorias">
                            <div v-for="familia in familias">
                              <div v-if="categoria.id_familia == familia.id">
                                <div v-if="categoria.id == producto.id_categoria">
                                  <small style="color: #ADADAD;">{{familia.name}} {{categoria.name}}</small>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div v-if="producto.id_categoria == 'escapes'">
                            <small style="color: #ADADAD;">Escapes</small>
                          </div>
                          <h5 class="mt-2">{{producto.name}}</h5>
                          <div class="text-center mt-4">
                            <img @click="showproduct(producto.id)" style="cursor: pointer;" :src="'https://tractobull.beirat.solutions/'+producto.portada" alt="Sin imagen" width="320" class="img-responsive">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div v-show="productoselect != 'vacio'">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6 container">
                    <div v-for="categoria in categorias">
                      <div v-if="categoria.id == productoselect.id_categoria">
                        <h6 style="color: #464646; word-spacing: 0.45rem; margin-top: 15px;">Inicio > Productos
                          > {{categoria.name}} > {{productoselect.name}}</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="d-flex justify-content-end">
                      <button style="background-color: #1E507B; color: white; border-radius: 12px;" type="button" class="btn " @click="productoSelectCancel()">Regresar a productos</button>
                    </div>
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6 container">
      
                    <div class="container-fluid bg-mejor-plaza py-5">
                      <div class="container">
                        <div class="row ">
                          <!--Side picture-->
                          <div class=" col-12 col-lg-2  mb-md-0 mb-4" style="display:block">
                            <div class="row">
                              <div class="col-3 col-sm-3 col-lg-12  mb-3" role="button">
                                <div class="justify-content-center side-picture">
                                  <img :src="'https://tractobull.beirat.solutions/'+productoselect.portada" class="img-fluid " />
                                </div>
                              </div>
      
                              <div v-for="imagen in imagenes" v-show="imagen.id_producto == productoselect.id" class="col-3 col-sm-3 col-lg-12  mb-3" role="button">
                                <div class="justify-content-center side-picture" @click="imagenesChange()">
                                  <img :src="'https://tractobull.beirat.solutions/'+imagen.imagen" class="img-fluid " />
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--Main picture-->
                          <div class="col-12 col-lg-10 flex-lg-last">
                            <div class="d-flex justify-content-center align-items-center w-100 px-5">
                              <img :src="'https://tractobull.beirat.solutions/'+productoselect.portada" width="500" height="500" class="img-fluid" id="main-image">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
      
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6 container">
                    <div v-for="categoria in categorias">
                      <div v-if="categoria.id == productoselect.id_categoria">
                        <h6 style="color: #1E507B;"><span style="color: #464646;">Subgrupo:</span>
                          {{categoria.name}}
                        </h6>
                      </div>
                    </div>
                    <h3>{{productoselect.name}}</h3>
                    <br>
                    <h6 style="color: #464646;">Codigo:</h6>
                    <h6 style="color: #1E507B;">{{productoselect.code}}</h6>
                    <br>
                    <p style="color: #464646;">{{productoselect.description}}</p>
                    <br>
                    <a href="https://tractobull.mx/distribuidores" style="background-color: #1E507B; color: white; border-radius: 12px;" class="btn mt-2">
                      Contacta a un distribuidor
                    </a>
                  </div>
                </div>
                <hr>
                <div v-for="tabla in tablas" v-show="tabla.id_producto == productoselect.id">
                  <div class="">
                    <center>
                      <img :src="'https://tractobull.beirat.solutions/'+tabla.imagen" class="img-fluid state" />
                    </center>
                  </div>
                </div>
              </div>
              <!-- <div v-show="productoselect != 'vacio'">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6 container">
                    <div v-for="categoria in categorias">
                      <div v-if="categoria.id == productoselect.id_categoria">
                        <h6 style="color: #464646; word-spacing: 0.45rem; margin-top: 15px;">Inicio > Productos
                          > {{categoria.name}} > {{productoselect.name}}</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="d-flex justify-content-end">
                      <button style="background-color: #1E507B; color: white; border-radius: 12px;" type="button" class="btn " @click="productoSelectCancel()">Regresar a productos</button>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="row">
      
                          <div class="col-3 col-sm-3 col-lg-12  mb-3" role="button">
                            <div class="justify-content-center side-picture">
                              <img :src="'https://tractobull.beirat.solutions/'+productoselect.portada" class="img-fluid " />
                            </div>
                          </div>
                          <div v-for="imagen in imagenes">
                            <div v-if="imagen.id_producto == productoselect.id">
                              <div class="col-3 col-sm-3 col-lg-12  mb-3" role="button" data-target="side-1">
                                <div class="justify-content-center side-picture">
                                  <img :src="'https://tractobull.beirat.solutions/'+imagen.imagen" class="img-fluid " />
                                </div>
                              </div>
                            </div>
                          </div>
      
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                        <img :src="'https://tractobull.beirat.solutions/'+productoselect.portada" width="500" height="500" alt="Sin imagen">
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div v-for="categoria in categorias">
                      <div v-if="categoria.id == productoselect.id_categoria">
                        <h6 style="color: #1E507B;"><span style="color: #464646;">Subgrupo:</span>
                          {{categoria.name}}
                        </h6>
                      </div>
                    </div>
                    <h3>{{productoselect.name}}</h3>
                    <br>
                    <h6 style="color: #464646;">Codigo:</h6>
                    <h6 style="color: #1E507B;">{{productoselect.code}}</h6>
                    <br>
                    <p style="color: #464646;">{{productoselect.description}}</p>
                    <br>
                    <a href="https://tractobull.mx/distribuidores" style="background-color: #1E507B; color: white; border-radius: 12px;" class="btn mt-2">
                      Contacta a un distribuidor
                    </a>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <br>
          <hr>
          <br>
      
          <div class="row  d-flex justify-content-center responsive-b-space">
            <a href="{{asset('front/website/tractobull-general-catalog.pdf')}}" class="btn btn-primary catalog-link mr-3 btn-sm link-mr" target="_blank">
              DESCARGAR EL CATÁLOGO GENERAL TRACTOBULL
            </a>
            <a href="{{asset('front/website/tractobull-general-catalog.pdf')}}" class="btn btn-primary catalog-link " target="_blank">
              DESCARGAR EL CATÁLOGO ESCAPES TRACTOBULL
            </a>
          </div>
        </div>
      </section>
      
   
    
      
  
      
      
      <script>
        const app = Vue.createApp({
          data() {
            return {
              familias: null,
              categorias: [],
              productos: [],
              imagenes: null,
              tablas: null,
              productoselect: 'vacio',
              category: [],
              catescapes: '',
            }
          },
          computed: {
            filterProducts: function() {
              return this.filterProductsByCat(this.filterProductsByEscapes(this.productos))
            },
          },
          methods: {
            valueEscapes() {
              this.category = [];
              this.catescapes = 'escapes';
            },
            LimpiarFiltro() {
              this.category = [];
              this.catescapes = '';
            },
            async getFamilias() {
              const familias = await fetch(`https://tractobull.beirat.solutions/api/familias`)
                .then(r => r.json())
              // console.log(familias)
              this.familias = familias
            },
            async getCategorias() {
              const categorias = await fetch(`https://tractobull.beirat.solutions/api/categorias`)
                .then(r => r.json())
              // console.log(categorias)
              this.categorias = categorias
            },
            async getProductos() {
              const productos = await fetch(`https://tractobull.beirat.solutions/api/productos`)
                .then(r => r.json())
              // console.log(productos)
              this.productos = productos
            },
            async getImagenes() {
              const imagenes = await fetch(`https://tractobull.beirat.solutions/api/imagenes`)
                .then(r => r.json())
              // console.log(familias)
              this.imagenes = imagenes
            },
            async getTabla() {
              const tablas = await fetch(`https://tractobull.beirat.solutions/api/tabla`)
                .then(r => r.json())
              // console.log(familias)
              this.tablas = tablas
            },
            async showproduct(id) {
              console.log(id)
              const productID = await fetch("https://tractobull.beirat.solutions/api/productos/select/" + id)
                .then(r => r.json())
              console.log(productID)
              this.productoselect = productID
            },
            productoSelectCancel() {
              this.productoselect = 'vacio'
            },
            imagenesChange() {
              $('.side-picture').click(function() {
                var showing = $(this).find("img").attr("src");
                $('.side-picture').removeClass('active');
                $(this).addClass('active');
                $('#main-image').fadeOut(function() {
                  $(this).attr('src', showing);
                  $(this).fadeIn();
      
                });
              });
            },
            // Filters
            filterProductsByCat: function(productos) {
              this.catescapes = '';
              return productos.filter(producto => !producto.id_categoria.indexOf(this.category))
              // return productos.filter(producto => this.category.indexOf(producto.city) !== -1)
            },
            filterProductsByEscapes: function(productos) {
              return productos.filter(producto => !producto.id_categoria.indexOf(this.catescapes))
              // return productos.filter(producto => this.category.indexOf(producto.city) !== -1)
            },
            uniqueCheck(e) {
              this.category = [];
              if (e.target.checked) {
                this.category.push(e.target.value);
                console.log(e.target.value)
              }
            },
          },
          created() {
            this.getCategorias()
            this.getFamilias()
            this.getProductos()
            this.getImagenes()
            this.getTabla()
          },
        })
        app.mount('#myApp')
      </script>




    @include('components.footer')

    @include('components.scripts')
    
</body>
</html>