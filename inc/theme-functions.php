<?php
/* ********************
 * ARCHIVE
 * Show category name and description on category and tag pages pages
 ******************************************************************** */
 if (!function_exists('gabfire_catNameDesc'))
 {
	add_action('gabfire_before_archive_entries', 'gabfire_catNameDesc', 10);
	function gabfire_catNameDesc()
	{
		if (is_category()) { ?>
			<section class="row">
				<div class="col-md-12">
					<div class="post-lead">
						<?php if (is_category()) { ?>
							<h1><?php single_cat_title(); ?></h1>
							<?php echo category_description(); ?>
						<?php } else { ?>
							<h1 class="post-title"><?php single_tag_title(); ?></h1>
							<?php echo tag_description(); ?>
						<?php } ?>
					</div>
				</div>
		</section><?php
		}

		elseif (is_search())
		{ ?>
			<section class="row archive">
				<div class="col-md-12">
					<div class="post-lead">
						<h1><i class='fa fa-search'></i>  <?php echo get_search_query(); ?></h1>
						<?php $search_query = get_search_query(); ?>
						<p><?php printf(esc_attr__('Search results for %1$s','gabfire'), $search_query); ?></p>
					</div>
				</div>
		</section><?php
		}
	}
}

/* ********************
 * ARCHIVE
 * Category and Tag Archive - big title below primary nav
 ******************************************************************** */
	if ( ! function_exists( 'entrynr_perCat' ) ) {
		function entrynr_perCat( $query ) {
			if ( is_admin() || ! $query->is_main_query() )
				return;

			if ( is_category(explode(',', get_option('sharp_2col'))) ) {
				$query->set( 'posts_per_page', 8 );
				return;
			}

			if ( is_category(explode(',', get_option('sharp_3col'))) ) {
				$query->set( 'posts_per_page', 12 );
				return;
			}

			if ( is_category(explode(',', get_option('sharp_4col'))) ) {
				$query->set( 'posts_per_page', 20 );
				return;
			}

			if ( is_category(explode(',', get_option('sharp_2col_full'))) ) {
				$query->set( 'posts_per_page', 6 );
				return;
			}

			if ( is_category(explode(',', get_option('sharp_3col_full'))) ) {
				$query->set( 'posts_per_page', 9 );
				return;
			}

			if ( is_category(explode(',', get_option('sharp_4col_full'))) ) {
				$query->set( 'posts_per_page', 12 );
				return;
			}

			if ( is_category(explode(',', get_option('sharp_media'))) ) {
				$query->set( 'posts_per_page', 12 );
				return;
			}

			if ( is_category(explode(',', get_option('sharp_mag'))) ) {
				$query->set( 'posts_per_page', 9 );
				return;
			}

		}
		add_action( 'pre_get_posts', 'entrynr_perCat', 1 );
	}

/* ********************
 * ARCHIVE
 * Default archive page template
 ******************************************************************** */
	if ( ! function_exists( 'gabfire_default_cat_layout' ) ) {

		add_action('gabfire_default_archive_template', 'gabfire_default_cat_layout', 10);

		function gabfire_default_cat_layout() { ?>
			<section class="row archive-default archive-template">
				<main class="col-xs-12 col-md-8" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

					<div class="entries-wrapper">
						<?php get_template_part( 'loops/archive/loop-default' ); ?>
					</div>

					<?php gabfire_archivepagination(); ?>
				</main><!-- col-md-8 -->

				<div class="clearfix hidden-lg hidden-md"></div>

				<?php get_sidebar(); ?>
			</section>

		<?php
		}
	}

/* ********************
 * MAGAZINE
 * 2, 3, 4 col grid layouts
 ******************************************************************** */
	if ( ! function_exists( 'gabfire_grid_cat_layout' ) ) {

		add_action('gabfire_grid_archive_template', 'gabfire_grid_cat_layout', 10);

		function gabfire_grid_cat_layout() {
			// Design archive template based on variables below
			if(get_option('sharp_2col') <> '' && is_category(explode(',', get_option('sharp_2col')))) {
				$section_class = 'archive-2col';
				$main_class    = 'col-xs-12 col-md-8 archive-withsidebar';
				$sidebar       = 1;

			} elseif(get_option('sharp_2col_full') <> '' && is_category(explode(',', get_option('sharp_2col_full')))) {
				$section_class = 'archive-2col';
				$main_class    = 'col-md-12 archive-full';
				$sidebar       = 0;

			} elseif(get_option('sharp_4col') <> '' && is_category(explode(',', get_option('sharp_4col')))) {
				$section_class = 'archive-4col';
				$main_class    = 'col-xs-12 col-md-8 archive-withsidebar';
				$sidebar       = 1;

			} elseif(get_option('sharp_4col_full') <> '' && is_category(explode(',', get_option('sharp_4col_full')))) {
				$section_class = 'archive-4col';
				$main_class    = 'col-md-12 archive-full';
				$sidebar       = 0;

			} elseif(get_option('sharp_3col') <> '' && is_category(explode(',', get_option('sharp_3col')))) {
				$section_class = 'archive-3col';
				$main_class    = 'col-xs-12 col-md-8 archive-withsidebar';
				$sidebar       = 1;

			} else {
				//fallback -> 3 column no sidebar template
				$section_class = 'archive-3col';
				$main_class    = 'col-md-12 archive-full';
				$sidebar       = 0;
			} ?>

				<section class="row <?php echo $section_class; ?> archive-template">

					<main class="<?php echo $main_class; ?>" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
						<div class="entries-wrapper">
							<?php get_template_part( 'loops/archive/loop-grid' ); ?>
						</div>
						<?php gabfire_archivepagination(); ?>
					</main>

					<?php if($sidebar == 1) { get_sidebar(); } ?>

				</section>
			<?php
		}
	}

/* ********************
 * ARCHIVE
 * Media archive page template
 ******************************************************************** */
	if ( ! function_exists( 'gabfire_media_cat_layout' ) ) {

		add_action('gabfire_media_archive_template', 'gabfire_media_cat_layout', 10);

		function gabfire_media_cat_layout() {
			if(!is_paged()) { ?>

				<section class="row archive-media archive-template">
					<main class="col-md-12 archive-full" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
						<?php get_template_part( 'loops/archive/loop-media' ); ?>
					</main><!-- col-md-12 -->
				</section>

			<?php
			} else {
				gabfire_grid_cat_layout();
			}
		}
	}

/* ********************
 * ARCHIVE
 * Magazine archive page template
 ******************************************************************** */
	if ( ! function_exists( 'gabfire_magazine_cat_layout' ) ) {

		add_action('gabfire_magazine_archive_template', 'gabfire_magazine_cat_layout', 10);

		function gabfire_magazine_cat_layout() {
			if(!is_paged()) {
				get_template_part( 'archive-magazine' );
			} else {
				gabfire_grid_cat_layout();
			}
		}
	}

/* ********************
 * SINGLE POST/PAGE/CUSTOM POST
 * Use the_content hook to display the featured image before the post
 ******************************************************************** */
	if (!function_exists('gabfire_singlepostmedia')) {

		function gabfire_singlepostmedia() {

			global $wp_query;
			$postid = $wp_query->post->ID;
			$disable_feaimage = get_post_meta($postid, 'post_feaimage', true);
			$post_layout = get_post_meta($postid, 'gabfire_post_template', true);

			if ( ($post_layout == 'fullwidth')  or (is_page_template('tpl-fullwidth.php')) ) {
				$name = 'postthumbnail-big';
				$media_width = 1140;
				$media_height = 550;
			} else {
				$name = 'postthumbnail';
				$media_width = 750;
				$media_height = 350;
			}

			if (get_option('sharp_autoimage') == 1) {
				if ($disable_feaimage == 'true') {
					$enableimage = 0;
				} else {
					$enableimage = 1;
				}
			} else {
				$enableimage = 0;
			}

			gabfire_media(array(
				'name' => $name,
				'imgtag' => 1,
				'link' => 0,
				'enable_video' => 1,
				'enable_thumb' => $enableimage,
				'resize_type' => 'w',
				'media_width' => $media_width,
				'media_height' => $media_height,
				'thumb_align' => 'aligncenter',
				'enable_default' => 0
			));

		}
	}

/* ********************
 * HOMEPAGE
 * Use this function to convert HEX to RGB
 ******************************************************************** */
	if ( ! function_exists( 'gabfire_hex2rgb' ) ) {
		function gabfire_hex2rgb($hex) {
		   $hex = str_replace("#", "", $hex);

		   if(strlen($hex) == 3) {
			  $r = hexdec(substr($hex,0,1).substr($hex,0,1));
			  $g = hexdec(substr($hex,1,1).substr($hex,1,1));
			  $b = hexdec(substr($hex,2,1).substr($hex,2,1));
		   } else {
			  $r = hexdec(substr($hex,0,2));
			  $g = hexdec(substr($hex,2,2));
			  $b = hexdec(substr($hex,4,2));
		   }
		   $rgb = array($r, $g, $b);
		   //return implode(",", $rgb); // returns the rgb values separated by commas
		   return $rgb; // returns an array with the rgb values
		}
	}

/* ********************
 * HOMEPAGE
 * Display category name
 ******************************************************************** */
	if ( ! function_exists( 'gabfire_categoryname' ) ) {
		function gabfire_categoryname($categoryid, $custom_caption) { ?>
			<p class="catname">
				<a href="<?php echo get_category_link($categoryid);?>">
					<?php if ( $custom_caption != "" ) {
						echo $custom_caption;
					} else {
						echo get_cat_name($categoryid);
					} ?>
				</a>
			</p><?php
		}
	}

/* ********************
 * COMMENTS
 * Theme comment style
 ******************************************************************** */
	if ( ! function_exists( 'gabfire_comments' ) ) {

		function gabfire_comments( $comment, $args, $depth ) {
			$GLOBALS['comment'] = $comment;
			switch ( $comment->comment_type ) :
				case '' :
			?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

				<div class="comment_container" id="comment-<?php comment_ID(); ?>">

					<div class="comment-top">
						<div class="comment-avatar">
							<?php echo get_avatar( $comment, 50 ); ?>
						</div>
						<span class="comment-author">
							<i class="fa fa-user"></i>
							<cite class="fn"><?php echo get_comment_author_link(); ?></cite>
						</span>
						<span class="comment-date-link">
							<i class="fa fa-calendar-o"></i>&nbsp;<?php echo get_comment_date(); edit_comment_link( '<i class="fa fa-pencil-square-o"></i>', ' ' , ''); ?>
						</span>
					</div>

					<?php if ( $comment->comment_approved == '0' ) : ?>
						<p class="waiting_approval"><?php _e( 'Your comment is awaiting moderation.', 'gabfire' ); ?></p>
					<?php endif; ?>

					<?php comment_text(); ?>

					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>

				</div><!-- comment-container  -->

			<?php
					break;
				case 'pingback'  :
				case 'trackback' :
			?>
			<li class="post pingback">
				<p><?php _e( 'Pingback:', 'gabfire' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'gabfire' ), ' ' ); ?></p>
			<?php
					break;
			endswitch;
		}
	}

/* ********************
 * POST PAGE
 * Display post title
 ******************************************************************** */
if ( ! function_exists( 'gabfire_singleposttitle' ) ) {

	add_action('gabfire_before_singlepost_body', 'gabfire_singleposttitle', 10);

	function gabfire_singleposttitle() {

		global $wp_query;
		$post_layout = get_post_meta($wp_query->post->ID, 'gabfire_post_template', true);
		$subtitle = get_post_meta($wp_query->post->ID, 'subtitle', true); ?>

		<section class="row">
			<div class="col-md-12">
				<div class="post-lead">

					<?php if(!is_page()) { ?>
						<p class="post-category"><?php the_category(' &middot; '); ?></p>
					<?php } ?>

					<h1 class="post-title" itemprop="headline"><?php the_title(); ?></h1>

					<?php if(!is_page()) { ?>
						<p class="post-datecomment">
							<?php
								gabfire_bydate();
								gabfire_commentsnr();
							?>
						</p>
					<?php }

					/* Display subtitle below post title if thats a fullwidth or big picture post template */
					if (($subtitle != '') && ($post_layout == 'fullwidth'))
					{
						echo "<p class='subtitle postlead_subtitle'>$subtitle</p>";
					} ?>

				</div>
			</div>
		</section><?php
	}
}

/* ********************
 * POST PAGE
 * Get Big Picture Template File
 ******************************************************************** */
 if ( ! function_exists( 'gabfire_extract_bigpictures' ) ) {

	add_action('gabfire_before_singlepost_body', 'gabfire_extract_bigpictures', 20);

	function gabfire_extract_bigpictures() {

		global $wp_query;
		$post_layout = get_post_meta($wp_query->post->ID, 'gabfire_post_template', true);
		$subtitle = get_post_meta($wp_query->post->ID, 'subtitle', true);

		if ($post_layout == 'bigpicture')
		{

					get_template_part( 'inc/theme-gallery-bigpicture', '' );

		}
	}

 }

/* ********************
 * POST PAGE
 * Get Inner Page Slider
 ******************************************************************** */
 if (!function_exists('gabfire_innerslide_wrapper')) {

	function gabfire_innerslide_wrapper() {

		global $wp_query;
		$postid = $wp_query->post->ID;
		$disable_postslider = get_post_meta($postid, 'disable_postslider', true);
		$post_layout = get_post_meta($postid, 'gabfire_post_template', true);

		if (get_post_type( get_the_ID() ) == 'post') {
			if (( $post_layout !== 'bigslider') and ( $disable_postslider !== 'true')) {
				gabfire_innerslider();
			}
		}

	}
}

/* ********************
 * Clear that anything might be added
 * as floated element to end of post
 ******************************************************************** */
 if (!function_exists('gabfire_postpagination')) {
	add_filter( 'the_content', 'gabfire_clearpost', 	5 );

	function gabfire_clearpost( $content ) {

		if ( in_the_loop() && is_single() )
		{
			$content .= '<div class="clearfix"></div>';
		}

		return $content;
	}
 }

/* ********************
 * POST PAGE
 * Display Post Pagination after Content
 ******************************************************************** */
 if (!function_exists('gabfire_postpagination')) {
	add_filter( 'the_content', 'gabfire_postpagination', 	10 );

	function gabfire_postpagination( $content ) {

		if ( in_the_loop() && is_single() )
		{
			$content .= wp_link_pages( array(
				'before'           => '<p class="post-pagination">' . __('<strong>Pages:</strong>','gabfire'),
				'after'            => '</p>',
				'link_before'      => '<span>',
				'link_after'       => '</span>',
				'next_or_number'   => 'number',
				'nextpagelink'     => __('Next page', 'gabfire'),
				'previouspagelink' => __('Previous page', 'gabfire'),
				'pagelink'         => '%',
				'echo'             => 0
			) );
		}

		return $content;
	}
 }

/* ********************
 * POST PAGE
 * Source / Credit for the Entry
 ******************************************************************** */
 if (!function_exists('gabfire_postcredit')) {

	add_filter( 'the_content', 'gabfire_postcredit', 15 );

	function gabfire_postcredit( $content ) {
		if ( in_the_loop() && is_single() )
		{
			global $wp_query;
			$postid = $wp_query->post->ID;
			$source = get_post_meta($postid, 'source', true);
			$sourcelink = get_post_meta($postid, 'sourcelink', true);
			$sourcestring = '<strong>' . __('SOURCE', 'gabfire') . '</strong>';

			if ($sourcelink != '') {
				$content .= "<p class='entrysource'>$sourcestring: <a href='$sourcelink' target='_blank'>$source</a></p>";
			} elseif ($source != '') {
				$content .= "<p class='entrysource'>$sourcestring: $source</p>";
			}
		}
		return $content;
	}
 }

/* ********************
 * POST PAGE
 *  Add tags below content on single post pages
 ******************************************************************** */
 if (!function_exists('gabfire_tags')) {

	add_filter( 'the_content', 'gabfire_tags', 20 );

	function gabfire_tags( $content ) {
		if ( in_the_loop() && is_single() )
		{
			$content .= get_the_tag_list('<p class="posttags"><i class="fa fa-tags"></i>&nbsp;&nbsp;',', ', '</p>');
		}
		return $content;
	}
 }

/* ********************
 * POST PAGE
 *  Add Author After the Post
 ******************************************************************** */
 if (!function_exists('gabfire_singlepostmeta')) {

	add_filter( 'gabfire_after_singlepost_query', 'gabfire_singlepostmeta', 	25 );

	function gabfire_singlepostmeta( $content ) {
		if ( in_the_loop() && (get_post_type() == 'post') )
		{
			$title = '<strong class="entry-title">'.get_the_title().'</strong>';
			$authorlink = '<a href="'.get_author_posts_url(get_the_author_meta( 'ID' )).'" rel="author" class="author vcard"><span class="fn">'.  get_the_author() . '</span></a>';
			$date = '<time class="published updated" datetime="'. get_the_date() . 'T' . get_the_time() .'">'. get_the_date() . '</time>';

			$content .=	'<div class="single_postmeta"><p>';
				$content .= get_avatar( get_the_author_meta('email'), '35' );
				$content .= '<p>' . sprintf(esc_attr__('%1$s added by %2$s on %3$s','gabfire'), $title, $authorlink, $date) . '<br />';
					$content .= '<a class="block" href="'. esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )).'">';
					$content .= sprintf( esc_attr__( 'View all posts by %s &rarr;', 'gabfire' ), get_the_author() );
					$content .=	'</a>';
				$content .=	'</p>';
			$content .=	'</div>';
		}
		return $content;
	}
 }

/* ********************
 * POST PAGE
 * Display widgets below post content after query on single post pages
 ******************************************************************** */
 if (!function_exists('gabfire_single_post_widget_zones')) {

	add_action( 'gabfire_after_singlepost_query', 'gabfire_single_post_widget_zones', 10 );
	function gabfire_single_post_widget_zones() {
		if ('post' == get_post_type()) {
			sharp_dynamic_sidebar('postwidget');
		} elseif ( is_page_template('templates/tpl-widgetized.php') ) {
			sharp_dynamic_sidebar('pagewidget');
		}
	}

 }

/* ********************
 * ARCHIVE PAGE TEMPLATE
 * Display widgets below post content after query on single post pages
 ******************************************************************** */
 if (!function_exists('gabfire_archivepage_generate_loop')) {
	add_action( 'gabfire_after_singlepost_query', 'gabfire_archivepage_display_loop', 5 );

	function gabfire_archivepage_generate_loop() {
		echo '<article itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost" class="entry entry-content">';
			$cats = get_categories();
			foreach ($cats as $cat) {
				query_posts('cat='.$cat->cat_ID);
				echo '<h3 class="page-header">'. $cat->cat_name .'</h3>';
				echo '<ul>';
					while (have_posts()) : the_post();
						echo '<li><a href="'. get_the_permalink() .'">'. get_the_title() .'</a> - ('. get_comments_number() .')</li>';
					endwhile;
				echo '</ul>';
			}
		echo '</article>';
	}
 }

 if (!function_exists('gabfire_archivepage_display_loop')) {
	function gabfire_archivepage_display_loop() {
		if ( is_page_template('templates/tpl-archives.php') )
		{
			gabfire_archivepage_generate_loop();
		}
	}
 }

/* ********************
 * HEADER
 * Ask user to adjust theme options after theme activation
 ******************************************************************** */
  if (!function_exists('gabfire_initial_theme_activation')) {
	if (get_option('sharp_logo_type') == '' and current_user_can( 'manage_options' ) ) {

		add_action( 'gabfire_before_header_starts', 'gabfire_initial_theme_activation', 10 );

		function gabfire_initial_theme_activation() {
			echo "<p class='alert alert-info' style='width:940px;margin:20px auto'>Congratulations! You have successfully installed your theme. However, it may look incomplete at this moment. Do <strong>NOT</strong> panic as you simply need to configure your <a href='". get_option("siteurl") ."/wp-admin/themes.php?page=options-framework'>Theme Options</a>. Please go through the <a href='". get_option("siteurl") ."/wp-admin/themes.php?page=options-framework'>Theme Options</a> completely and select an option for each setting. After that, you\"re site will be ready for the world!";
		}

	}
  }