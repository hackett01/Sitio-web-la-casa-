<?php function base_url(){ return '//localhost:8888/lacasadelospixeles'; }  ?>
<?php $uri =  $_SERVER['REQUEST_URI']; $uri = explode('/',$uri); $size = count($uri); $slug = $uri[$size-1]; ?>
<?php $json = file_get_contents('meta.json');
$obj = json_decode($json,true);
if($slug == ""){
    $slug = "home";
}
$flag = false;
foreach ($obj as $key => $value) {
    if($key == $slug){
       $flag = true;
    }
}
 ?>
<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="<?php echo 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>" />
        <?php if($flag): ?>
            <title><?php echo $obj[$slug]['meta-data']['Title']; ?></title>
            <link rel="publisher" href="<?php echo $obj[$slug]['meta-data']['Author']['rel-author']; ?>">
            <meta name="author" content="<?php echo $obj[$slug]['meta-data']['Author']['meta-tag']; ?>" >
            <meta name="description" content="<?php echo $obj[$slug]['meta-data']['Description']; ?>">
            <!-- Twitter Card -->
            <meta name="twitter:site" content="@lacasadepixeles" />
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:title" content="<?php echo $obj[$slug]['meta-data']['og:title']; ?>" />
            <meta name="twitter:creator" content="@lacasadepixeles" />
            <meta name="twitter:description" content="<?php echo $obj[$slug]['meta-data']['og:description']; ?>">
            <meta name="twitter:image" content="<?php echo $obj[$slug]['meta-data']['og:image']; ?>" />
            <!-- Meta OG -->
            <meta property="og:title" content="<?php echo $obj[$slug]['meta-data']['og:title']; ?>" />
            <meta property="og:type" content="<?php echo $obj[$slug]['meta-data']['og:type']; ?>" />
            <meta property="og:url" content="<?php echo $obj[$slug]['meta-data']['og:url']; ?>" />
            <meta property="og:image" content="<?php echo $obj[$slug]['meta-data']['og:image']; ?>" />
            <meta property="og:description" content="<?php echo $obj[$slug]['meta-data']['og:description']; ?>" />
        <?php else: ?>
            <title>La Casa de los Pixeles - <?php echo ucfirst($slug); ?></title>
            <meta name="description" content="La Casa de los Pixeles">
        <?php endif; ?>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="<?php echo base_url(); ?>/favicon.ico">

        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.min.css" media="all">
        <link rel="stylesheet" href="css/main.css" media="all">

        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/print.css" media="print">
        <?php if($uri[$size-2] == 'portafolio'): ?>
            <link rel="stylesheet" href="<?php echo base_url(); ?>/css/portafolio.css" media="all">
        <?php endif; ?>
        <!--<script src="js/vendor/modernizr-2.8.3.min.js"></script>-->
    </head>
    <!--****************************************************************
    ********************************************************************
    Es bueno verte por aquí. Si te interesa trabajar con nosotros
    puedes enviar tu C.V. a jobs@lacasadelospixeles.com
    Siempre estamos en busqueda de nuevo talento.
    ********************************************************************
    *****************************************************************-->
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-8">
                        <figure>
                            <a href="<?php echo base_url(); ?>/"><img src="<?php echo base_url(); ?>/img/logo-white.svg" alt="La Casa de los Pixeles"></a>
                        </figure>
                    </div>
                    <div class="pull-right navigation">
                        <nav class="hidden-sm hidden-xs">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>/">Inicio</a></li>
                                <li><a href="<?php echo base_url(); ?>/nosotros">Nosotros</a></li>
                                <li class="has-child">
                                    <a href="<?php echo base_url(); ?>/servicios">Servicios <i class="lcp-icon lcp-down-angle"></i></a>
                                    <ul class="sub-menu out">
                                        <li><a href="<?php echo base_url(); ?>/servicios/diseno-web">Diseño Web</a></li>
                                        <li><a href="<?php echo base_url(); ?>/servicios/aplicaciones-movil">Aplicaciones Moviles</a></li>
                                        <li><a href="<?php echo base_url(); ?>/servicios/aplicaciones-web">Aplicaciones Web</a></li>
                                        <li><a href="<?php echo base_url(); ?>/servicios/identidad-corporativa">Identidad Corporativa</a></li>
                                        <li><a href="<?php echo base_url(); ?>/servicios/social-media">Social Media</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="has-child"><a href="#">Portafolio <i class="lcp-icon lcp-down-angle"></i></a>
                                    <ul class="sub-menu out">
                                        <li><a href="<?php echo base_url(); ?>/portafolio/biyeon-kwan">Biyeon Kwan</a></li>
                                        <li><a href="<?php echo base_url(); ?>/portafolio/new-fashion">New Fashion</a></li>
                                        <li><a href="<?php echo base_url(); ?>/portafolio/schaebens">Schaebens</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="<?php echo base_url(); ?>/contacto">Contacto</a></li>
                            </ul>
                        </nav>
                        <button class="visible-sm visible-xs" type="button" data-toggle="ych-menu" data-target="#offcanvasmenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <div class="conteiner">
