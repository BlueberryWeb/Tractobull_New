$(document).on("ready",function(){

    $('.click-lang').click(function (event) {    
    var url_domain = "<?php echo $this->config->company->domain; ?>";         
          var url = "sessionajax/";
          $.ajax({
              type: "POST",
              url: url_domain + "" + url,
              dataType: "json",
              data: { lang: $(this).data("lang") },
              success: function (data) {
                  console.log(data);
              }
          }).done(function () {
              location.reload();
          });
      });

      $("#mapa").gmaps({locations:[{'name': '','location': [20.654307,-103.338048,19],'thumb':'<?php echo $this->url->get("assets/website/img/map_logo.png") ?>','id':'1',iconmarker:''} ],vm:".vermapa",icongm:"",z:18,difstl:true,showOnLoad:false});
       if(isset($locations)){ 
        $("#map").gmaps({
        locations: $locations,vm:".vermapa",icongm:"",z:7,difstl:true,showOnLoad:false});
       } 
      
    });

    AOS.init();

    $(document).ready(function(){

        $('#anual_sales').keyup(function(event) {
          // skip for arrow keys
          if(event.which >= 37 && event.which <= 40) return;
  
          // format number
          $(this).val(function(index, value) {
            return value
            .replace(/\D/g, "")
            .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            ;
          });
        });
  
        $('.action-close').on('click', function() {
            var video = $("#video-corp").attr("src");
            $("#video-corp").attr("src","");
            $("#video-corp").attr("src",video);
         });
  
        ///////////////// fixed menu on scroll for desktop
      if ($(window).width() > 992) {
        $(window).scroll(function(){  
           if ($(this).scrollTop() > 80) {
              $('#mainNav').addClass("fixed-top-bg"); 
              // add padding top to show content behind navbar
               
            }else{
              $('#mainNav').removeClass("fixed-top-bg");
               // remove padding top from body
              /*$('body').css('padding-top', '0');*/       
            }   
        });
      } // end if
  
        $('.action-close').on('click', function() {
              
              var video = $("#video").attr("src");
              $("#video").attr("src","");
              $("#video").attr("src",video);
          });
  
  
        $('.owl-carousel-testimonial').owlCarousel({
              loop:true,
              margin:10,
              responsiveClass:true,
              responsive:{
                  0:{
                      items:1,
                      nav:true
                  },
                  600:{
                      items:2,
                      nav:false
                  },
                  1000:{
                      items:2,
                      nav:true,
                      loop:false
                  }
              }
          });
  
             $('.owl-footer').owlCarousel({
              loop:true,
              margin:15,
              responsiveClass:true,
              responsive:{
                  0:{
                      items:1,
                      nav:true
                  },
                  600:{
                      items:3,
                      nav:false
                  },
                  1000:{
                      items:5,
                      nav:true,
                      loop:false
                  }
              }
          });
  
         // Gets the video src from the data-src on each button
  
  var $videoSrc;  
  $('.video-btn').click(function() {
      $videoSrc = $(this).data( "src" );
      console.log($videoSrc);
  });
  
    
  // when the modal is opened autoplay it  
  $('#myModal').on('shown.bs.modal', function (e) {
      
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
  })
    
  
  // stop playing the youtube video when I close the modal
  $('#myModal').on('hide.bs.modal', function (e) {
      // a poor man's stop video
      $("#video").attr('src',$videoSrc); 
  }) 
      });