<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class('entry'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">	
		
		<h2 class="posttitle entry-title" itemprop="headline">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
		</h2>
		
		<?php gabfire_postmeta(true,true,true,true,false,false,true); ?>

		<?php
			gabfire_media(array(
				'name' => 'th-loopdefault', 
				'imgtag' => 1,
				'link' => 0,
				'enable_video' => 1, 
				'video_id' => 'postfull',
				'enable_thumb' => 1, 
				'resize_type' => 'c', 
				'media_width' => 750, 
				'media_height' => 350, 
				'thumb_align' => 'aligncenter full-media nomargin',
				'enable_default' => 0
			)); 

			the_excerpt();
			?>
	</article>
	
<?php endwhile; else: ?>
		<article class="entry">
		
			<h2 class="posttitle"><?php _e( 'Nothing Found', 'gabfire' ); ?></h1>
			<p class="single_postmeta">
				<?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'gabfire' ); ?>
			</p>
			
			<form class="" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
			  <div class="form-group">
				<input type="text" class="form-control input-medium " name="s" placeholder="<?php _e('Type Keyword & Hit Enter','gabfire'); ?>" value="<?php echo get_search_query(); ?>">
			  </div>
			</form>					
		</article>
<?php endif;