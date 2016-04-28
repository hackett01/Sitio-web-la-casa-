<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'homepage',
        'title'       => 'Homepage'
      ),
      array(
        'id'          => 'footer',
        'title'       => 'Footer'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'about_us_title',
        'label'       => 'About Us Title',
        'desc'        => '',
        'std'         => 'About Us',
        'type'        => 'text',
        'section'     => 'homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'about_us_sub_text',
        'label'       => 'About Us Sub Text',
        'desc'        => '',
        'std'         => 'Detailed information about us',
        'type'        => 'text',
        'section'     => 'homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'about_us_big_text',
        'label'       => 'About Us Big Text',
        'desc'        => '',
        'std'         => 'A short and sweet tagline about your business profile goes right here!',
        'type'        => 'text',
        'section'     => 'homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'about_us_page_id',
        'label'       => 'About Us Page ID',
        'desc'        => '',
        'std'         => '2',
        'type'        => 'text',
        'section'     => 'homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'our_team_title',
        'label'       => 'Our Team Title',
        'desc'        => '',
        'std'         => 'Our Team',
        'type'        => 'text',
        'section'     => 'homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'our_team_sub_text',
        'label'       => 'Our Team Sub Text',
        'desc'        => '',
        'std'         => 'We are a group of skilled individuals.',
        'type'        => 'text',
        'section'     => 'homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'from_the_blog_title',
        'label'       => 'From the Blog title',
        'desc'        => '',
        'std'         => 'From the Blog',
        'type'        => 'text',
        'section'     => 'homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'from_the_blog_sub_text',
        'label'       => 'From the Blog sub text',
        'desc'        => '',
        'std'         => 'Latest posts from our blog',
        'type'        => 'text',
        'section'     => 'homepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'address',
        'label'       => 'Address',
        'desc'        => '',
        'std'         => '123, Lexington Street, Nice Boulevard.<br />
New York City, USA<br />
23F43.',
        'type'        => 'textarea-simple',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'twitter_url',
        'label'       => 'Twitter Url',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'facebook_url',
        'label'       => 'Facebook Url',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'linkedin_url',
        'label'       => 'Linkedin Url',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'googleplus_url',
        'label'       => 'GooglePlus Url',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pinterest_url',
        'label'       => 'Pinterest Url',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'copyright',
        'label'       => 'Copyright',
        'desc'        => '',
        'std'         => 'Copyright © 2015',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}