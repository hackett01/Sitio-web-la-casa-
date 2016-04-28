
<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="ych-menu-content">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">

                <?php
                $image = get_field('slide-1');

                if (!empty($image)):
                    ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />


                    <div class="col-md-7 content-box"  id="slider1">

                        <div class="container" id="textoContenido" >

                            <h1 style="color: white;">Tu presencia en línea cuenta, y mucho</h1>
                            <br>
                            <p style="color: white;">Hagamos que se enamoren de tu empresa a <br> primera vista por medio de <b>tu sitio web</b>.</p>
                            <a href="//lacasadelospixeles.com/contacto" class="emerald-btn">Iniciar Proyecto</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="item">
                <?php
                $image = get_field('slide-2');
                if (!empty($image)):
                    ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <div class="col-md-7 content-box" id="slider1">
                        <div class="container" id="textoContenido" >

                            <h1 style="color: white;">Tus clientes se <br> mueven, muévete con ellos</h1>
                            <br>
                            <p style="color: white;"> Te ayudamos a que <b> tu sitio web se adapte a smartphones y tablets.</b></p>
                            <a href="//lacasadelospixeles.com/contacto" class="emerald-btn">Iniciar Proyecto</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="item">
                <?php
                $image = get_field('slide-3');

                if (!empty($image)):
                    ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <div class="col-md-7 content-box" id="slider1">
                        <div class="container" id="textoContenido" >
                            <h1 style="color: white;">Contar con las herramientas no significa que debas hacerlo tú mismo</h1>
                            <br>
                            <p style="color: white;">  profesionales. Deja tu sitio en nuestras manos y dedícate a lo que a ti más te importa, tu empresa.</p>
                            <a href="//lacasadelospixeles.com/contacto" class="emerald-btn">Iniciar Proyecto</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<h1><?php the_field('parallaxTitle'); ?></h1>

<div id="nosotros" class="container-fluid zooom" data-background="<?php echo bloginfo('template_url'); ?>/img/nosotros-home-bg.jpg" >
    <div class="row">
        <div class="col-lg-5 col-md-6 content">
            <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                <h2><?php the_field('titulo-principal'); ?></h2>
                <p><?php the_field('sib-titulo-principal'); ?></p>
                <a  class="emerald-btn" href="<?php the_field('link_page'); ?>">conoce mas de nosotros</a>
            </div>
        </div>
    </div>
</div><!-- Nosotros -->

<div id="servicios" class="container-fluid">
    <div class="container">
        <div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <h2 class="col-lg-10 col-lg-offset-1"><?php the_field('titulo-parallax'); ?></h2>
        </div>
        <div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <p class="col-lg-10 col-lg-offset-1"><?php the_field('sub-titulo-parallax'); ?></p>
        </div>
        <div class="what-we-do wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">

            <?php if (have_rows('parallax')): ?>


                <?php
                while (have_rows('parallax')): the_row();

                    // vars
                    $image = get_sub_field('imagen');
                    $text = get_sub_field('text');
                    ?>

                    <div>
                        <?php if ($link): ?> <a href="<?php echo $link; ?>">
                            <?php endif; ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                            <span><?php echo $text; ?></span>
                            <?php if ($link): ?>
                            </a>
                        <?php endif; ?>


                    </div>


                <?php endwhile; ?>



            <?php endif; ?>
        </div>
        <a  class="emerald-btn" href="<?php the_field('link_page'); ?>">conoce mas de nosotros</a>
    </div>
</div><!-- Servicios -->


<div id="portafolio" class="container-fluid">
    <div class="row">

        <?php if (have_rows('portafolio')): ?>
            <?php
            while (have_rows('portafolio')): the_row();
                // vars
                $image = get_sub_field('imagen');
                $text = get_sub_field('text');
                $imagensub = get_sub_field('imagensub');
                $link = get_sub_field('link');
                ?>
                <?php if ($link): ?>
                <?php endif; ?>
                <div class="col-sm-4 no-padd wow fadeIn" data-wow-delay="0.5s">
                    <a href="<?php echo $link; ?>">
                        <img src="<?php echo $image['url']; ?>" alt="La Casa de los Pixeles - New Fashion" />
                        <div class="overlay">
                            <div class="o-content">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="<?php echo $imagensub['url']; ?>" alt="La Casa de los Pixeles - New Fashion" />
                                        <span><?php echo $text; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php if ($link): ?>
        
                <?php endif; ?>
            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</div>



<div id="contactanos" class="home">
    <div class="container ">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <h1 class="wow fadeIn" data-wow-duration="2s" ><?php the_field('titulo-proyecto'); ?></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <p class="wow fadeIn" data-wow-duration="2s"><?php the_field('texto-proyecto'); ?></p>

            </div>
        </div>
        <a  class="emerald-btn" href="<?php the_field('link_contac'); ?>">Iniciar proyecto</a>
    </div>
</div>

<?php get_footer(); ?>
