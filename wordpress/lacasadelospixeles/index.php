<?php include 'header.php' ?>
<div class="slider-wrapper">
    <div id="main-screen" class="slider">
        <div class="slide s-1">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 content-box">
                            <div class="table-cell wow fadeIn" data-wow-duration="2s">
                                <h1>Tu presencia en línea cuenta, y mucho</h1>
                                <p>Hagamos que se enamoren de tu empresa a <br> primera vista por medio de <b>tu sitio web</b>.</p>
                                <a href="<?php echo base_url(); ?>/contacto" class="emerald-btn">Iniciar Proyecto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide s-2">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 content-box">
                            <div class="table-cell wow fadeIn" data-wow-duration="2s">
                                <h1>Tus clientes se <br> mueven, muévete con ellos</h1>
                                <p>Te ayudamos a que <b> tu sitio web se adapte a smartphones y tablets.</b></p>
                                <a href="<?php echo base_url(); ?>/contacto" class="emerald-btn">Iniciar Proyecto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="slide s-3">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 content-box">
                            <div class="table-cell wow fadeIn" data-wow-duration="2s">
                                <h1>Contar con las herramientas no significa que debas hacerlo tú mismo</h1>
                                <p>Somos profesionales. Deja tu sitio en nuestras manos y dedícate a lo que a ti más te importa, tu empresa.</p>
                                <a href="<?php echo base_url(); ?>/contacto" class="emerald-btn">Iniciar Proyecto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <button id="prev"><i class="lcp-icon lcp-left-angle"></i></button>
    <button id="next"><i class="lcp-icon lcp-right-angle"></i></button>
</div>
<div id="nosotros" class="container-fluid zooom" data-background="<?php echo base_url(); ?>/img/nosotros-home-bg.jpg" >
    <div class="row">
        <div class="col-lg-5 col-md-6 content">
            <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <h2>Un gran equipo de profesionales a tu alcance</h2>
            <p>Somos una agencia de <b>diseño web en Puebla</b>, México. Nosotros creamos y desarrollamos excelentes experiencias digitales que ayudan a las empresas a destacar en un mundo informático muy competitivo. Somos un equipo jóven, profesional y entusiasta. Nuestra atención al detalle nos convierte en la mejor opción para que tu página web o aplicación sea la herramienta ideal para alcanzar tus objetivos y estar más cerca de tus usuarios.</p>
            <a href="./nosotros" class="emerald-btn">conoce mas de nosotros</a>
            </div>
        </div>
    </div>
</div><!-- Nosotros -->

<div id="servicios" class="container-fluid">
    <div class="container">
        <div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <h2 class="col-lg-10 col-lg-offset-1">No lo hacemos todo, pero lo que hacemos lo hacemos muy bien</h2>
        </div>
        <div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <p class="col-lg-10 col-lg-offset-1">Nuestro gran equipo de diseñadores, programadores, comunicólogos, líderes de proyecto, y administradores invierten lo mejor de sí en cada proyecto, dándole la importancia que se merece y buscando siempre la satisfacción total de nuestros clientes y sus metas. Acércate a nosotros para optimizar tu presencia digital.</p>
        </div>
        <div class="what-we-do wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div>
                <img src="img/des.png" alt="La Casa de los Pixeles Diseño Web">
                <span>Diseño Web</span>
            </div>
            <div>
                <img src="img/w-app.png" alt="La Casa de los Pixeles Aplicaciones Web">
                <span>Aplicaciones Web</span>
            </div>
            <div>
                <img src="img/m-app.png" alt="La Casa de los Pixeles Aplicaciones Móviles">
                <span>Aplicaciones Móviles</span>
            </div>
            <div>
                <img src="img/identity-icon.png" alt="La Casa de los Pixeles Aplicaciones Móviles">
                <span>Identidad Corporativa</span>
            </div>
            <div>
                <img src="img/social-media-icon.png" alt="La Casa de los Pixeles Aplicaciones Móviles">
                <span>Social Media</span>
            </div>
        </div>
        <a href="./servicios" class="emerald-btn wow fadeIn" data-wow-delay="0.3s">conoce mas de nuestros servicios</a>
    </div>
</div><!-- Servicios -->

<div id="portafolio" class="container-fluid">
    <?php include 'casos-de-estudio.php'; ?>
</div><!-- Portafolio -->












<div id="contactanos" class="home">
    <div class="container ">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <h2 class="wow fadeIn" data-wow-duration="2s">¿Tienes un proyecto en puerta?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <p class="wow fadeIn" data-wow-duration="2s">Con gusto te invitamos un café para platicar de las necesidades de tu proyecto y ofrecerte la mejor solución para tu negocio. La calidad de nuestro trabajo te convencerá. ¡Contáctanos ahora!.</p>
            </div>
        </div>
        <a href="./contacto" class="emerald-btn wow fadeIn" data-wow-duration="2s">iniciar proyecto</a>
    </div>
</div>
<?php include 'footer.php' ?>