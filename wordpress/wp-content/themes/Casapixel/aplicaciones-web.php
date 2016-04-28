<?php /* Template Name: Aplicaciones web */ ?>



<?php get_header(); ?>



<div class="ych-menu-content">
    <div id="servicios-diseno-web" class="servicio">



        <!--Banner Principal -->

        <?php if (have_rows('background')): ?>
            <?php
            while (have_rows('background')): the_row();

                // vars
                $icono = get_sub_field('imagen_icon');
                $image = get_sub_field('background_imagen');
                $title = get_sub_field('title');
                $title_sub = get_sub_field('sub-title');
                ?>
                <?php if ($link): ?>

                <?php endif; ?>

                <section  id="banner02" class="banner background"  background-size="cover" style=" background-image: url('<?php echo $image['url']; ?>');   background-size: cover; ">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <img src="<?php echo $icono['url']; ?>" alt="<?php echo $icono['alt']; ?>" />
                            <h1 class="wow fadeIn" data-wow-duration="2s">  <?php echo $title; ?></h1>
                            <p>  <?php echo $title_sub; ?></p>
                        </div>
                    </div>
                </section>
                <?php if ($link): ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>


        <!-- /Banner Principal -->

        <!-- Contenido -->
        <div class="container-fluid">
            <div class="row">

                <?php
                $image = get_field('pic-1');

                if (!empty($image)):
                    ?>


                    <div style="    background-image: url('<?php echo $image['url']; ?>'); height: 354px; background-size: cover;" class="col-md-4 col-sm-6 servicio-pic item-match " data-parallax="scroll"  data-z-index="10"></div><!-- Imagen 1 -->


                <?php endif; ?>                    <div class="col-md-4 col-sm-6 servicio-content item-match">
                    <div class="inner wow   fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">
                        <?php
                        $image = get_field('imagen_cogs');

                        if (!empty($image)):
                            ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                        <h2><?php the_field('title_admin'); ?></h2>
                        <p><?php the_field('content_text_admin'); ?></p>
                    </div>
                </div>

                <?php
                $image = get_field('pic-2');

                if (!empty($image)):
                    ?>


                    <div style="    background-image: url('<?php echo $image['url']; ?>'); height: 354px; background-size: cover;" class="col-md-4 col-sm-6 servicio-pic item-match " data-parallax="scroll"  data-z-index="10"></div><!-- Imagen 1 -->


                <?php endif; ?>
                <div class="row">
                    <div class="col-md-4  col-sm-6 col-sm-pull-6 col-md-pull-0 servicio-content item-match">
                        <div class="inner wow  fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">

                            <?php
                            $image = get_field('imagen_note');

                            if (!empty($image)):
                                ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>



                            <h2><?php the_field('title_control'); ?></h2>
                            <p><?php the_field('content_text_admin'); ?></p>
                        </div>
                    </div>

                    <?php
                    $image = get_field('pic-3');

                    if (!empty($image)):
                        ?>

                        <div style="    background-image: url('<?php echo $image['url']; ?>'); height: 423px;" class="col-md-4 col-sm-6 servicio-pic item-match " data-parallax="scroll"  data-z-index="10"></div><!-- Imagen 1 -->

                    <?php endif; ?>
                    <div class="col-md-4  col-sm-6 servicio-content item-match">
                        <div class="inner wow   fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">


                            <?php
                            $image = get_field('imagen_rocket');

                            if (!empty($image)):
                                ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>





                            <h2><?php the_field('title_web'); ?></h2>
                            <p><?php the_field('content_text_web'); ?></p>
                        </div>
                    </div>
                </div>
            </div><!-- Content -->
            <!-- Estadisticas -->
            <div class="estadisticas bg-cover">
                <div class="container">
                    <div class="row text-center">
                        <h3 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s"><?php the_field('title_stadics'); ?></h3>

                        <div class="col-sm-2" data-wow-delay="0.5s">
                        </div>

                        <?php if (have_rows('content_stadis')): ?>
                            <?php
                            while (have_rows('content_stadis')): the_row();

                                // vars
                                $text = get_sub_field('percent');
                                $text2 = get_sub_field('text');
                                ?>
                                <?php if ($link): ?> <a href="<?php echo $link; ?>">
                                    <?php endif; ?>
                                    <div class="col-md-4 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                        <div class="item-match">
                                            <span class="percentweb1 count" ><?php echo $text; ?></span>
                                        </div>
                                        <p><?php echo $text2; ?></p>
                                    </div>
                                    <?php if ($link): ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <!-- Estadisticas -->
            <!-- Tecnologias -->
            <div class="tecnologias-empleadas text-center">

                <div class="row">
                    <div class="col-sm-12">
                        <h2><?php the_field('title_tecnologies'); ?></h2>
                        <div class="col-sm-1" data-wow-delay="0.5s">
                        </div>

                        <?php if (have_rows('images_technologies')): ?>
                            <?php
                            while (have_rows('images_technologies')): the_row();
                                // vars
                                $image = get_sub_field('imagen');
                                ?>
                                <?php if ($link): ?>
                                <?php endif; ?>
                                <div class="col-sm-2" data-wow-delay="0.5s">
                                    <a href="#">
                                        <img src="<?php echo $image['url']; ?>" alt="La Casa de los Pixeles - New Fashion" />
                                    </a>
                                </div>

                                <?php if ($link): ?>
                                <?php endif; ?>
                            <?php endwhile; ?>

                        <?php endif; ?>

                    </div>
                </div>


            </div>
        </div>

        <!-- Portafolio -->
        <div id="portafolio" class="container-fluid">
            <div class="portafolio-titulo wow fadeIn">
                <h2> <?php the_field('stadictis-title'); ?></h2>
            </div>
            <div class="row">

                <?php if (have_rows('portafolio')): ?>
                    <?php
                    while (have_rows('portafolio')): the_row();
                        // vars
                        $image = get_sub_field('imagen');
                        $text = get_sub_field('text');
                        $imagensub = get_sub_field('imagensub');
                        ?>
                        <?php if ($link): ?>
                        <?php endif; ?>
                        <div class="col-sm-4 no-padd wow fadeIn" data-wow-delay="0.5s">
                            <a href="#">
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


            </div>        </div>
        <!-- /Portafolio -->

        <!-- Contactanos -->
        <div id="contactanos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h1 > <?php the_field('title_proyect'); ?></h1>
                        <br>
                    </div>
                    <br>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <p ><?php the_field('title_proyect_text'); ?></p>
                    </div>
                </div>
                <a  class="emerald-btn" href="<?php the_field('link_contact'); ?>">Iniciar proyecto</a>
            </div>
        </div>
        <!-- Contatanos -->
        <?php get_footer(); ?>
