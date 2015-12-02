<article <?php post_class('mag_latest archive-card'); ?>>

	<div class="">
		<?php
		gabfire_media(array(
			'name' => 'moderate',
			'imgtag' => 1,
			'link' => 1,
			'enable_video' => 0,
			'video_id' => 'postfull',
			'enable_thumb' => 1,
			'resize_type' => 'c',
			'media_width' => 360,
			'media_height' => 245,
			'thumb_align' => 'postmedia',
			'enable_default' => 0
		));
		?>
	</div>

	<div class="arc_maglatest_desc">

		<?php gabfire_postmeta(true,true,false,false,false,false,false); ?>

		<h2 class="entry-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
		</h2>

	</div>

</article>