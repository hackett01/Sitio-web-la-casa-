        <div class="section topspace bottomspacehalf">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center text-primary fancy"><span><?php echo ot_get_option("from_the_blog_title"); ?></span></h2>
                        <p class="text-center subtext"><?php echo ot_get_option("from_the_blog_sub_text"); ?></p>
                    </div>
                </div>
            </div>
        </div>



        <div class="section bottomspace">
            <div class="container">
                <div class="row">
<?php $my_query = new WP_Query('post_type=post&posts_per_page=8'); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                <div class="col-md-3 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2 text-center">
                                <div class="imgouter">
                              <?php 
                                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                                $thumbnailsrc = $thumb[0]; 
                                if ($thumbnailsrc) { ?>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> <img src="<?php echo $thumbnailsrc; ?>" class="center-block img-responsive blogimg"></a>
                            <?php } ?>
                                    
                                <div class="laytext"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                                </div>
                                </div>


             <?php endwhile;?>

                    </div>
                </div>
            </div>