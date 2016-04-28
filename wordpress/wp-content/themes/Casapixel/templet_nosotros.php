
<?php /* Template Name: Nosotros */ ?>

<?php get_header(); ?>
<div class="ych-menu-content">
    <div id="servicios-diseno-web" class="servicio">
        <section id="banner1" class="banner" background="<?php echo bloginfo('template_url'); ?>/img/banner-diseno-web.jpg" background-size="cover">
            <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1><?php the_field('top_title'); ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner Principal -->
        <div class="container-fluid">
            <div class="row" style="background-color: white;">
                <div class="first-section">
                    <div class="col-md-6 col-lg-4 clearfix" >
                        <div class="nosotros-content wow fadeIn" data-wow-duration="2s">
                            <h2><?php the_field('content_title'); ?></h2>
                            <?php if (have_rows('content_text')): ?>
                                <?php
                                while (have_rows('content_text')): the_row();

                                    // vars
                                    $text = get_sub_field('text_content');
                                    ?>
                                    <?php if ($link): ?> <a href="<?php echo $link; ?>">
                                        <?php endif; ?>

                                        <span><?php echo $text; ?></span>
                                        <?php if ($link): ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div><!-- Contenido 1 -->
                    <?php if (have_rows('content_text')): ?>
                        <?php
                        while (have_rows('content_text')): the_row();

                            // vars 
                            $image = get_sub_field('imagen');
                            ?>
                            <?php if ($link): ?> 
                            <?php endif; ?>
                            <div class="col-md-6 col-lg-8" data-type="background" data-speed="4" style="min-height: 527px; background: url('<?php echo $image['url']; ?>') right top no-repeat;background-size: cover;">


                            </div>


                            <?php if ($link): ?>

                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- First section -->
            </div>
            <div class="row" style="background-color: white;" id="1" >
                <div class="second-section clearfix blue-bg">
                    <?php
                    $image = get_field('nosotros-pic-2');

                    if (!empty($image)):
                        ?>

                        <div class="col-lg-4 hidden-md visible-lg nosotros-pic-3" style="background: url('<?php echo $image['url']; ?>') left top no-repeat;
                             background-size: cover;" data-parallax="scroll"  data-z-index="10">
                        </div><!-- Imagen 3 -->

                    <?php endif; ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="nosotros-content middle wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h2><?php the_field('content_title_top'); ?></h2>


                            <?php if (have_rows('content_text_top')): ?>
                                <?php
                                while (have_rows('content_text_top')): the_row();

                                    // vars
                                    $text = get_sub_field('text');
                                    ?>
                                    <?php if ($link): ?> <a href="<?php echo $link; ?>">
                                        <?php endif; ?>

                                        <span><?php echo $text; ?></span>
                                        <br>
                                        <br>
                                        <?php if ($link): ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div><!-- Contenido 2 -->


                    <?php
                    $image = get_field('nosotros-pic-3');

                    if (!empty($image)):
                        ?>

                        <div class="col-lg-4 hidden-md visible-lg nosotros-pic-3" style="background: url('<?php echo $image['url']; ?>') left top no-repeat;
                             background-size: cover;" data-parallax="scroll"  data-z-index="10">
                        </div><!-- Imagen 3 -->

                    <?php endif; ?>



                </div><!-- Second Section -->
            </div>
        </div>
        <!-- /Nosotros -->

        <!-- Datos -->
        <div class="datos" id="datosPa" data-parallax="scroll" data-image-src="<?php echo bloginfo('template_url'); ?>/img/bg-datos.jpg" data-z-index="0">
            <div class="container">
                <div class="row">
                    <h2 id="datos" class="wow fadeIn">Más información de nosotros</h2>
                </div>
                <div class="row">
                    <div class="col-md-2 number wow fadeIn" id="botonsuper1">
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
            </div>
        </div>

        <!-- /Portafolio -->

        <!-- Contactanos -->
        <div id="contactanos">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h1 class="wow fadeIn"><?php the_field('main_title_project'); ?></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

                        <?php if (have_rows('content_text_proyect')): ?>
                            <?php
                            while (have_rows('content_text_proyect')): the_row();

                                // vars
                                $text = get_sub_field('text');
                                ?>
                                <?php if ($link): ?> <a href="<?php echo $link; ?>">
                                    <?php endif; ?>

                                    <p class="wow fadeIn"><?php echo $text; ?></p>
                                    <?php if ($link): ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                  <a  class="emerald-btn" href="<?php the_field('link_contac'); ?>">Iniciar proyecto</a>
            </div>
        </div><!-- Contatanos -->


        <?php get_footer(); ?>
