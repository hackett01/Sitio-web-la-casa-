<!-- Footer -->
        <footer>
            <div class="container">
                <div class="col-md-3 col-sm-5">
                    <img src="<?php echo base_url(); ?>/img/logo-white.svg" alt="La Casa de los Pixeles">
                    <span class="copy">©2015 La Casa de los Pixeles. Todos los derechos reservados.</span>
                    <br>
                    <span><a href="<?php echo base_url(); ?>/politicas-de-privacidad">Politicas de Privacidad</a></span>
                </div><!-- Copyright -->
                <div class="col-md-4 col-md-offset-5 col-sm-6 col-sm-offset-1 contact">
                    <span>Tel. (222) 583 03 27</span>
                    <span>Privada 39 Oriente 2018-A,<br> Col. El Mirador, Puebla, Puebla</span>
                    <span id="mail-me"></span>
                    <ul>
                        <li><a href="https://www.facebook.com/CasadePixeles" target="_blank"><i class="lcp-icon lcp-fb"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/la-casa-de-los-pixeles" target="_blank"><i class="lcp-icon lcp-li"></i></a></li>
                        <li><a href="https://twitter.com/lacasadepixeles" target="_blank"><i class="lcp-icon lcp-tw"></i></a></li>
                    </ul>
                </div><!-- Contact Info -->
            </div>
        </footer>
        <!-- Footer -->
        <button class="go-up"><i class="lcp-icon lcp-up-angle"></i></button>
        </div>
        <!-- Menu Content -->

        <!-- Off Canvas Menu -->
        <nav id="offcanvasmenu" class="navmenu navmenu-default navmenu-fixed-right offcanvas ych-menu" role="navigation">
            <ul>
                <li><a href="<?php echo base_url(); ?>/">Inicio</a></li>
                <li><a href="<?php echo base_url(); ?>/nosotros">Nosotros</a></li>
                <li class="dropdown">
                    <a href="<?php echo base_url(); ?>/servicios">Servicios</a>
                    <button data-toggle="dropdown"><i class="lcp-icon lcp-down-angle"></i></button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>/servicios/diseno-web">Diseño Web</a></li>
                        <li><a href="<?php echo base_url(); ?>/servicios/aplicaciones-movil">Aplicaciones Moviles</a></li>
                        <li><a href="<?php echo base_url(); ?>/servicios/aplicaciones-web">Aplicaciones Web</a></li>
                        <li><a href="<?php echo base_url(); ?>/servicios/identidad-corporativa">Identidad Corporativa</a></li>
                        <li><a href="<?php echo base_url(); ?>/servicios/social-media">Social Media</a></li>
                    </ul>
                </li>
                <!-- <li class="dropdown">
                    <a href="#" data-toggle="dropdown">Portafolio</a>
                    <button data-toggle="dropdown"><span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>/portafolio/biyeon-kwan">Biyeon Kwan</a></li>
                        <li><a href="<?php echo base_url(); ?>/portafolio/new-fashion">New Fashion</a></li>
                        <li><a href="<?php echo base_url(); ?>/portafolio/schaebens">Schaebens</a></li>
                    </ul>
                </li> -->
                <li><a href="<?php echo base_url(); ?>/contacto">Contacto</a></li>
            </ul>
        </nav>
        <!-- Off Canvas Menu -->
        
        <!-- Scripts -->
        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <?php $uri =  $_SERVER['REQUEST_URI']; $uri = explode('/',$uri); $size = count($uri); $slug = $uri[$size-1]; ?>
        <?php if($slug == 'contacto'): ?>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            var map;
            var center = new google.maps.LatLng(19.021302, -98.193746);
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
              center: center,
              zoom: 15,
              draggable:true,
              panControl:false,
              scaleControl:true,
              scrollwheel: false,
              streetViewControl:false,
              zoomControl: true,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            $(document).ready(function(){
                map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({
                    position: center,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    title: 'La Casa de los Pixeles'
                });

                $(window).resize(function(){
                    map.setCenter(center);
                });
            });
        </script>
        <?php endif; ?>
        <?php if($slug == 'nosotros'): ?>
        <script type="text/javascript">     
            $(function() {
                $(".knob").knob({
                    'width':'134',
                    'thickness':'.1',
                    'fgColor':'#1DC7FF',
                    'bgColor':'transparent',
                    'readOnly':'true',
                    'displayPrevious':true,
                    'displayInput': false
                });
            });
        </script>
        <script>
        $(document).ready(function(){
            function isScrolledIntoView(elem)
            {
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();

                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();

                return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
            }
            flag = true;
            $(window).scroll(function() {
                var height = $(window).scrollTop();
                //alert(height);
                test = isScrolledIntoView('.knob');

                if( test && flag ){
                    flag = false;
                    $('.knob').each(function () {

                       var $this = $(this);
                       var myVal = $this.attr("rel");
                       // alert(myVal);
                       $this.knob({

                       });
                       $({
                           value: 0
                       }).animate({

                           value: myVal
                       }, {
                           duration: 2000,
                           easing: 'swing',
                           step: function () {
                               $this.val(Math.ceil(this.value)).trigger('change');
                           }
                       })
                   });
                }
            });
        });
        </script>
        <?php endif; ?>
        <script src="<?php echo base_url(); ?>/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery.cycle.all.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery.knob.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
        <!-- Plugins JS -->
        <script async src="<?php echo base_url(); ?>/js/plugins.js"></script>
        <!-- WOW JS -->
        <script  src="<?php echo base_url(); ?>/js/wow.min.js"></script>
        <!-- Parallax JS -->
        <!-- <script  src="<?php echo base_url(); ?>/js/parallax.js"></script> -->
        <script src="<?php echo base_url(); ?>/js/jquery.matchHeight.js" type="text/javascript"></script>
        
        <?php if($uri[$size-2] == 'portafolio'): ?>
            <!-- Waypoints JS -->
            <script src="http://imakewebthings.github.com/jquery-waypoints/waypoints.min.js" type="text/javascript"></script>
            <!-- AnimateNumber JS -->
            <script src="<?php echo base_url(); ?>/js/jquery.animateNumber.min.js"></script>
            <!-- Portafolio JS -->
            <script src="<?php echo base_url(); ?>/js/portafolio.js"></script>
        <?php endif; ?>

        <script async src="<?php echo base_url(); ?>/js/main.js"></script>
        

        <!-- /Scripts -->

    </body>
</html>