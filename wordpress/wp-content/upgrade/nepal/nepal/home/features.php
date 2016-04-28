<div class="section topspace bottomspace">

        <div class="container">

            <div class="row">



            <?php $my_query = new WP_Query('post_type=features&posts_per_page=3'); while ($my_query->have_posts()) : $my_query->the_post(); ?>

               <div class="col-sm-4 text-center">          

                <h3 class="text-primary toptitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

                <i class="fa fa-4x fa-fw <?php fontawesome_icon(); ?> text-muted toptitle"></i>

                 <div class="para"><p><?php echo twitter_excerpt(160); ?>...</p></div>

                </div>

             <?php endwhile; ?>



            </div>

        </div>

</div>