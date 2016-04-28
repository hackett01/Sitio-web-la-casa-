<?php

function EWD_US_Display_Slider($atts, $content = null) {
	global $wpdb;
	global $items_table_name;

	extract( shortcode_atts( array(
		'posts' => '-1',
		'category' => '',
	), $atts ) );

	$return_string = '<div class="clear"></div>';
	$return_string .= '<div class="ewd-slider-section">';
	$return_string .= '<div class="slider" style="height: 371.556px;">';
	$return_string .= '<ul class="slider-window">';
		
		$args = array(
						'posts_per_page' => $posts,
						'post_type' => 'ultimate_slider',
						'ultimate_slider_categories' => $category,
						'meta_key' => 'EWD_US_Slide_Order',
						'orderby' => 'meta_value_num',
						'order' => 'ASC',
			);
		$my_query = new WP_Query($args);
		
		$Slide_Counter = 0;

		while ($my_query->have_posts()) : $my_query->the_post();
			$post = get_post();

			$Content_Type = get_post_meta($post->ID, "EWD_US_Content_Type", true);
			$UPCP_Product_ID = get_post_meta($post->ID, "EWD_US_UPCP_Product_ID", true);
			$WC_Product_ID = get_post_meta($post->ID, "EWD_US_WC_Product_ID", true);
			$Max_Title_Chars = get_post_meta($post->ID, "EWD_US_Max_Title_Chars", true);
			$Max_Body_Chars = get_post_meta($post->ID, "EWD_US_Max_Body_Chars", true);
			$Image_Type = get_post_meta($post->ID, "EWD_US_Image_Type", true);
			$Buttons = get_post_meta($post->ID, "EWD_US_Buttons", true); 
			if (!is_array($Buttons)) {$Buttons = array();}

			if ($Content_Type == 'upcp_product') {
				if (class_exists('UPCP_Product')) {
					$Product = new UPCP_Product(array('ID' => $UPCP_Product_ID));
					$Title = $Product->Get_Product_Name();
					$Content = $Product->Get_Field_Value('Item_Description');
					$Image_URL = $Product->Get_Field_Value('Item_Photo_URL');
				}
			}
			elseif ($Content_Type == 'woocommerce_product') {
				$Title = get_the_title($WC_Product_ID);
				$Content_Post = get_post($WC_Product_ID);
				$Content = $Content_Post->post_content;
				$Content = apply_filters('the_content', $Content);
				$Content = str_replace(']]>', ']]&gt;', $Content);
				$post_thumbnail_id = get_post_thumbnail_id($WC_Product_ID);
				$Image_URL = wp_get_attachment_url( $post_thumbnail_id );
			}
			else {
				$Title = get_the_title();
				$Content = get_the_content();
				$post_thumbnail_id = get_post_thumbnail_id();
				$Image_URL = wp_get_attachment_url( $post_thumbnail_id );
			}

			if ($Max_Title_Chars != "") {$Title = substr($Title, 0, $Max_Title_Chars);}
			if ($Max_Body_Chars != "") {$Content = substr($Content, 0, $Max_Body_Chars);}
	
			if ($Slide_Counter != 0) {$Hidden_Class = "ewd-us-hidden";}
			else {$Hidden_Class = "";}

			$return_string .= '<li class="ewd-slide ' . $Hidden_Class . '">';
				$return_string .= '<img src="' . $Image_URL . '" alt="' . $Title . '">';
				$return_string .= '<div class="slideText">';
					$return_string .= '<div class="slideTitle">' . $Title . '</div>';
					$return_string .= '<div class="clear"></div>';
					$return_string .= '<div class="slideExcerpt">' . $Content . '</div>';
					$return_string .= '<div class="clear"></div>';
					$return_string .= '<ul class="slideButtons">';
						foreach ($Buttons as $Button) {
							if ($Button['Post_ID'] == 0) {$Link = $Button['Custom_Link'];}
							else {$Link = get_permalink($Button['Post_ID']);}
							$return_string .= '<li>';
							$return_string .= "<a href='" . $Link . "'>" . strtoupper($Button['Text']) . "</a>";
							$return_string .= '</li>';
						}
					$return_string .= '</ul>';
					//$return_string .= '<a class="slideButtonOne" href="#">VIEW CATALOG</a>';
					//$return_string .= '<a class="slideButtonTwo" href="#">CONTACT US</a>';					
				$return_string .= '</div> <!-- slideText -->';
				$return_string .= '</li> <!-- slideText -->';

			$Slide_Counter++;
		
		endwhile;
		wp_reset_query();

	$return_string .= '</ul> <!-- slider-window -->';
	$return_string .= ' <span class="nav-arrow" id="left"><span class="ewd-slider-icon" id="left"></span></span> <!-- nav arrow -->';
	$return_string .= ' <span class="nav-arrow" id="right"><span class="ewd-slider-icon"  id="right"></span></span> <!-- nav arrow -->';
	$return_string .= '</div> <!-- slider -->';
	$return_string .= '<div class="ewd-slider-control" id=""><div class="ewd-slider-control-button-list"></div></div>';
	$return_string .= '</div> <!-- slider-section -->';

	$return_string .= '<div class="clear"></div>';
	
	return $return_string;													
}
add_shortcode('ultimate-slider', 'EWD_US_Display_Slider');