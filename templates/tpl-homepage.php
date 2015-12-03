<?php
	/*
		Template Name: Homepage
	*/
	$do_not_duplicate = '';
?>

<?php get_header(); ?>

	<section class="row archive-mag-top">

		<?php
    	$rowtype = get_option('sharp_featype');

		if ( $rowtype == 'mrecent' ) {
			$args = array(
			  'posts_per_page' => 3,
			);
		} elseif ($rowtype == 'tagbased') {
			$args = array(
			  'posts_per_page' => 3,
			  'tag_id' => get_option('sharp_tag')
			);
		} elseif ( $rowtype == 'cfbased' ) {
			$args = array(
			  'post_type' => 'any',
			  'posts_per_page' => 3,
			  'meta_key' => 'featured',
			  'meta_value' => 'true'
			);
		} else {
			$args = array(
			  'cat' => get_option('sharp_cat'),
			  'posts_per_page' => 3
			);
		}

		$wp_query = new WP_Query();$wp_query->query($args);
		while ($wp_query->have_posts()) : $wp_query->the_post();
		    $do_not_duplicate[] = $post->ID;?>

            <div class="col-md-4 col-sm-4">
				<?php get_template_part('loops/archive-card'); ?>
            </div>

		<?php endwhile; wp_reset_query(); ?>
	</section>

	<div class="clearfix"></div>

	<section class="row archive-mag-middle">
    	<div class="col-md-12">
    	    <?php sharp_dynamic_sidebar( 'home-middle' ); ?>
    	</div>
	</section>

	<div class="clearfix"></div>

	<section class="row archive-mag-bottom">
		<div class="col-xs-12 col-md-8 archive-withsidebar">
    		<div class="row">

                <div class="col-xs-12">
                    <?php sharp_dynamic_sidebar('home-left-top'); ?>
                </div>

                <div class="clearfix"></div>

    			<?php
    			$args = array(
    			  'post__not_in'=> $do_not_duplicate,
    			  'posts_per_page' => 6
    			);
    			$wp_query = new WP_Query();
    			$wp_query->query($args);

    			while ($wp_query->have_posts()) : $wp_query->the_post();
    			    $do_not_duplicate[] = $post->ID; ?>

        			 <div class="col-md-6 col-sm-4">

        				<?php get_template_part('loops/archive-card'); ?>

        			 </div>

    			<?php endwhile; wp_reset_query(); ?>

    			<div class="clearfix"></div>

    			<?php
    			$args = array(
    			  'post__not_in'=> $do_not_duplicate,
    			  'cat' => get_option('sharp_cat'),
    			  'posts_per_page' => 4
    			);
    			$wp_query = new WP_Query();
    			$wp_query->query($args);

    			while ($wp_query->have_posts()) : $wp_query->the_post();
    			    $do_not_duplicate[] = $post->ID; ?>

        			 <div class="col-md-6 col-sm-4">
        				<?php get_template_part('loops/archive-card'); ?>
        			 </div>

    			<?php endwhile; wp_reset_query(); ?>

                <div class="col-xs-12">
                    <div class="clearfix"></div>
                    <?php sharp_dynamic_sidebar('home-left-bottom'); ?>
                    <div class="clearfix"></div>
                </div>

    			<div class="clearfix"></div>
    		</div>
		</div><!-- col-md-8 -->

		<div class="clearfix hidden-lg hidden-md"></div>

		<?php get_sidebar(); ?>
	</section>

	<div class="clearfix"></div>

	<section class="row archive-mag-cat-row">

    	<h2>Fitness</h2>

    	<?php
		$args = array(
		  'post__not_in'=> $do_not_duplicate,
		  'posts_per_page' => 4
		);
		$wp_query = new WP_Query();
		$wp_query->query($args);

		while ($wp_query->have_posts()) : $wp_query->the_post();
		    $do_not_duplicate[] = $post->ID; ?>

			 <div class="col-md-3 col-sm-6">

				<?php get_template_part('loops/archive-card'); ?>

			 </div>

		<?php endwhile; wp_reset_query(); ?>

		<div class="clearfix"></div>
	</section>

	<div class="clearfix"></div>

	<section class="row archive-mag-cat-row">

    	<h2>Weight Loss</h2>

    	<?php
		$args = array(
		  'post__not_in'=> $do_not_duplicate,
		  'posts_per_page' => 4
		);
		$wp_query = new WP_Query();
		$wp_query->query($args);

		while ($wp_query->have_posts()) : $wp_query->the_post();
		    $do_not_duplicate[] = $post->ID; ?>

			 <div class="col-md-3 col-sm-6">

				<?php get_template_part('loops/archive-card'); ?>

			 </div>

		<?php endwhile; wp_reset_query(); ?>

		<div class="clearfix"></div>
	</section>

	<div class="clearfix"></div>

	<section class="row archive-mag-cat-row">

    	<h2>Recipes</h2>

    	<?php
		$args = array(
		  'post__not_in'=> $do_not_duplicate,
		  'posts_per_page' => 4
		);
		$wp_query = new WP_Query();
		$wp_query->query($args);

		while ($wp_query->have_posts()) : $wp_query->the_post();
		    $do_not_duplicate[] = $post->ID; ?>

			 <div class="col-md-3 col-sm-6">

				<?php get_template_part('loops/archive-card'); ?>

			 </div>

		<?php endwhile; wp_reset_query(); ?>

		<div class="clearfix"></div>
	</section>

	<div class="clearfix"></div>

<?php get_footer(); ?>