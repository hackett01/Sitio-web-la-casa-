<?php get_header(); ?>
<?php get_template_part('breadcrumb'); ?>

        <div class="section">
            <div class="container">
                <div class="row">
					


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                 <div class="col-sm-9">
                 <div class="entry">
                        <h4 class="heads">
                           <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <div class="postmeta">Posted by <?php the_author_posts_link() ?> on <?php the_time('F jS, Y') ?></div>
                        <div class="topspacehalf para bottomspacehalf">
						<?php the_content(); ?>
                            </div>

						 <ul class="list-inline postmeta text-muted">
						<?php foreach((get_the_category()) as $cat) {
						echo '<li><a href="'.get_category_link( $cat->cat_ID, 'post_tag' ).'" class="label label-info">' . $cat->cat_name .'</a></li>';
						} ?>
						</ul>
						         <?php comments_template(); ?>
                    </div>
                    </div>


 <?php endwhile;?>

 <?php endif; ?>

<?php get_sidebar(); ?>

                </div>
            </div>
        </div>




<?php get_footer(); ?>