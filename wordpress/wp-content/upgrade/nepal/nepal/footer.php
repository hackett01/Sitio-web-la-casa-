<ul class="fancyborder"><li></li><li></li><li></li><li></li><li></li></ul>
            <div class="section darkbg padding sidebar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer1') ) : else : ?>
                        <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer2') ) : else : ?>
                        <?php endif; ?>
                        </div>
                        <div class="col-sm-3">
                            <h4>Address</h4>
                            <p class="footerlinks"><?php echo ot_get_option("address"); ?></p>
                             <h4>Connect</h4>
                             <ul class="socials">
                             <li><a href="<?php echo ot_get_option("twitter_url"); ?>"><i class="fa fa-twitter fa-lg"></i></a></li>
                              <li><a href="<?php echo ot_get_option("facebook_url"); ?>"><i class="fa fa-facebook fa-lg"></i></a></li>
                               <li><a href="<?php echo ot_get_option("linkedin_url"); ?>"><i class="fa fa-linkedin fa-lg"></i></a></li>
                                <li><a href="<?php echo ot_get_option("googleplus_url"); ?>"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                    <li><a href="<?php echo ot_get_option("pinterest_url"); ?>"><i class="fa fa-pinterest fa-lg"></i></a></li>
                             </ul>
                        </div>
                    </div>
                </div>
            </div>
  <ul class="fancyborder"><li></li><li></li><li></li><li></li><li></li></ul>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                        <div class="pull-left">Nepal WordPress Theme by <a href="http://www.blogohblog.com" title="Free WordPress Themes">Blog Oh! Blog</a></div>
                        <div class="pull-right"><?php echo ot_get_option("copyright"); ?> | <?php bloginfo('name'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php wp_footer(); ?>
</html>