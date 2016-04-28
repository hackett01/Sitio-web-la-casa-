        <div class="section topspace bottomspacehalf">
            <div class="container-fluid">
                         <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center text-primary fancy" contenteditable="true"><span><?php echo ot_get_option("our_team_title"); ?></span></h2>
                                <p class="text-center subtext"><?php echo ot_get_option("our_team_sub_text"); ?></p>
                            </div>
                        </div>
            </div>
            </div>

        <div class="section">
            <div class="container">
                 <div class="row">
<?php $my_query = new WP_Query('post_type=team&posts_per_page=4'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                      
                <?php 
                    $i=1;
                    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                    $thumbnailsrc = $thumb[0]; 
                    if ($thumbnailsrc) { ?>
                    <div class="col-sm-2">
                        <img src="<?php echo $thumbnailsrc; ?>" class="center-block img-circle img-responsive borderimg">
                    </div>
                <?php } ?>

                   <div class="col-sm-4 text-center">
                        <h3 class="text-left"><?php the_title(); ?></h3>
                        <div class="text-left para"><?php the_content();?></div>
                    </div>
                    <?php if($i%2==0) {?><div class="clearfix"></div> <?php }?>
         <?php $i++; endwhile; ?>
                </div>

            </div>
        </div>