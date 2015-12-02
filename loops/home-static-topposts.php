<div class="col-md-4 col-sm-4">
	<article <?php post_class('mag_latest'); ?>>
		<div class="arc_maglatest_media">
			<?php
			gabfire_media(array(
				'name' => 'th-mag1',
				'imgtag' => 1,
				'link' => 1,
				'enable_video' => 0,
				'video_id' => 'postfull',
				'enable_thumb' => 1,
				'resize_type' => 'c',
				'media_width' => 360,
				'media_height' => 240,
				'thumb_align' => 'postmedia',
				'enable_default' => 0
			));
			?>
			<img class="post_topleft" src="<?php echo get_template_directory_uri(); ?>/images/star.png" alt="" />
		</div>

		<div class="arc_maglatest_desc">

			<?php gabfire_postmeta(true,true,false,false,false,false,true); ?>

			<h2 class="entry-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
			</h2>

			<p class="postexcerpt"><?php echo string_limit_words(14); ?></p>
		</div>
	</article>
</div>