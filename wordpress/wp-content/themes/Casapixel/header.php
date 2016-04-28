<?php
/**
 * The Header template for our theme
 */
$generator_options = get_option('faster_theme_options');
# print_r($generator_options);
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php if (!empty($generator_options['favicon'])) { ?>
            <link rel="shortcut icon" href="<?php echo esc_url($generator_options['favicon']); ?>">
        <?php } ?>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body >
        <header>
            <div class="container">
                    <div class="row">
                      <div class="col-md-3 col-sm-4 col-xs-8">
                         <figure>
                             <a href="//lacasadelospixeles.com/"><img src="<?php echo bloginfo ('template_url');?>/img/logo-white.svg" alt="La Casa de los Pixeles"></a>
                         </figure>
                     </div>


                        <?php
                        $generator_defaults = array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_class' => 'navbar-collapse collapse no-padding pull-right',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'navbar-collapse no-padding pull-right collapse',
                            'menu_id' => '',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '<ul class="nav navbar-nav generator-menu">%3$s</ul>',
                            'depth' => 0,
                            'walker' => ''
                        );
                        wp_nav_menu($generator_defaults);
                        ?>

                      
                    </div>



                </div>
            </div>
        </header>
