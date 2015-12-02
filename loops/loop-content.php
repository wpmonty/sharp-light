<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		

	<article itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost" <?php post_class('entry'); ?>>
		<?php			
			gabfire_singlepostmedia();
			gabfire_innerslide_wrapper();

			/**
			 * the_content @hooked functions
			 *
			 * gabfire_clearpost		 5 (inc/theme-functions.php)
			 * gabfire_postpagination	10 (inc/theme-functions.php)
			 * gabfire_postcredit		15 (inc/theme-functions.php)
			 * gabfire_tags				20 (inc/theme-functions.php)
			 * gabfire_singlepostmeta	25 (inc/theme-functions.php)
			 */
			echo '<div class="entry-content" itemprop="text">'; the_content(); echo '</div>';
		?>
	</article>

	<?php 
	endwhile; else : endif; 	
		
	/**
	 * gabfire_after_singlepost_query @hooked functions
	 *
	 * gabfire_single_post_widget_zones		10 (inc/theme-functions.php)
	 * gabfire_archivepage_display_loop		15 (inc/theme-functions.php)
	 */
	do_action( 'gabfire_after_singlepost_query' );	

	comments_template(); 
	?>