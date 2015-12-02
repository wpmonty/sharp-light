<?php if ($GLOBALS['count'] == 1) 
{ ?>

	<article>
		<?php 
		gabfire_media(array(
			'name' => 'th-block1', 
			'imgtag' => 1,
			'link' => 1,
			'enable_video' => 1,
			'video_id' => 'block1', 
			'enable_thumb' => 1,
			'resize_type' => 'c', 
			'media_width' => 555, 
			'media_height' => 280, 
			'thumb_align' => 'aligncenter',
			'enable_default' => 0
		)); 
		?>
		
		<?php gabfire_postmeta(true,true,false,false,false,true,true); ?>
		
		<div class="pull-left">
			<h2 class="entry-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" >
					<?php the_title(); ?>
				</a>
			</h2>
				
			<?php echo '<p>' . string_limit_words(45) . '</p>'; ?>
			
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" class="readmore">
				<i class="fa fa-chevron-right"></i> <?php _e('CONTINUE READING','gabfire'); ?>
			</a>
		</div>
		
	<?php 
} 
	
else
{ ?>
		<div class="pull-right smaller-post">
			<p class="smaller-post-cap">
				<?php if ( get_option('sharp_cap2a') <> "" ) { 
					echo get_option('sharp_cap2a'); 
				} ?>
			</p>
			<?php 
			gabfire_media(array(
				'name' => 'th-block2', 
				'imgtag' => 1,
				'link' => 1,
				'enable_video' => 0, 
				'video_id' => 'featured', 
				'enable_thumb' => 1,
				'resize_type' => 'c', 
				'media_width' => 150, 
				'media_height' => 103, 
				'thumb_align' => 'aligncenter',
				'enable_default' => 0
			)); 
			?>

			<h2 class="entry-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" >
					<?php the_title(); ?>
				</a>
			</h2>
			<?php echo '<p class="smallerpost_p">' . string_limit_words(12) . '&hellip;</p>'; ?>		

			<a href="<?php echo get_category_link(get_option('sharp_cat2'));?>" class="btn btn-default readmore"><?php _e('View All','gabfire'); ?></a>
		</div>
	</article>
<?php
} ?>