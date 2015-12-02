<article class="featuredpost">
	<div class="postmedia">
		<?php 
		gabfire_media(array(
			'name' => 'th-block4', 
			'imgtag' => 1,
			'link' => 1,
			'enable_video' => 0, 
			'video_id' => 'featured', 
			'enable_thumb' => 1,
			'resize_type' => 'c', 
			'media_width' => 165, 
			'media_height' => 140, 
			'thumb_align' => 'alignnone',
			'enable_default' => 0
		)); 
		?>
		<a class="postcategory" href="<?php echo get_category_link($GLOBALS['catid']);?>">
			<?php echo get_cat_name($GLOBALS['catid']); ?>
		</a>
	</div>
	
	<?php gabfire_postmeta(true,true,false,false,false,false,false); ?>
		
	<h2 class="entry-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" >
			<?php the_title(); ?>
		</a>
	</h2>
	
	<?php echo '<p>' . string_limit_words(10) . '</p>'; ?>
</article>