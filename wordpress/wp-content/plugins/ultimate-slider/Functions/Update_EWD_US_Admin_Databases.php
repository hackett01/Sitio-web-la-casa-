<?php
/* The file contains all of the functions which make changes to the WordPress tables */


function EWD_US_UpdateOptions() {
global $US_Full_Version;

	if (isset($_POST['custom_css'])) {update_option('EWD_US_Custom_CSS', stripslashes_deep($_POST['custom_css']));}
	if (isset($_POST['slider-autoplay'])) {update_option('EWD_US_Autoplay_Slideshow', stripslashes_deep($_POST['slider-autoplay']));}
	if (isset($_POST['autoplay_delay'])) {update_option('EWD_US_Autoplay_Delay', stripslashes_deep($_POST['autoplay_delay']));}
	if (isset($_POST['autoplay_interval'])) {update_option('EWD_US_Autoplay_Interval', stripslashes_deep($_POST['autoplay_interval']));}
	if (isset($_POST['slide_transition_effect'])) {update_option('EWD_US_Slide_Transition_Effect', stripslashes_deep($_POST['slide_transition_effect']));}
	if (isset($_POST['transition_time'])) {update_option('EWD_US_Transition_Time', stripslashes_deep($_POST['transition_time']));}

	$update_message = __("Options have been succesfully updated.", 'EWD_US');
	$update['Message'] = $update_message;
	$update['Message_Type'] = "Update";
	return $update;
}

?>