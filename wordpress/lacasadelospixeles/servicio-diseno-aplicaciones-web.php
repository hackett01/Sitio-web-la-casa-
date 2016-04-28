<?php include 'header.php' ?>
<div id="servicios-aplicacion-web" class="servicio">
        <section class="banner" background="<?php echo base_url(); ?>/img/banner-aplicaciones-web.jpg" background-size="cover">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
            <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <i class="icon aplication-web"></i>
            <h1>Aplicaciones Web</h1>
            <p>Desde sistemas de administración para tu empresa hasta ideas para un nuevo negocio con base web, nosotros te ayudamos a construir la aplicación que necesitas para llevar a cabo tu proyecto</p>
            </div>
            </div>
        </div>
        </section>

        <!-- /Banner Principal -->
        <!-- Contenido -->
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-6 servicio-pic item-match pic-1" data-parallax="scroll" background="<?php echo base_url(); ?>/img/servicio-aplicacion-web-pic-1.jpg" data-z-index="10"></div><!-- Imagen 1 -->
                    <div class="col-md-4 col-sm-6 servicio-content item-match">
                        <div class="inner wow   fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">
                        <i class="icon cogs"></i>
                        <h2>Administra tu aplicación</h2>
                        <p>Por medio de un sistema de adminisración manipular y configurar tu aplicación movil.</p>
                        </div>
                    </div>
                        <div class="col-md-4 col-sm-6 col-sm-push-6 col-md-push-0 servicio-pic item-match pic-2" data-parallax="scroll" background="<?php echo base_url(); ?>/img/servicio-aplicacion-web-pic-2.jpg" data-z-index="10"></div><!-- Imagen 2 -->

                    <div class="col-md-4  col-sm-6 col-sm-pull-6 col-md-pull-0 servicio-content item-match">
                        <div class="inner wow  fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">
                        <i class="icon note"></i>
                        <h2>Ten mejor control de tu empresa</h2>
                        <p>Por medio de un buen sistema de administración puedes manejar y controlar de mejor forma la productividad de tu empresa.</p>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-6 servicio-pic item-match pic-3" data-parallax="scroll" background="<?php echo base_url(); ?>/img/servicio-aplicacion-web-pic-3.jpg" data-z-index="10"></div><!-- Imagen 3 -->
                    <div class="col-md-4  col-sm-6 servicio-content item-match">
                        <div class="inner wow   fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">
                        <i class="icon rocket"></i>
                        <h2>Construida con las mejoras tecnologías</h2>
                        <p>Construimos aplicaciones web con lo último en tecnología, lenguajes de programación y herramientas para asegurar que tu aplicación web sea escalable, fácil de manejar y funcione correctamente.</p>
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
                    <span class="percent count">63%</span>
                </div>
                <p>de las empresas que tiene un sistema de administración para sus empleados han mejorado el rendimiento y su productividad.</p>
                </div>
                <div class="col-md-3 col-sm-5 wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">
                <div class="item-match">
                <span class="percent count">56%</span>
                </div>
                <p>de los dueños de una empresa han incrementado sus ingresos al implementar una aplicación web en su empresa.</p>
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
                    <img src="<?php echo base_url(); ?>/img/icon-php.png">
                    <img class="small "src="<?php echo base_url(); ?>/img/logo-1.png">
                    <img src="<?php echo base_url(); ?>/img/logo-2.png">
                    <img src="<?php echo base_url(); ?>/img/logo-3.png">
                    <img src="<?php echo base_url(); ?>/img/logo-4.png">
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