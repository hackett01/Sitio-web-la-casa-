<?php $my_query = new WP_Query('post_type=page&page_id='.ot_get_option("about_us_page_id")); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                      
            <div class="section aboutus topspace bottomspacehalf">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center text-primary maintitle fancy"><span><?php echo ot_get_option("about_us_title"); ?></span></h2>
                         <p class="text-center subtext"><?php echo ot_get_option("about_us_sub_text"); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bottomspace">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="bigfont hidden-sm hidden-xs text-muted text-right"><?php echo ot_get_option("about_us_big_text"); ?></h1>
                    </div>
                    <div class="col-md-8">
                        <div class="para"><?php the_content(); ?></div>
                    </div>
                </div>
            </div>
        </div>

         <?php endwhile; ?>