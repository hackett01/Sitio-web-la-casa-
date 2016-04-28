<ul class="topslider">
        <?php $my_query = new WP_Query('post_type=slider'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                     
                <?php 
                    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $thumbnailsrc = $thumb[0]; ?>
	<li style="background:url(<?php echo $thumbnailsrc; ?>) no-repeat center center; background-attachment:scroll; background-size:cover;"> 
                    <div class="carousel-caption">
                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    <p class="blacklayer"><?php echo twitter_excerpt(350); ?></p>
                    <a class="btn btn-sm btn-success toprmore" href="<?php the_permalink() ?>"><i class="fa fa-fw fa-angle-double-right"></i>Read More</a>
                    </div>
            </li>
         <?php endwhile; ?>
</ul>
  <ul class="fancyborder"><li></li><li></li><li></li><li></li><li></li></ul>