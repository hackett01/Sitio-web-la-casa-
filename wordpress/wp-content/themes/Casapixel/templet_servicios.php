<?php /* Template Name: servicios */ ?>
<?php get_header(); ?>
<!-- /Banner Principal -->
<div class="ych-menu-content">
    <?php if (have_rows('parallax_principal')): ?>
        <?php
        while (have_rows('parallax_principal')): the_row();
            // vars
            $image = get_sub_field('imagen');
            $content = get_sub_field('title');
            ?>
            <?php if ($link): ?>
            <?php endif; ?>
            <section  id="banner02" class="banner background"  background-size="cover" style=" background-image: url('<?php echo $image['url']; ?>');   background-size: cover; ">
                <h1 class="wow fadeIn" data-wow-duration="2s">  <?php echo $content; ?></h1>
            </section>
            <?php if ($link): ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <section id="servicio1" class="square-section section-1 clearfix" >
        <div class="col-md-6">
            <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                <?php
                $image = get_field('imagen_compuder');

                if (!empty($image)):
                    ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                    
                    
                <h1>Diseño web</h1>

                <?php if (have_rows('web_content')): ?>
                    <?php
                    while (have_rows('web_content')): the_row();

                        // vars
                        $text = get_sub_field('text');
                        ?>
                        <?php if ($link): ?> <a href="<?php echo $link; ?>">
                            <?php endif; ?>

                            <p><?php echo $text; ?></p>

                            <?php if ($link): ?>
                            </a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>


                 <a  class="emerald-btn" href="<?php the_field('link_diseno'); ?>">Más información</a>
            </div>
        </div>
    </section>
    <section id="servicio2" class="square-section section-2 clearfix" >
        <div class="col-md-6 col-md-offset-6">




            <?php
            $image = get_field('imagen_phone');

            if (!empty($image)):
                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>


            <img src="<?php echo bloginfo('template_url'); ?>/img/w-app.png" alt="Aplicaciones Moviles">
            <h1><?php the_field('title_mobile_apps'); ?></h1>

            <?php if (have_rows('app_content')): ?>
                <?php
                while (have_rows('app_content')): the_row();

                    // vars
                    $text = get_sub_field('text');
                    ?>
                    <?php if ($link): ?> <a href="<?php echo $link; ?>">
                        <?php endif; ?>

                        <p><?php echo $text; ?></p>

                        <?php if ($link): ?>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>


             <a  class="emerald-btn" href="<?php the_field('link_movil'); ?>">Más información</a>
        </div>
</div>


<section id="servicio3" class="square-section  section-3 clearfix"  background-size="auto 100%">
    <div class="col-md-6">
        <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">


            <?php
            $image = get_field('imagen_browser');

            if (!empty($image)):
                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>



            <h1><?php the_field('title_web_apps'); ?></h1>
            <?php if (have_rows('web_content')): ?>
                <?php
                while (have_rows('web_content')): the_row();

                    // vars
                    $text = get_sub_field('text');
                    ?>
                    <?php if ($link): ?> <a href="<?php echo $link; ?>">
                        <?php endif; ?>

                        <p><?php echo $text; ?></p>

                        <?php if ($link): ?>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

              <a  class="emerald-btn" href="<?php the_field('link_aplicaciones-web'); ?>">Iniciar proyecto</a>
        </div>
    </div>
</section>
<section id="servicio4" class=" square-section  section-4 clearfix"  background-size="auto 100%">
    <div class="col-md-6 col-md-offset-6">
        <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">


            <?php
            $image = get_field('imagen_identity');

            if (!empty($image)):
                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>


            <h1><?php the_field('title_identity'); ?></h1>



            <?php if (have_rows('content_identity')): ?>
                <?php
                while (have_rows('content_identity')): the_row();

                    // vars
                    $text = get_sub_field('text');
                    ?>
                    <?php if ($link): ?> <a href="<?php echo $link; ?>">
                        <?php endif; ?>

                        <p><?php echo $text; ?></p>

                        <?php if ($link): ?>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <a  class="emerald-btn" href="<?php the_field('link_identidad-corporativa'); ?>">Más información</a>
        </div>
    </div>
</section>
<section id="servicio5" class=" square-section  section-3 clearfix"  background-size="auto 100%">
    <div class="col-md-6">
        <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">

            <?php
            $image = get_field('imagen_socila');

            if (!empty($image)):
                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>







            <h1><?php the_field('tiltle_social_media'); ?></h1>

            <?php if (have_rows('content_social')): ?>
                <?php
                while (have_rows('content_social')): the_row();

                    // vars
                    $text = get_sub_field('text');
                    ?>
                    <?php if ($link): ?> <a href="<?php echo $link; ?>">
                        <?php endif; ?>

                        <p><?php echo $text; ?></p>

                        <?php if ($link): ?>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
             <a  class="emerald-btn" href="<?php the_field('link_social-media'); ?>">Más información</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
