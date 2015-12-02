<?php global $count;
 if($count == 1 ) { ?>
	<article <?php post_class('entry'); ?>>
		<div class="mag_bigmedia">
			<?php
			gabfire_media(array(	
				'name' => 'th-loopgrid-1',
				'imgtag' => 1,
				'link' => 1,
				'enable_video' => 0, 
				'video_id' => 'postfull',
				'enable_thumb' => 1, 
				'resize_type' => 'c', 
				'media_width' => 555, 
				'media_height' => 343, 
				'thumb_align' => 'postmedia',
				'enable_default' => 0
			)); 
			?>
			<h2 class="entry-title title_onmedia hidden-sm hidden-xs">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
			</h2>	
		</div>
				
		<div class="mag_excerpt">
			<h2 class="entry-title visible-sm visible-xs">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
			</h2>								
			<p><?php echo string_limit_words(30); ?></p>
			<p class="postmeta">
				<?php
				gabfire_bydate();
				gabfire_commentsnr();
				?>
			</p>						
		</div>
		<div class="clearfix visible-sm"></div>
	</article>
<?php } else { ?>
			
	<?php
	$postclass = 'entry pull-left';
	if ($count == 3) {
		$postclass = 'entry pull-right';
	} ?>
	<article <?php post_class($postclass); ?>>
		<?php
		gabfire_media(array(	
			'name' => 'th-mag2', 
			'imgtag' => 1,
			'link' => 1,
			'enable_video' => 0, 
			'video_id' => 'postfull',
			'enable_thumb' => 1, 
			'resize_type' => 'c', 
			'media_width' => 265, 
			'media_height' => 155, 
			'thumb_align' => 'aligncenter hidden-sm',
			'enable_default' => 0
		)); 
		?>
		<h2 class="entry-title s_posttitle">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
		</h2>	
					
		<p><?php echo string_limit_words(18); ?></p>
		<p class="postmeta">
			<?php
			gabfire_bydate();
			gabfire_commentsnr();
			?>
		</p>	
	</article>
<?php } ?>			