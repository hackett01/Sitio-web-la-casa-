<?php get_header(); ?>
<?php get_template_part('breadcrumb'); ?>

<?php $my_query = new WP_Query('posts_per_page=1&post_type=post'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
       <div class="section">
            <div class="container">
                <div class="row greybg padding">
                       
                        <div class="col-sm-3">
			                 <?php 
			                    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
			                    $thumbnailsrc = $thumb[0]; 
			                    if ($thumbnailsrc) { ?>
			                 <div class="imgouter">
			                 <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">  
			                <img src="<?php echo $thumbnailsrc; ?>" title="<?php the_title(); ?>" class="center-block img-responsive blogimg">
			                </a>
			                </div>
			                <?php } ?>
                         </div>
                        <div class="col-sm-9">
                        <label class="label label-danger">Latest Post</label>
                            <h3 class="heads"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            <div class="para">
                            <p><?php echo twitter_excerpt(400); ?>...</p>
                            </div>
                            <a class="btn btn-primary btn-sm" href="<?php the_permalink() ?>"><i class="fa fa-fw fa-angle-double-right"></i>Read More</a>
                        </div>

                </div>
            </div>
        </div>
 <?php endwhile; ?>


     <div class="section">
            <div class="container">
                <div class="row">
               		<?php   $i=1; $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$loopb = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 6, 'paged' => $paged, 'offset' => 1  ) ); ?>
                         <?php while ( $loopb->have_posts() ) : $loopb->the_post(); ?>
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
                        <?php $i++; endwhile; ?>


                </div>
            </div>
     </div>

     <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                       <?php
						if($loopb->max_num_pages>1){?>
						    <ul class="pagination pagination-sm">
						    <?php
						      if ($paged > 1) { ?>
						        <li><a href="<?php echo '?paged=' . ($paged -1); //prev link ?>">Prev</a></li>
						                        <?php }
						    for($i=1;$i<=$loopb->max_num_pages;$i++){?>
						        <li><a href="<?php echo '?paged=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php echo $i;?></a></li>
						        <?php
						    }
						    if($paged < $loopb->max_num_pages){?>
						        <li><a href="<?php echo '?paged=' . ($paged + 1); //next link ?>">Next</a></li>
						    <?php } ?>
						    </ul>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>


<?php get_footer(); ?>