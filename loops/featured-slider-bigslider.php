<article class="item">
	<?php 
	gabfire_media(array(
	'name' => 'postthumbnail-big', 
	'imgtag' => 1,
	'link' => 1,
	'enable_video' => 1, 
	'video_id' => 'featured',
	'enable_thumb' => 1, 
	'resize_type' => 'c', 
	'media_width' => 1140, 
	'media_height' => 500, 
	'thumb_align' => 'alignnone featured-img',
	'enable_default' => 0
	));
	?>
	
	<div class="featured-caption">
		<h2 class="entry-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" >
				<?php the_title(); ?>
			</a>
			
			<?php
			$location = get_post_meta($post->ID, 'location', true);
			if ($location != '') {
				echo "<span>$location</span>";
			} ?>										
		</h2>
	</div>
</article>