<?php /* Template Name: careers */ ?>

<?php get_header(); ?>

<!-- /Banner Principal -->
<div class="ych-menu-content">


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

            <section  id="banner02" class="banner background"  background-size="cover" style=" background-image: url('<?php echo $image['url']; ?>');   background-size: cover;height: 500px;">
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
    <!-- Nosotros -->
    <div class="row">
        <div class="col-sm-10 col-md-offset-1 careers-heading">
            <figure>
                <?php
                $image = get_field('imagen_svg');
                if (!empty($image)):
                    ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </figure>
            <h2><?php the_field('title_job'); ?></h2>
            <p><?php the_field('content_text_job'); ?></p>
        </div>
    </div>
    <?php if (have_rows('content_benefits')): ?>
        <?php
        while (have_rows('content_benefits')): the_row();
            // vars
            $text = get_sub_field('title_benefits');
            $content_benefits_text = get_sub_field('content_benefits_text');
            $image = get_sub_field('imagen');
            ?>
            <?php if ($link): ?>
            <?php endif; ?>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 " col-md-offset-1 >
                <figure>
                    <img src="<?php echo $image['url']; ?>" />
                </figure>
                <h3><?php echo $text; ?></h3>
                <p><?php echo $content_benefits_text; ?></p>
            </div>
            <?php if ($link): ?>
            <?php endif; ?>
        <?php endwhile; ?>

    <?php endif; ?>
    <section class="image-middle">
        <?php
        $image = get_field('img_slider');

        if (!empty($image)):
            ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
    </section>
    <div class="row available-positions">
        <figure>     <?php
            $image = get_field('imagen_svg');

            if (!empty($image)):
                ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?></figure>
        <h2><?php the_field('title_puesto'); ?></h2>
    </div>
    <?php if (have_rows('prueba')): ?>
        <?php
        while (have_rows('prueba')): the_row();
            // vars
            $text = get_sub_field('nombre');
            $content_benefits_text = get_sub_field('ubicacion');
            $descripcion = get_sub_field('descripcion');
            $lista = get_sub_field('lista');
            $id_collapse = get_sub_field('id_collapse');
            $image = get_sub_field('imagen');
            ?>
            <?php if ($link): ?>
            <?php endif; ?>
            <div class="job-available">
                <div class="row job-header">
                    <div class="col-md-6 col-md-offset-1">
                        <div class="job-title">
                            <h3><?php echo $text; ?></h3>
                            <span><?php echo $content_benefits_text; ?></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="emerald-btn pull-right apply" data-toggle="modal" data-target="#myModal">Open Modal</button>
                    </div>
                </div><!--row-->
                <div class="row job-description">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="collapse" id="<?php echo $id_collapse; ?>">
                            <h3>Requisitos</h3>
                            <p ><?php echo $descripcion; ?></p>
                            <?php
                            $lista;
                            $longitud = count($lista);
                            for ($i = 0; $i < $longitud; $i++) {
                                //saco el valor de cada elemento
                                echo "<ul class='requeriments-list'  >" . "<li>" . $lista[$i]['text'] . "</li>" . "</ul>";
                            }
                            echo "<h3>" . "Extras" . "</h3>";

                            for ($i = 0; $i < $longitud; $i++) {
                                //saco el valor de cada elemento
                                echo "<ul class='requeriments-list'  >" . "<li>" . $lista[$i]['text'] . "</li>" . "</ul>";
                            }
                            ?> 
                        </div>
                        <a class="read-more-btn" role="button" data-toggle="collapse" href="<?php echo "#" . $id_collapse; ?>" aria-expanded="false" aria-controls="collapseExample">
                            Ver Requisitos <i class="fa fa-angle-down fa-lg"></i>
                        </a>

                    </div>

                </div>
                <?php if ($link): ?>
                <?php endif; ?>
            <?php endwhile; ?>

        <?php endif; ?>
        <!-- Modal -->
        <section id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="float: right;">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header form-heading">
                        <button type="button" class="close" data-dismiss="modal" style="    float: left;
                                margin-top: 3%;
                                margin-left: -7%;"><i style=" color:  black; " class="fa fa-times" aria-hidden="true"></i></button>
                        <h4>¿Tienes lo que se necesita?</h4>
                        <p>Envíanos el siguiente formulario con tus datos y nos pondremos en contacto.</p>
                    </div>
                    <div class="modal-body">
                        <?php echo do_shortcode('[contact-form-7 id="871" title="contac-cv"]'); ?>
                    </div>

                </div>

            </div>
        </section>
    </div>



    <?php get_footer(); ?>
