<?php
if(get_option('sharp_2col') <> '' && is_category(explode(',', get_option('sharp_2col')))) {
	$numberof_words = 20;
	$media_width = 363;
	$media_height = 224;
	$enable_video = 1;
	$name = 'th-loopgrid-2';
	
} elseif(get_option('sharp_2col_full') <> '' && is_category(explode(',', get_option('sharp_2col_full')))) {
	$numberof_words = 40;
	$media_width = 555;
	$media_height = 343;
	$enable_video = 1;
	$name = 'th-loopgrid-1';
	
} elseif(get_option('sharp_4col') <> '' && is_category(explode(',', get_option('sharp_4col')))) {
	$numberof_words = 15;
	$media_width = 172;
	$media_height = 106;
	$enable_video = 0;
	$name = 'th-loopgrid-2';
	
} elseif(get_option('sharp_4col_full') <> '' && is_category(explode(',', get_option('sharp_4col_full')))) {
	$numberof_words = 18;
	$media_width = 270;
	$media_height = 167;
	$enable_video = 1;
	$name = 'th-loopgrid-2';
	
} elseif(get_option('sharp_3col') <> '' && is_category(explode(',', get_option('sharp_3col')))) {
	$media_width = 236;
	$media_height = 146;
	$numberof_words = 15;
	$enable_video = 0;
	$name = 'th-loopgrid-2';
	
} else {
	//fallback -> 3 column no sidebar template
	$media_width = 363;
	$media_height = 224;
	$numberof_words = 28;
	$enable_video = 1;
	$name = 'th-loopgrid-2';
}

		$count = 1;
		if (have_posts()) : while (have_posts()) : the_post();
		?>
			
			<article <?php post_class('entry'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
			
				<h2 class="entry-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
				</h2>
				
				<?php
				if ( ( get_option('sharp_2col') <> '' && is_category(explode(',', get_option('sharp_2col'))))
				  or ( get_option('sharp_3col') <> '' && is_category(explode(',', get_option('sharp_3col')))) )
				{
					gabfire_postmeta(true,true,false,false,false,false,true);
				} elseif ( !is_category(explode(',', get_option('sharp_4col')))) {
					gabfire_postmeta(true,true,false,true,false,false,true);
				} ?>

				<?php
					gabfire_media(array(	
						'name' => $name, 
						'imgtag' => 1,
						'link' => 0,
						'enable_video' => $enable_video, 
						'video_id' => 'postfull',
						'enable_thumb' => 1, 
						'resize_type' => 'c', 
						'media_width' => $media_width, 
						'media_height' => $media_height, 
						'thumb_align' => 'aligncenter',
						'enable_default' => 0
					)); 
					?>
					<p><?php print string_limit_words($numberof_words); ?></p>
					
			</article>
		<?php $count++; endwhile; else: endif; ?>