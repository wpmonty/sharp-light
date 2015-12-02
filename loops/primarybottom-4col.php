<article class="featuredpost">

	<?php 
	global $count, $rgb, $catname, $catid;
	if($count == 1)
	{ ?>
	
		<div class="subnews-first">
			<?php
			gabfire_media(array(
				'name' => 'th-block10', 
				'imgtag' => 1,
				'link' => 1,
				'enable_video' => 1, 
				'video_id' => 'featured', 
				'enable_thumb' => 1,
				'resize_type' => 'c', /* c to crop, h to resize only height, w to resize only width */
				'media_width' => 263, 
				'media_height' => 137, 
				'thumb_align' => 'alignnone',
				'enable_default' => 0
			)); 
			?>
			
			<a class="subnews-catname" style="background-color: rgb(<?php echo $rgb; ?>);background-color: rgba(<?php echo $rgb; ?>, 0.8);" href="<?php echo get_category_link($catid); ?>">
				<?php echo $catname; ?> <i class="fa fa-angle-double-right"></i>
			</a>
		</div>
		
	<?php 
	} ?>
	
	<h2 class="entry-title">
		<a style="color: rgb(<?php echo $rgb; ?>);" href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" >
			<?php the_title(); ?>
		</a>
	</h2>
	
	<?php echo '<p>' . string_limit_words(12) . '</p>'; ?>
	
</article>