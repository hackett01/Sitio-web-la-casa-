<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fixedbg.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php if (function_exists('wp_enqueue_script') && function_exists('is_singular')) : ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php endif; ?>

<script type="text/javascript">
$( document ).ready(function() {
    $('.topslider').bxSlider({
      mode: 'fade',
      controls: false,
      pager: false,
      auto: true,
      captions: true
    });
});
</script>
<?php wp_head(); ?>
</head>
   
    <body>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><span><b><?php bloginfo('title'); ?></b></span><br></a>
                </div>
                         <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                 'container_id'      => 'navbar-ex-collapse',
                 'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
            </div>
        </div>

  <ul class="fancyborder"><li></li><li></li><li></li><li></li><li></li></ul>