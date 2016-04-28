<?php include 'header.php' ?>
<section class="banner background" background="img/nosotros-bg.jpg" background-size="cover">
            <h1 class="wow fadeIn" data-wow-duration="2s">Un gran equipo de profesionales a tu alcance</h1>
        </section>
        <!-- Nosotros -->
        <div class="container-fluid">
            <div class="row">
                <div class="first-section">
                    <div class="col-md-6 col-lg-4 clearfix">
                        <div class="nosotros-content wow fadeIn" data-wow-duration="2s">
                            <h2>Somos especialistas en soluciones digitales.</h2>
                            <p>Somos más que una agencia de diseño web en Puebla, somos un equipo de diseñadores, programadores y managers que desde hace más de 2 años, creamos increíbles experiencias digitales para todo tipo de empresas y personas.</p>
                        </div>
                    </div><!-- Contenido 1 -->
                    <div class="col-md-6 col-lg-8 nosotros-pic-1" data-type="background" data-speed="4"></div><!-- Imagen 1 -->
                </div><!-- First section -->
            </div>
            <div class="row">
                <div class="second-section clearfix blue-bg">
                    <div class="col-md-6 col-lg-4 nosotros-pic-2" data-parallax="scroll" data-image-src="img/nosotros-pic-2.jpg" data-z-index="10">
                    </div><!-- Imagen 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="nosotros-content middle wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h2>Sabemos lo que hacemos</h2>
                            <p>Somos buscados por nuestra creatividad y capacidad para crear experiencias digitales únicas, por eso, como un equipo de expertos en nuestras áreas, nos esforzamos para que cada proyecto sea impresionante y cumpla con todos los objetivos específicos de cada cliente mediante la calidad de nuestro diseño y código.</p>
                            <p>La tecnología y las tendencias visuales cambian constantemente, por eso nos mantenemos actualizados en todas nuestras ramas mediante diversos medios, desde el tradicional libro, los webinars y suscripciones a sitios de capacitación, hasta conferencias nacionales e internacionales; todo con el objetivo de ofrecerte la mejor calidad en nuestro trabajo.</p>
                        </div>
                    </div><!-- Contenido 2 -->
                    <div class="col-lg-4 hidden-md visible-lg nosotros-pic-3" data-parallax="scroll" data-image-src="img/nosotros-pic-3.jpg" data-z-index="10"></div><!-- Imagen 3 -->
                </div><!-- Second Section -->
            </div>
        </div>
        <!-- /Nosotros -->

        <!-- Datos -->
        <div class="datos" data-parallax="scroll" data-image-src="img/bg-datos.jpg" data-z-index="0">
            <div class="container">
                <div class="row">
                    <h2 id="datos" class="wow fadeIn">Más información de nosotros</h2>
                </div>
                <div class="row">
                    <div class="col-md-2 number wow fadeIn">
                        <p>Tazas de <br>Café</p>
                        <div class="circle">
                            <input type="text" value="0" rel="3000" data-max="3000" class="knob">
                            <span><small>+</small>3K</span>
                        </div>
                    </div><!-- Dato 1 -->
                    <div class="col-md-2 number wow fadeIn">
                        <p>Diseños <br>Realizados</p>
                        <div class="circle">
                            <input type="text" value="0" rel="1000" data-max="1000" class="knob">
                            <span><small>+</small>1K</span>
                        </div>
                    </div><!-- Dato 2 -->
                    <div class="col-md-2 number wow fadeIn">
                        <p>Pizzas <br>Ordenadas</p>
                        <div class="circle">
                            <input type="text" value="0" rel="190" data-max="190" class="knob">
                            <span>190</span>
                        </div>
                    </div><!-- Dato 3 -->
                    <div class="col-md-2 number wow fadeIn">
                        <p>Libros <br>Leídos</p>
                        <div class="circle">
                            <input type="text" value="0" rel="64" data-max="64" class="knob">
                            <span>64</span>
                        </div>
                    </div><!-- Dato 4 -->
                    <div class="col-md-2 number wow fadeIn">
                        <p>Conferencias <br>Asistidas</p>
                        <div class="circle">
                            <input type="text" value="0" rel="16" data-max="16" class="knob">
                            <span>16</span>
                        </div>
                        
                    </div><!-- Dato 5 -->                
                    <div class="col-md-2 number wow fadeIn">
                        <p>Horas de <br>Trabajo</p>
                        <div class="circle">
                            <input type="text" value="0" rel="5000" data-max="5000" class="knob">
                            <span>5K</span>
                        </div>
                    </div><!-- Dato 6 -->                   
                </div>
            </div><!-- Container -->
        </div>
        <!-- Datos -->

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
    <div class="container ">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <h1 class="wow fadeIn">¿Tienes un proyecto en puerta?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <p class="wow fadeIn">Con gusto te invitamos un café para platicar de las necesidades de tu proyecto y ofrecerte la mejor solución para tu negocio. La calidad de nuestro trabajo hará que no te arrepientas. ¡Contacta ahora!</p>
            </div>
        </div>
        <a href="./contacto" class="emerald-btn wow fadeIn">iniciar proyecto</a>
    </div>
</div><!-- Contatanos -->
<?php include 'footer.php' ?>