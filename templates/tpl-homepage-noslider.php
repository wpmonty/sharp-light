<?php
	/*
		Template Name: Homepage NoSlider
	*/
	$do_not_duplicate = '';
?>

<?php get_header(); ?>

	<section class="row archive-mag-top">
		
		<?php
		if (get_option('sharp_featype') == 'mrecent') {
			$args = array(
			  'posts_per_page' => 3,
			);
		}
		elseif (get_option('sharp_featype') == 'tagbased') {
			$args = array(
			  'posts_per_page' => 3,
			  'tag_id' => get_option('sharp_tag')
			);
		}
		elseif (get_option('sharp_featype') == 'cfbased') {
			$args = array(
			  'post_type' => 'any',
			  'posts_per_page' => 3,
			  'meta_key' => 'featured', 
			  'meta_value' => 'true'
			);
		}				
		else {
			$args = array(
			  'cat' => get_option('sharp_cat'), 
			  'posts_per_page' => 3
			);
		}	
		$wp_query = new WP_Query();$wp_query->query($args); 
		while ($wp_query->have_posts()) : $wp_query->the_post();						
		$do_not_duplicate[] = $post->ID;
		
			get_template_part('loops/home-static-topposts');
		
		 endwhile; wp_reset_query();
		 ?>
	</section>
	
	<section class="row archive-mag-bottom">
		<div class="col-xs-12 col-md-8 archive-withsidebar">		
			<div class="row">
				<div class="col-md-3 mag-leftsidebar">
					<?php gabfire_dynamic_sidebar('archive-mag-left'); ?>
				</div>
				
				<div class="col-md-9">
				
					<?php
					$count = 1;
					$args = array(
					  'post__not_in'=> $do_not_duplicate,
					  'posts_per_page' => 3
					);
					$wp_query = new WP_Query();$wp_query->query($args); 
					while ($wp_query->have_posts()) : $wp_query->the_post();						
					$do_not_duplicate[] = $post->ID;
				
						get_template_part('loops/home-static-bottomposts');
					
					$count++; endwhile; wp_reset_query(); ?>
					
					<div class="clearfix"></div>
					
					<?php
					$count = 1;
					$args = array(
					  'post__not_in'=> $do_not_duplicate,
					  'cat' => get_option('sharp_cat'),
					  'posts_per_page' => 3
					);
					$wp_query = new WP_Query();$wp_query->query($args); 
					while ($wp_query->have_posts()) : $wp_query->the_post();						
					$do_not_duplicate[] = $post->ID;
				
						get_template_part('loops/home-static-bottomposts');
					
					$count++; endwhile; wp_reset_query(); ?>
					
					<div class="clearfix"></div>					

				</div>
			</div>
		
			<div class="clearfix"></div>	
		</div><!-- col-md-8 -->
		
		<div class="clearfix hidden-lg hidden-md"></div>

		<?php get_sidebar(); ?>
	</section>

<?php get_footer(); ?>