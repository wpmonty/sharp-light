<?php 
	get_header(); 
	global $wp_query;
	$postid = $wp_query->post->ID;
		
	/* Assing custom field values to variables */
	$post_layout = get_post_meta($postid, 'gabfire_post_template', true);

	/**
	 * gabfire_before_singlepost_body hook
	 * Template: Default, Left Sidebar, Big Picture & No Sidebar
	 *
	 * @hooked gabfire_singleposttitle 		10 (inc/theme-functions.php)
	 * @hooked gabfire_extract_bigpictures	20 (inc/theme-functions.php)
	 */	
	do_action('gabfire_before_singlepost_body');

	
	/* Set correct classes based on post layout for
	 * Template: Default, Left Sidebar, Big Picture & No Sidebar
	 */
	 
	if ($post_layout == 'leftsidebar')
	{
		$section_class = 'leftsidebar';
		$main_class = 'col-xs-12 col-md-8';
	}
	
	elseif ($post_layout == 'fullwidth') 
	{
		$section_class = 'fullwidth_wrapper';
		$main_class = 'col-xs-12 col-md-12';
	}
	
	else
	{
		$section_class = '';
		$main_class = 'col-xs-12 col-md-8';
	} ?>
	
	<section class="row <?php echo $section_class; ?>">

		<main class="post-wrapper <?php echo $main_class; ?>" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
			
				<?php get_template_part('loops/loop-content'); ?>
				
		</main><!-- col-md-8 -->
		
		<div class="clearfix hidden-lg hidden-md"></div>

		<?php
		/* If this is not fullwidth template -> add sidebar */
		if ( $post_layout != 'fullwidth' ) { get_sidebar(); } ?>

	</section>
	
<?php get_footer(); ?>