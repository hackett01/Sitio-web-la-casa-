<?php get_header(); ?>
<?php get_template_part('breadcrumb'); ?>

        <div class="section">
            <div class="container">
                <div class="row">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                 <div class="col-md-9">
                 <div class="entry">
                        <h4 class="heads">
                           <?php the_title(); ?>
                        </h4>
                       <div class="topspacehalf para bottomspacehalf">
						<?php the_content(); ?>
                            </div>
                    </div>
                    </div>


 <?php endwhile;?>

 <?php endif; ?>

					<?php get_sidebar(); ?>

                </div>
            </div>
        </div>




<?php get_footer(); ?>