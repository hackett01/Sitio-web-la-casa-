  <ul class="fancyborder"><li></li><li></li><li></li><li></li><li></li></ul>

            <?php $my_query = new WP_Query('post_type=parallax&posts_per_page=1'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
             <div class="section parallax">
             <?php 
                    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $thumbnailsrc = $thumb[0]; 
                    if ($thumbnailsrc) { ?>
                                 <div class="background-image background-image-fixed" style="background-image : url('<?php echo $thumbnailsrc; ?>')"></div>

                <?php } ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center text-inverse textshadow toptitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                        <p class="text-center blacklayer text-inverse toptitle"><?php echo twitter_excerpt(350); ?></p>
                    </div>
                    <div class="col-md-12 text-center">
                        <a class="btn btn-sm btn-success" href="<?php the_permalink() ?>"><i class="fa fa-fw fa-angle-double-right"></i>Read More<br></a>
                    </div>
                </div>
            </div>
            </div>
             <?php endwhile; ?>

  <ul class="fancyborder"><li></li><li></li><li></li><li></li><li></li></ul>