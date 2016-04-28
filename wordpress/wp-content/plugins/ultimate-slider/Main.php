<?php 
/*
Plugin Name: Ultimate Slider
Plugin URI: http://www.EtoileWebDesign.com/plugins/
Description: A plugin that lets you create a slider, using posts, WooCommerce or Ultimate Product Catalog products
Author: Etoile Web Design
Author URI: http://www.EtoileWebDesign.com/plugins/
Terms and Conditions: http://www.etoilewebdesign.com/plugin-terms-and-conditions/
Text Domain: EWD_US
Version: 0.2
*/

global $ewd_us_message;
global $US_Full_Version;
global $EWD_US_Version;

$EWD_US_Version = '0.2';

define( 'EWD_US_CD_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'EWD_US_CD_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

register_activation_hook(__FILE__,'Set_EWD_US_Options');


if ( is_admin() ){
    add_action('admin_head', 'EWD_US_Admin_Options');
    add_action('widgets_init', 'Update_EWD_US_Content');
    add_action('admin_notices', 'EWD_US_Error_Notices');
}

function EWD_US_Admin_Options() {
    wp_enqueue_style( 'ewd-us-admin', plugins_url("ultimate-slider/css/Admin.css"));
    wp_enqueue_style( 'spectrum', plugins_url("ultimate-slider/css/spectrum.css"));
}

function EWD_US_Enable_Sub_Menu() {
    add_submenu_page('edit.php?post_type=ultimate_slider', 'Slider Options', 'Settings', 'edit_posts', 'us-options', 'EWD_US_Output_Options_Page');
}
add_action('admin_menu' , 'EWD_US_Enable_Sub_Menu');


function EWD_US_Make_Posts_Sortable($hook) {
    global $post;

    if ($hook == 'edit.php' or $hook == 'post-new.php' or $hook == 'post.php') {
        if ($post->post_type == 'ultimate_slider') {     
            wp_enqueue_script(  'jquery-ui-core' );
            wp_enqueue_script(  'jquery-ui-sortable' );
            wp_enqueue_script(  'ultimate-slider-admin', plugins_url('ultimate-slider/js/ultimate-slider-admin.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-sortable'), true);
            wp_enqueue_script(  'spectrum', plugins_url('ultimate-slider/js/spectrum.js'), array('jquery'), true);
        }
    }
}
add_action( 'admin_enqueue_scripts', 'EWD_US_Make_Posts_Sortable', 10, 1 );

add_action( 'wp_enqueue_scripts', 'EWD_US_Add_Stylesheet' );
function EWD_US_Add_Stylesheet() {
    wp_enqueue_style( 'main', plugins_url("ultimate-slider/css/main.css"));
}

add_action( 'wp_enqueue_scripts', 'Add_EWD_US_FrontEnd_Scripts' );
function Add_EWD_US_FrontEnd_Scripts() {
    wp_register_script( 'ultimate-slider', plugins_url('ultimate-slider/js/ultimate-slider.js'), array('jquery'), true);

    $Autoplay_Slideshow = get_option('EWD_US_Autoplay_Slideshow');
    $Autoplay_Delay = get_option('EWD_US_Autoplay_Delay');
    $Autoplay_Interval = get_option("EWD_US_Autoplay_Interval");
    $Slide_Transition_Effect = get_option("EWD_US_Slide_Transition_Effect");
    $Transition_Time = get_option("EWD_US_Transition_Time");

    $Data_Array = array( 'autoplay_slideshow' => $Autoplay_Slideshow,
                        'autoplay_delay' => $Autoplay_Delay,
                        'autoplay_interval' => $Autoplay_Interval,
                        'slide_transition_effect' => $Slide_Transition_Effect,
                        'transition_time' => $Transition_Time
        );
    wp_localize_script( 'ultimate-slider', 'ewd_us_php_data', $Data_Array );
    
    wp_enqueue_script('ultimate-slider');
}

if (isset($_GET['post_type']) and $_GET['post_type'] == 'ultimate_slider' and $_GET['page'] == "us-options") {add_action("admin_notices", "EWD_US_Upgrade_Box");}

include "Functions/EWD_US_Add_Meta_Boxes.php";
include "Functions/EWD_US_Add_Order_Column.php";
include "Functions/EWD_US_Error_Notices.php";
include "Functions/EWD_US_Output_Options_Page.php";
include "Functions/EWD_US_Process_Ajax.php";
include "Functions/EWD_US_Register_Custom_Posttype.php";
include "Functions/EWD_US_Upgrade_Box.php";
include "Functions/Update_EWD_US_Admin_Databases.php";
include "Functions/Update_EWD_US_Content.php";

include "Shortcodes/Display_Slider.php";

if (get_option('EWD_US_Version') != $EWD_US_Version) {
    Set_EWD_US_Options();
}

function Set_EWD_US_Options() {
    global $US_Full_Version;
    global $EWD_US_Version;

    if (get_option("EWD_US_Autoplay_Slideshow") == "") {update_option("EWD_US_Autoplay_Slideshow", "Yes");}
    if (get_option("EWD_US_Autoplay_Delay") == "") {update_option("EWD_US_Autoplay_Delay", 6);}
    if (get_option("EWD_US_Autoplay_Interval") == "") {update_option("EWD_US_Autoplay_Interval", 4);}
    if (get_option("EWD_US_Slide_Transition_Effect") == "") {update_option("EWD_US_Slide_Transition_Effect", "slide");}
    if (get_option("EWD_US_Transition_Time") == "") {update_option("EWD_US_Transition_Time", 1);}
    if (get_option("EWD_US_Full_Version") == "") {update_option("EWD_US_Full_Version", "Yes");}

    update_option("EWD_US_Version", $EWD_US_Version);
}