<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>TRACTOBULL | DEALERS</title>
</head>
<body>
    
     <!-- Google Tag Manager (noscript) 2022/10-->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3Q95ZN"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <style type="text/css">
            .wrap {
                height: 550px;
            }
        
            #map-canvas {
                height: 100%;
            }
        
            .anyClass-dist {
                height: 550px;
                overflow-y: scroll;
            }
        </style>
    @include('components.menu')
<!-- Header -->
<header class="masthead distribuidores">
    <video id="my-video" class="video" loop muted autoplay playsinline>
        <source src="{{asset('front/website/img/videos/distribuidores.mp4')}}" type="video/mp4">
    </video>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"></div>
            <div class="intro-heading text-uppercase">DEALERS</div>
            <!--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"><i class="fas fa-arrow-down"></i></a>-->
        </div>
    </div>
</header>
<br />
<div id="myApp">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 p-0"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-3 p-0">
            <select v-model="searchUSA" required name="pais" id="pais" class="form-control">
                <option selected value="">Estados Unidos...</option>
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="District Of Columbia">District Of Columbia</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York">New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="Washington">Washington</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
            </select>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 p-0"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-3 p-0">
            <select v-model="searchEstado" class="form-control" name="estado" id="estado">
                <option selected value="">Mexico..</option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California Sur">Baja California Sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Chiapas">Chiapas</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="CDMX">Ciudad de México</option>
                <option value="Coahuila">Coahuila</option>
                <option value="Colima">Colima</option>
                <option value="Durango">Durango</option>
                <option value="Estado de México">Estado de México</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Michoacán">Michoacán</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo León">Nuevo León</option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Querétaro">Querétaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosí">San Luis Potosí</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Yucatán">Yucatán</option>
                <option value="Zacatecas">Zacatecas</option>
            </select>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 p-0">
            <div class="wrap">
                <div id="map-canvas"></div>
            </div>
        </div>
        <div style="border: solid #EDEDED 0.5px;" class="col-12 col-sm-12 col-md-12 col-lg-5">
            <div class="anyClass-dist">
                <div v-for="d in filterDist" class="border container-fluid">
                    <div class="border-bottom">
                        <div class="row py-3">
                            <div class="col-12 col-md-12 col-lg-3 ">
                                <div class="mx-2">
                                    <img :src="'https://tractobull.beirat.solutions/'+d.logo" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-9">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="datos-empresa">
                                            <h5 class="h6">{{d.nombre}}</h5>
                                            <h6 class="">{{d.estado}}, {{d.ciudad}}</h6>
                                            <h6 class="">{{d.telefono}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="text-center enlace">
                                            <a target="_blank" :href="d.pagina" class="">
                                                <h6 class="">Visitar página</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<div class="container">
    <div class="row">

    </div>
</div>
<section class="about-info bg-light pad-res mt-5 " id="services" style="display:none;">

    <div class="container">
        <div class="row" style="display: none;">

            <div class="col-md-6 ">
                <img class="pt-3 pb-3" src="{{asset('front/website/img/logo.png')}}" alt="Tractobull Logo Footer">
                <h2 class="gris-dark popins font-weight-normal"><?php echo $this->lang->_("distribuidores_conoce"); ?> <span class=" font-weight-bold"><?php echo $this->lang->_("distribuidores_de"); ?></span><span class="font-weight-bold azul-dark"> <?php echo $this->lang->_("distribuidores_tractobull"); ?></span></h2>
                <p class="mt-3">
                    <?php echo $this->lang->_("distribuidores__empresa_mexicana"); ?>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid image-distribuidor" src="asset('front/website/img/distribuidores/nuestra_red.png'); ?>" alt="Tractobull about">
            </div>
        </div>

        <div class="distribuidores-list mt-5" style="display: none;">
            <div class="row dealer-header">
                <div class="col"> <?php echo $this->lang->_("distribuidores_nombre"); ?></div>
                <div class="col"> <?php echo $this->lang->_("distribuidores_ubicacion"); ?></div>
                <div class="col"> <?php echo $this->lang->_("distribuidores_telefonos"); ?></div>
                <div class="col"> Whatsapp</div>
                <div class="col"> <?php echo $this->lang->_("distribuidores_email"); ?></div>
                <div class="col"> Facebook</div>
                <div class="col"> <?php echo $this->lang->_("distribuidores_sitio"); ?></div>
            </div>
            <?php foreach ($dealers as $d) { ?>
                <div class="row dealer-info">
                    <div class="col"> <?php echo ($d->image) ? $d->showImage() : ''; ?><br><?php echo $d->name; ?></div>

                    <div class="col"> <?php echo $d->address . ',' . $d->city . ',' . $d->state; ?></div>
                    <div class="col"> <?php echo $d->phone; ?> <br> <?php echo $d->phone_2; ?></div>
                    <div class="col"> <?php if ($d->whatsapp && $d->whatsapp != '') { ?>
                            <a href="https://web.whatsapp.com/send?l=en&phone=<?php echo $d->whatsapp; ?>" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
                        <?php } ?>
                    </div>
                    <div class="col"> <?php echo $d->email; ?></div>
                    <div class="col"> <?php if ($d->facebook && $d->facebook != '') { ?>
                            <a href="<?php echo $d->facebook; ?>" target="_blank"> <i class="fab fa-facebook fa-2x"></i></a>
                        <?php } ?>
                    </div>
                    <div class="col"> <a href="<?php echo $d->website; ?>" target="_new"><i class="fa fa-globe fa-2x"></i></a></div>

                </div>
            <?php } ?>
        </div>

    </div>
</section>
<section class="dist-map" style="display: none;">
    <div class="container">
        <div class="row   d-flex justify-content-center responsive-b-space">

            <h5 class="gris-dark m-5 roboto"><?php echo $this->lang->_("distribuidores_ubica_distribuidor"); ?></h5>

            <div id="map" class="mapsection borde-azul map-distribuidores"></div>
            <a class="btn btn-primary catalog-link " href="asset('nuevodistribuidor'); ?>"><?php echo $this->lang->_("distribuidores_ser"); ?></a>
        </div>

    </div>
</section>
<!-- google api -->
<script>
    const app = Vue.createApp({
        data() {
            return {
                dist: null,
                selected: "",
                searchCiudad: "",
                searchEstado: "",
                searchUSA: "",
                // cord: null,
            }
        },
        methods: {
            async getDist() {
                const dist = await fetch(`https://tractobull.beirat.solutions/api/distribuidores`)
                    .then(r => r.json())
                this.dist = dist
            },

            filterProductsByCity: function(dist) {
                return dist.filter(d => !d.estado.indexOf(this.searchUSA))
            },

            filterProductsByState: function(dist) {
                return dist.filter(d => !d.estado.indexOf(this.searchEstado))
            },


        },
        computed: {
            filterDist: function() {
                return this.filterProductsByCity(this.filterProductsByState(this.dist))
            }
        },
        created() {
            this.getDist()
        },
    })
    app.mount('#myApp')
</script>
<script>
    async function initialize() {
        let url = 'https://tractobull.beirat.solutions/api/distribuidores/coordenadas'
        await fetch(url)
            .then(r => r.json())
            .then(data => {
                locations = data
            })
            .catch(error => console.log("error: ", error))
        var map;
        var image = 'front/website/img/distribuidores/logo-tracto.png';
        var centerPos = new google.maps.LatLng(34.6330792, -101.7426695);
        var zoomLevel = 3.95;
        var mapOptions = {
            center: centerPos,
            zoom: zoomLevel
        };
        map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        for (i = 0; i < locations.length; i++) {
            var latlng = locations[i].coordenada.split(",")
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(latlng[0], latlng[1]),
                title: locations[i].nombre,
                map: map,
                icon: image
            });
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>




    @include('Eng.components.footer')

    @include('components.scripts')
    
</body>
</html>