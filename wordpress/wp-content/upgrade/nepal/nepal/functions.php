<?php
require_once('wp_bootstrap_navwalker.php');

/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */
add_filter( 'ot_show_new_layout', '__return_false' );

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
load_template( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

/**
 * Theme Options
 */
load_template( trailingslashit( get_template_directory() ) . '/theme-options.php' );

add_theme_support('menus');
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary' ),
		)
	);
}

add_filter( 'get_search_form' , 'bobsearch' , 2 ) ;
function bobsearch( $markup ) {
    $markup = str_replace( 'class="search-form"' , 'class="search-form row"' , $markup ) ;
    $markup = str_replace( '<label' , '<i class="fa fa-search""></i> &nbsp;<label' , $markup ) ;
    $markup = str_replace( '<input type="text"' , '<input type="text" class="form-control" placeholder="type and hit enter"' , $markup ) ;
    $markup = preg_replace( '/(<span class="screen-reader-text">.*?>)/' , '' , $markup ) ;
    $markup = preg_replace( '/(<input type="submit".*?>)/' , '<br />' , $markup ) ;
    return $markup;
}

function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) return true;
    return false;
}

add_theme_support('post-thumbnails');

register_sidebar(array(
  'name' => __( 'Left Hand Sidebar' ),
  'id' => 'leftbar',
  'description' => __( 'Widgets in this area will be shown on the left-hand side of inner pages' ),
  'before_title' => '<h4>',
  'after_title' => '</h4><ul class="list-unstyled">'
));
register_sidebar(array(
  'name' => __( 'Footer Section 1' ),
  'id' => 'footer1',
  'description' => __( 'Widgets in this area will be shown on the Footer Left Section.' ),
  'before_title' => '<h4>',
  'after_title' => '</h4><ul class="list-unstyled text-inverse footerlinks">'
));
register_sidebar(array(
  'name' => __( 'Footer Section 2' ),
  'id' => 'footer2',
  'description' => __( 'Widgets in this area will be shown on the Footer Right Section.' ),
  'before_title' => '<h4>',
  'after_title' => '</h4><ul class="list-unstyled text-inverse footerlinks">'
));

function twitter_excerpt($len){
$excerpt = get_the_content();
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$the_str = substr($excerpt, 0, $len);
return $the_str;
}


// Our custom post type function
function create_posttype() {

	register_post_type( 'slider',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Slider' ),
				'singular_name' => __( 'Slide' ),

			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'slider'),
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		)
	);

		register_post_type( 'features',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Features' ),
				'singular_name' => __( 'Feature' ),

			),
            'taxonomies' => array('category'), 
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'features'),
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
		)
	);

				register_post_type( 'parallax',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Parallax Sections' ),
				'singular_name' => __( 'Section' ),

			),
            'taxonomies' => array('category'), 
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'parallax'),
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
		)
	);


				register_post_type( 'team',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Team' ),
				'singular_name' => __( 'Member' ),

			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'team'),
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


function the_breadcrumb () {
     
    // Settings
    $separator  = '';
    $id         = 'breadcrumb';
    $class      = 'breadcrumb';
    $home_title = 'Home';
     
    // Get the query & post information
    global $post,$wp_query;
    $category = get_the_category();
     
    // Build the breadcrums
    echo '<ul id="' . $id . '" class="' . $class . '">';
     
    // Do not display on the homepage
    if ( !is_front_page() ) {
         
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
         
        if ( is_single() ) {
             
            // Single post (Only display the first category)
            echo '<li class="item-cat item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><a class="bread-cat bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '" href="' . get_category_link($category[0]->term_id ) . '" title="' . $category[0]->cat_name . '">' . $category[0]->cat_name . '</a></li>';
            echo '<li class="item-current item-' . $post->ID . '">' . get_the_title() . '</li>';
             
        } 

			elseif ( is_home() ) {
			   echo '<li class="item-current item-' . $post->ID . '">'.wp_title('', false).'</li>';
			} 
        else if ( is_category() ) {
             
            // Category page
            echo '<li class="item-current item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><strong class="bread-current bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '">' . $category[0]->cat_name . '</strong></li>';
             
        } else if ( is_page() ) {
             
            // Standard page
            if( $post->post_parent ){
                 
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                 
                // Get parents in the right order
                $anc = array_reverse($anc);
                 
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                }
                 
                // Display parent pages
                echo $parents;
                 
                // Current page
                echo '<li class="item-current item-' . $post->ID . '">' . get_the_title() . '</li>';
                 
            } else {
                 
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '">' . get_the_title() . '</li>';
                 
            }
             
        } else if ( is_tag() ) {
             
            // Tag page
             
            // Get tag information
            $term_id = get_query_var('tag_id');
            $taxonomy = 'post_tag';
            $args ='include=' . $term_id;
            $terms = get_terms( $taxonomy, $args );
             
            // Display the tag name
            echo '<li class="item-current item-tag-' . $terms[0]->term_id . ' item-tag-' . $terms[0]->slug . '"><strong class="bread-current bread-tag-' . $terms[0]->term_id . ' bread-tag-' . $terms[0]->slug . '">' . $terms[0]->name . '</strong></li>';
         
        }

         elseif ( is_day() ) {
             
            // Day archive
             
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
             
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
             
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
             
        } else if ( is_month() ) {
             
            // Month Archive
             
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
             
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
             
        } else if ( is_year() ) {
             
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
             
        } else if ( is_author() ) {
             
            // Auhor archive
             
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
             
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
         
        } else if ( get_query_var('paged') ) {
             
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
             
        } else if ( is_search() ) {
         
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
         
        } elseif ( is_404() ) {
             
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
         
    }
     
    echo '</ul>';
     
}


function mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body panel panel-default">
    <?php endif; ?>
    <div class="comment-author vcard panel-heading">
        <?php printf( __( '<strong>%s</strong> <span class="timecomment"> left a comment on' ), get_comment_author_link() ); ?>
        <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
        <?php printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?>
        </a>
        <?php edit_comment_link( __( '(Edit)' ), '  ', '' );?>
        </span>
    </div>
    <div class="panel-body">

    <?php comment_text(); ?>
    </div>

    <div class="reply panel-footer">
    <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        <?php if ( $comment->comment_approved == '0' ) : ?>
        <em class="comment-awaiting-moderation pull-right"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
    <?php endif; ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; 
    }
?>