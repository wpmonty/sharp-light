<?php
/* ********************
 * Custom field panels below text editor
 ******************************************************************** */		
if ( !function_exists( 'gabfire_meta_box_add' ) ) {

	add_action( 'add_meta_boxes', 'gabfire_meta_box_add' );

	function gabfire_meta_box_add()
	{
		add_meta_box( '', 'Gabfire Custom Fields', 'gabfire_meta_box', 'post', 'normal', 'high' );
		add_meta_box( '', 'Gabfire Custom Fields', 'gabfire_meta_box', 'page', 'normal', 'high' );
	}

	/* Create Post and Page Custom Fields */
	function gabfire_meta_box( $post )
	{
		$values = get_post_custom( $post->ID );
		if ( !function_exists('gabfire_mediaplugin')) {
			$video = isset( $values['iframe'] ) ? esc_attr( $values['iframe'][0] ) : '';
		}
		$postslider = isset( $values['disable_postslider'] ) ? esc_attr( $values['disable_postslider'][0] ) : '';  
		$feapost = isset( $values['featured'] ) ? esc_attr( $values['featured'][0] ) : '';  
		$disable_feaimage = isset( $values['post_feaimage'] ) ? esc_attr( $values['post_feaimage'][0] ) : '';  
		$button_title = isset( $values['title_btn'] ) ? esc_attr( $values['title_btn'][0] ) : '';  
		$button_link = isset( $values['title_link'] ) ? esc_attr( $values['title_link'][0] ) : '';  
		$subtitle = isset( $values['subtitle'] ) ? esc_attr( $values['subtitle'][0] ) : '';  
		$source = isset( $values['source'] ) ? esc_attr( $values['source'][0] ) : '';  
		$sourcelink = isset( $values['sourcelink'] ) ? esc_attr( $values['sourcelink'][0] ) : '';  
		$selected = isset( $values['gabfire_post_template'] ) ? esc_attr( $values['gabfire_post_template'][0] ) : '';  
		$selected2 = isset( $values['gabfire_clr_btn'] ) ? esc_attr( $values['gabfire_clr_btn'][0] ) : '';  
		wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
		?>

		
		<div class="gabfire_fieldgroup">
			<p class="gabfire_fieldcaption"><?php _e('Post Entrance', 'gabfire'); ?></p>
			
			<p class="gabfire_fieldrow">
				<label for="subtitle"><?php _e('Enter a paragraph of text to display with a larger font size above entry.','gabfire'); ?></label>
				<textarea class="gabfire_textinput" name="subtitle" id="subtitle"><?php echo $subtitle; ?></textarea>
			</p>		
		</div>			
		
		<?php if ( !function_exists('gabfire_mediaplugin')) { ?>
			<div class="gabfire_fieldgroup">
				<p class="gabfire_fieldcaption"><?php _e('Video URL', 'gabfire'); ?></p>
				<p class="gabfire_fieldrow">
					<label for="iframe"><?php _e('You can add any Youtube, Vimeo, Dailymotion or Screenr video url into this box','gabfire'); ?></label>
					<input type="text" class="gabfire_textinput" name="iframe" id="iframe" value="<?php echo $video; ?>" />
				</p>
			</div>
		<?php } ?>		
		
		<div class="gabfire_fieldgroup">
			<p class="gabfire_fieldcaption"><?php _e('Post Page Layout?', 'gabfire'); ?></p>
			<p>
				<label for="gabfire_post_template"><?php _e('Select a Post layout</br><strong>Note:</strong> Select Big Picture only if you have uploaded more than 1 photo','gabfire'); ?></label>
				
				<select name="gabfire_post_template" id="gabfire_post_template">
					<?php $posttemplate = get_post_meta( get_the_ID(), 'gabfire_post_template', true ); ?>
					<option value="default" <?php selected( $selected, '2col' ); ?>><?php _e('Default','gabfire'); ?></option>
					<option value="bigpicture" <?php selected( $selected, 'bigpicture' ); ?>><?php _e('Big Picture','gabfire'); ?></option>
					<option value="leftsidebar" <?php selected( $selected, 'leftsidebar' ); ?>><?php _e('Left Sidebar','gabfire'); ?></option>
					<option value="fullwidth" <?php selected( $selected, 'fullwidth' ); ?>><?php _e('No Sidebar','gabfire'); ?></option>
				</select>
			</p>
		</div>	
		
		<div class="gabfire_fieldgroup">
			<p class="gabfire_fieldcaption"><?php _e('Source Name', 'gabfire'); ?></p>
			<p class="gabfire_fieldrow">
				<label for="source"><?php _e('The name of the website that you want to credit for this entry','gabfire'); ?></label>
				<input type="text" class="gabfire_textinput" name="source" id="source" value="<?php echo $source; ?>" />
			</p>
		</div>
		
		<div class="gabfire_fieldgroup">
			<p class="gabfire_fieldcaption"><?php _e('Source Link', 'gabfire'); ?></p>
			<p class="gabfire_fieldrow">
				<label for="sourcelink"><?php _e('Enter a link to redirect source name','gabfire'); ?></label>
				<input type="text" class="gabfire_textinput" name="sourcelink" id="sourcelink" value="<?php echo $sourcelink; ?>" />
			</p>
		</div>
				
		<div class="gabfire_fieldgroup field_checkbox">
			<p class="gabfire_fieldcaption"><?php _e('Is Featured?', 'gabfire'); ?></p>
			<p class="gabfire_fieldrow">
				<label for="featured"><?php _e('Check this box to display this post on featured section of front page.</br><strong>Note:</strong> This will only work if Custom Field option is enabled within Theme Options.','gabfire'); ?></label>
				<span class="gabfire_checkbox"><input type="checkbox" id="featured" name="featured" <?php checked( $feapost, 'true' ); ?> /></span>
			</p>	
		</div>
		
		<div class="gabfire_fieldgroup field_checkbox">
			<p class="gabfire_fieldcaption"><?php _e('Disable Featured Image on this post?', 'gabfire'); ?></p>
			<p class="gabfire_fieldrow">
				<label for="post_feaimage"><?php _e('If you have enabled featured post on single post page option, the featured image shows at top of every post automatically. You may check this box to disable that image for certain posts.','gabfire'); ?></label>
				<span class="gabfire_checkbox"><input type="checkbox" id="post_feaimage" name="post_feaimage" <?php checked( $disable_feaimage, 'true' ); ?> /></span>
			</p>	
		</div>

		<div class="gabfire_fieldgroup field_checkbox">
			<p class="gabfire_fieldcaption"><?php _e('Disable innerpage slider for this post', 'gabfire'); ?></p>
			<p class="gabfire_fieldrow">
				<label for="disable_postslider"><?php _e('If you have enabled innerpage slider sitewide, but specifically want to disable it for this post, check this box.','gabfire'); ?></label>
				<span class="gabfire_checkbox"><input type="checkbox" id="disable_postslider" name="disable_postslider" <?php checked( $postslider, 'true' ); ?> /></span>
			</p>	
		</div>		
		
		<?php	
	}	

	add_action( 'save_post', 'gabfire_meta_box_save' );
	function gabfire_meta_box_save( $post_id )
	{
		// Bail if we're doing an auto save
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		
		// if our nonce isn't there, or we can't verify it, bail
		if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
		
		// if our current user can't edit this post, bail
		if( !current_user_can( 'edit_post' ) ) return;
		
		// now we can actually save the data
		$allowed = array( 
			'a' => array( // on allow a tags
				'href' => array() // and those anchords can only have href attribute
			)
		);
		
		// Probably a good idea to make sure your data is set
		if( isset( $_POST['iframe'] ) && !empty( $_POST['iframe'] ) && !function_exists('gabfire_mediaplugin') )
			update_post_meta( $post_id, 'iframe', wp_kses( $_POST['iframe'], $allowed ) );

		if( isset( $_POST['gabfire_post_template'] ) && !empty( $_POST['gabfire_post_template'] ) )	
			update_post_meta( $post_id, 'gabfire_post_template', esc_attr( $_POST['gabfire_post_template'] ) );  	
			
		if( isset( $_POST['source'] ) && !empty( $_POST['source'] ) )	
			update_post_meta( $post_id, 'source', esc_attr( $_POST['source'] ) );  	
			
		if( isset( $_POST['sourcelink'] ) && !empty( $_POST['sourcelink'] ) )	
			update_post_meta( $post_id, 'sourcelink', esc_attr( $_POST['sourcelink'] ) );  	

		if( isset( $_POST['gabfire_clr_btn'] ) && !empty( $_POST['gabfire_clr_btn'] ) )	
			update_post_meta( $post_id, 'gabfire_clr_btn', esc_attr( $_POST['gabfire_clr_btn'] ) );  				

		if( isset( $_POST['subtitle'] ) && !empty( $_POST['subtitle'] ) )
			update_post_meta( $post_id, 'subtitle', wp_kses( $_POST['subtitle'], $allowed ) );							
			
		$chk = isset( $_POST['featured'] ) && $_POST['featured'] ? 'true' : 'false';  
		update_post_meta( $post_id, 'featured', $chk );  
		
		$chk2 = isset( $_POST['post_feaimage'] ) && $_POST['post_feaimage'] ? 'true' : 'false';  
		update_post_meta( $post_id, 'post_feaimage', $chk2 );  	

		$chk3 = isset( $_POST['disable_postslider'] ) && $_POST['disable_postslider'] ? 'true' : 'false';  
		update_post_meta( $post_id, 'disable_postslider', $chk3 ); 				
				
	}
	
	/* Gabfire Media Module plugin loads same file. No need to load it for the second time */
	if ( !function_exists( 'gabfire_custom_fields_css' ) ) {
		function gabfire_custom_fields_css() {
			if ( function_exists('gabfire_mediaplugin')) {
				wp_enqueue_style('gabfire-customfields-style', plugins_url() .'/gabfire-media-module/style.css' );
			} else {
				wp_enqueue_style('gabfire-customfields-style', get_template_directory_uri() .'/framework/functions/css/custom-fields.css' );
			}
		}
		
		add_action('admin_head-post.php', 'gabfire_custom_fields_css');
		add_action('admin_head-post-new.php', 'gabfire_custom_fields_css');
	}	
	
	/* Add a little more niceness and assign post template class to body tag */
	add_filter('body_class','gabfire_custom_body_classes');
	function gabfire_custom_body_classes( $classes ) {
	 
		if ( get_post_meta( get_the_ID(), 'gabfire_post_template', true ) ) {
			
			$classes[] = 'body-' . get_post_meta( get_the_ID(), 'gabfire_post_template', true );
			
		}
		
		// return the $classes array
		return $classes;
	}	
}