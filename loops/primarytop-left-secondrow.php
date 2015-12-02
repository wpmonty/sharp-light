<article class="featuredpost clearfix">
	<div class="pull-left">
		<?php 
		gabfire_media(array(
			'name' => 'th-block3', 
			'imgtag' => 1,
			'link' => 1,
			'enable_video' => 0, 
			'video_id' => 'featured', 
			'enable_thumb' => 1,
			'resize_type' => 'c', 
			'media_width' => 225, 
			'media_height' => 300, 
			'thumb_align' => 'alignnone',
			'enable_default' => 0
		)); 
		?>
		<a class="postcategory" href="<?php echo get_category_link(get_option('sharp_cat4'));?>">
			<?php echo get_cat_name(get_option('sharp_cat4')); ?>
		</a>
	</div>
	
	<div class="pull-right">
		
		<?php gabfire_postmeta(true,true,false,false,false,false,true); ?>
		
		<h2 class="entry-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" >
				<?php the_title(); ?>
			</a>
		</h2>
		<?php echo '<p class="smallerpost_p">' . string_limit_words(40) . '</p>'; ?>

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" class="readmore">
			<i class="fa fa-chevron-right"></i> <?php _e('CONTINUE READING','gabfire'); ?>
		</a>
	</div>				

</article>