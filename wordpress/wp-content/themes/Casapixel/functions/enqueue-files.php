<?php
/*
 * generator Enqueue css and js files
 */

function generator_enqueue() {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '', '');
wp_enqueue_style('print', get_template_directory_uri() . '/css/print.css', array(), '', '');
wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '', '');
wp_enqueue_style('style', get_stylesheet_uri(), array(), '', '');
wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '', '');
wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel.css', array(), '', '');
wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));
wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '', '');
wp_enqueue_style('portafolio', get_template_directory_uri() . '/css/portafolio.css', array(), '', '');


wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js',  array(), '', '');
wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.cycle.all.js',  array(), '', '');
wp_enqueue_script('knob', get_template_directory_uri() . '/js/jquery.knob.min.js',  array(), '', '');
wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js',  array(), '', '');
wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js',  array(), '', '');
wp_enqueue_script('matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js',  array(), '', '');
wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js"',  array(), '', '');
wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.3.min.js',  array(), '', '');
wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js',  array(), '', '');
wp_enqueue_script('bootstrapmin', get_template_directory_uri() . '/js/bootstrap.min.js',  array(), '', '');
wp_enqueue_script('default', get_template_directory_uri() . '/js/default.js',  array(), '', '');
wp_enqueue_script('animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js',  array(), '', '');
wp_enqueue_script('cycle', get_template_directory_uri() . '/js/jquery.cycle.all.js',  array(), '', '');
wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.min.js',  array(), '', '');
wp_enqueue_script('knob', get_template_directory_uri() . '/js/jquery.knob.min.js',  array(), '', '');
wp_enqueue_script('matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js',  array(), '', '');
wp_enqueue_script('loadCSS', get_template_directory_uri() . '/js/loadCSS.js',  array(), '', '');
wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js',  array(), '', '');
wp_enqueue_script('masterslider', get_template_directory_uri() . '/js/masterslider.min.js',  array(), '', '');
wp_enqueue_script('match', get_template_directory_uri() . '/js/match-height.js',  array(), '', '');
wp_enqueue_script('onloadCSS', get_template_directory_uri() . '/js/onloadCSS.js',  array(), '', '');
wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.js',  array(), '', '');
wp_enqueue_script('parallax', get_template_directory_uri() . '/js/parallax.js',  array(), '', '');
wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js',  array(), '', '');
wp_enqueue_script('portafolio', get_template_directory_uri() . '/js/portafolio.js',  array(), '', '');
wp_enqueue_script('responsiveslides', get_template_directory_uri() . '/js/responsiveslides.min.js',  array(), '', '');
wp_enqueue_script('smooths', get_template_directory_uri() . '/js/smooths.js',  array(), '', '');
wp_enqueue_script('waypoint', get_template_directory_uri() . '/js/waypoint.js',  array(), '', '');
wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js',  array(), '', '');









wp_enqueue_script('owl-carousel-script', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '20131209', true);
wp_enqueue_script('sliderjs', get_template_directory_uri() . '/js/responsiveslides.min.js', array('jquery'));
wp_enqueue_script('default', get_template_directory_uri() . '/js/default.js', array('jquery'));
if (is_singular())
wp_enqueue_script("comment-reply");
}

add_action('wp_enqueue_scripts', 'generator_enqueue');
