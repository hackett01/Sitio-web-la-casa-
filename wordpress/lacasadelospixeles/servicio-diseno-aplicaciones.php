<?php include 'header.php' ?>
<div id="servicios-diseno-aplicacion" class="servicio">
        <section class="banner" background="<?php echo base_url(); ?>/img/banner-aplicacion-movil.jpg" background-size="cover">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
            <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <i class="icon phone"></i>
            <h1>Aplicaciones Móviles</h1>
            <p>Una app te puede ayudar a posicionar tu marca y resaltar de tu competencia, o incluso facilitar procesos difíciles de tu empresa, o llevarlo al siguiente nivel y desarrollar todo un modelo de negocios en torno a una aplicación.</p>
            </div>
            </div>
        </div>
        </section>

        <!-- /Banner Principal -->
        <!-- Contenido -->
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-6 servicio-pic item-match pic-1" data-parallax="scroll" data-image-src="img/servicio-diseno-aplicacion-pic-1.jpg" data-z-index="10"></div><!-- Imagen 1 -->
                    <div class="col-md-4 col-sm-6 servicio-content item-match">
                        <div class="inner wow   fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">
                        <i class="icon android-ios"></i>
                        <h2>iOS y Android</h2>
                        <p>Te ayudamos a llegar a la mayor cantidad de personas creando experiencias únicas para las plataformas de mayor uso a nivel mundial, iOS y Android.</p>
                        </div>
                    </div>
                        <div class="col-md-4 col-sm-6 col-sm-push-6 col-md-push-0 servicio-pic item-match pic-2" data-parallax="scroll" data-image-src="img/servicio-diseno-aplicacion-pic-2.jpg" data-z-index="10"></div><!-- Imagen 2 -->

                    <div class="col-md-4  col-sm-6 col-sm-pull-6 col-md-pull-0 servicio-content item-match">
                        <div class="inner wow  fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">
                        <i class="icon native-code"></i>
                        <h2>Lenguaje Nativo</h2>
                        <p>Construímos tu aplicación desde cero con el lenguaje nativo de cada plataforma para asegurar la mejor experiencia de usuario.</p>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-6 servicio-pic item-match pic-3" data-parallax="scroll" data-image-src="img/servicio-diseno-aplicacion-pic-3.jpg" data-z-index="10"></div><!-- Imagen 3 -->
                    <div class="col-md-4  col-sm-6 servicio-content item-match">
                        <div class="inner wow   fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">
                        <i class="icon social-connect"></i>
                        <h2>Integración con terceros</h2>
                        <p>Ya sea integraciones a servicios conocidos como facebook o a servicios de aplicaciones propias nosotros podemos hacerlo, facilitando la interacción entre aplicaciones de escritorio y móviles o servicios de recopilación de datos, etc.</p>
                        </div>
                    </div>  
                 </div>
        </div><!-- Content -->
        <!-- Estadisticas -->
        <div class="estadisticas bg-cover">
            <div class="container">
                <div class="row text-center">
                <h3 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">Algunas estadísticas</h3>
                <div class="col-md-3 col-sm-5 col-sm-offset-1 col-md-offset-3 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="item-match">
                    <span class="percent count">82%</span>
                </div>
                <p>de las personas que tienen un Smartphone ha descargado aplicaciones en los últimos meses</p>
                </div>
                <div class="col-md-3 col-sm-5 wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">
                <div class="item-match">
                <span  class=" dollars count">45.400</span>
                <small>millones de dolares</small>
                </div>
                <p>han sido los ingresos acumulados en las diferentes tiendas de aplicaciones móviles hasta el 2015</p>
                </div>
              </div>
            </div>
        </div>
        <!-- Estadisticas -->
        <!-- Tecnologias -->
        <div class="tecnologias-empleadas text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Tecnologías que usamos</h2>
                    <img src="<?php echo base_url(); ?>/img/icon-android.png">
                    <img src="<?php echo base_url(); ?>/img/icon-apple.png">
                </div>
            </div>

        </div>
        </div>
        <!-- Tecnologias -->
        <!-- Portafolio -->
        <div id="portafolio" class="container-fluid">
            <div class="portafolio-titulo wow fadeIn">
                <h2>Estos son algunos de nuestros casos de estudio</h2>
            </div>             
            <?php include 'casos-de-estudio.php'; ?>
        </div>
        <!-- /Portafolio -->
        <!-- Contactanos -->
        <div id="contactanos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h1 >¿Tienes un proyecto en puerta?</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <p >Con gusto te invitamos un café para platicar de las necesidades de tu proyecto y ofrecerte la mejor solución para tu negocio. La calidad de nuestro trabajo hará que no te arrepientas. ¡Contacta ahora!</p>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>/contacto" class="emerald-btn">iniciar proyecto</a>
            </div>
        </div>
</div>
<?php include 'footer.php' ?>