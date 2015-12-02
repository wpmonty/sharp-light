<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post();
	
	/* Any subtitle entered to page? */
	$subtitle = get_post_meta($post->ID, 'subtitle', true);
	 ?>
	
	<?php /* Post lead */ ?>
	<div class="row">
		<div class="col-md-12">
			<div class="post-lead">
				<h1 class="entry-title">
					<?php
					$parent_title = get_the_title($post->post_parent);
					echo $parent_title;
					?>
				</h1>
			</div>
		</div>
	</div>
	
	<div class="row"role="main">
		<main class="col-xs-12 col-md-8" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">	
			
				<article <?php post_class('entry'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
					<?php $image = wp_get_attachment_image_src( $attachment->id, "sb-postfull-nosidebar"); ?>
					<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" class="attachment-full" />
									
					<div class="attachment-nav">
						<?php previous_image_link( false, __('&laquo; Previous Image','gabfire')); ?> <a href="<?php echo get_permalink($post->post_parent); ?>"><?php _e('Back to Post','gabfire'); ?></a> <?php next_image_link( false, __('Next Image &raquo;','gabfire')); ?>
					</div>
					
					<div class="gallery attachment-gallery">
						<?php
							$count = 1;
							$args = array(
							'post_type' => 'attachment',
							'numberposts' => -1,
							'order' => 'ASC',
							'post_parent' => $post->post_parent);
							$attachments = get_posts($args);

							if ($attachments){
								foreach ($attachments as $attachment){
									echo '<dl class="gallery-item"><dt class="gallery-icon">';
									echo '<a href="'.get_attachment_link($attachment->ID, false).'">'.wp_get_attachment_image($attachment->ID, 'thumbnail').'</a>';
									echo '</dt></dl>';
									$count++;
								}
							}
						?>
					</div>
					
					<?php comments_template(); ?>
				</article>				
		</main><!-- col-md-8 --><div class="clearfix hidden-lg hidden-md"></div>

		<?php get_sidebar(); ?>

	</div >
	
	<?php endwhile; else : endif; ?>
	
<?php get_footer(); ?>