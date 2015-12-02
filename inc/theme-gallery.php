<?php
$args = array(
  'post_parent' => $post->ID,
  'post_type' => 'attachment',
  'numberposts' => -1,
  'post_mime_type' => 'image',
  'post_status' => null,
  'order' => 'ASC', 
  'orderby' => 'menu_order'
);


$attachments = get_posts( $args );
$counter = 0;
$photo_output = '';
	
if ( !empty($attachments) ) {
	
	global $wp_query;
	$post_layout = get_post_meta($wp_query->post->ID, 'gabfire_post_template', true);
	
	if ( ($post_layout == 'fullwidth')  or (is_page_template('templates/tpl-fullwidth.php')) ) {
		$name = 'postthumbnail-big';
	} else { 
		$name = 'postthumbnail';
	}

	
	foreach ( $attachments as $attachment ) {
		
		$caption = "";
		if ($attachment->post_excerpt) {
			$caption = '<p>' . $attachment->post_excerpt . '</p>';
		}
		
	   $photo_output .= '<div class="gabfire_innerslide_item">';
	   $photo_output .= wp_get_attachment_image( $attachment->ID, $name );
	   $photo_output .= $caption;
	   $photo_output .= '</div>';
	   
	   $counter++;
	}
}

if ($counter > 1) {
	echo '<div class="gabfire_innerslider">';
		echo $photo_output;
	echo '</div>';
}