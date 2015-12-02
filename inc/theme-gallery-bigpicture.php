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
	


	foreach ( $attachments as $attachment ) {
		
		$caption = "";
		if ($attachment->post_excerpt) {
			$caption = '<p>' . $attachment->post_excerpt . '</p>';
		}
		
	   $photo_output .= '<div class="bigpicture_item">';
	   $photo_output .= wp_get_attachment_image( $attachment->ID, 'postthumbnail-big' );
	   $photo_output .= $caption;
	   $photo_output .= '</div>';
	   
	   $counter++;
	}
}

if ($counter > 1) {
	echo '<section class="row bigpicture_wrapper"><div class="col-md-12">';
		echo $photo_output;
	echo '</div></section>';
}