<?php get_header(); ?>
<?php get_template_part('breadcrumb'); ?>

     <div class="section">
            <div class="container">
                <div class="row">

                <h4 class="page-title">
                    <?php
                        if ( is_day() ) :
                            printf( __( 'Daily Archives: %s', 'twentyfourteen' ), get_the_date() );

                        elseif ( is_month() ) :
                            printf( __( 'Monthly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) );

                        elseif ( is_year() ) :
                            printf( __( 'Yearly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) );

                        else :
                            _e( 'Archives', 'twentyfourteen' );

                        endif;
                    ?>
                </h4>
                
            </div>
     </div>

     <div class="section">
            <div class="container">
                <div class="row">
                         <?php $i=1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="col-md-6 col-sm-12">
                            <?php 
			                    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
			                    $thumbnailsrc = $thumb[0]; 
			                    if ($thumbnailsrc) { ?>
			                     
			                 <div class="imgouter pull-left thumb">
			                 <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">  
			                <img src="<?php echo $thumbnailsrc; ?>" title="<?php the_title(); ?>" class="center-block fullwidth img-responsive blogimg">
			                </a>
			                </div>
			                <?php } ?>

                                <div class="media-body bottomspacehalf">
                                    <h4 class="media-heading heads">
                                    <a class="heads" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </h4>
			                            <div class="para">
			                            <p><?php echo twitter_excerpt(120); ?>...</p>
			                            </div>

                                </div>
                            </div>
                        <?php if($i%2==0) {?> <div class="clearfix"></div><?php } ?>
                        <?php $i++; endwhile;?>
                        <?php endif; ?>



                </div>
            </div>
     </div>

<?php get_footer(); ?>