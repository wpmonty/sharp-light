<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/* ********************
 * Modify dynamic_sidebar widget function slightly to return a
 * variable and display name of widget zone to ste admin if the
 * option 'display widget map' is activated on theme control panel
 ******************************************************************** */
  if ( ! function_exists( 'sharp_dynamic_sidebar' ) ) {
	function sharp_dynamic_sidebar($widgetname)
	{
	  dynamic_sidebar($widgetname);
	  if((get_option('sharp_widget') == 1) and current_user_can('manage_options') ) {
		echo '<span class="widgetmapname">'.$widgetname.'</span>';
	  }
	}
  }

/* ********************
 * This theme has support to display category based ads.
 * Using current_catID; we check whether a file exist with
 * current_catID.php name or not.
 ******************************************************************** */
  if ( ! function_exists( 'current_catID' ) ) {
	function current_catID() {
		global $wp_query,  $cat_obj, $currentcat;

		if (is_category()) {
			$cat_obj = $wp_query->get_queried_object();
			$currentcat = $cat_obj->term_id;
		}
		elseif (is_single() and !is_attachment()) {
			$category = get_the_category();
			$currentcat = $category[0]->cat_ID;
		}

		return $currentcat;
	}
  }

/* ********************
 * Category based ad function.
 * Using current_catID function, we check if an ad file per cat
 * is available or not.
 ******************************************************************** */
  if ( ! function_exists( 'gabfire_categoryad' ) ) {
 	function gabfire_categoryad($path) {
		if((is_single() or is_category()) and (file_exists(get_template_directory() . '/ads/'.$path.'/'. current_catID() .'.php'))) {
			get_template_part('/ads/'.$path.'/'. gabfire_current_catID());
		} else {
			get_template_part('/ads/'.$path);
		}
	}
  }

/* ********************
 * Limit post excerpts. Within theme files used as
 * print string_limit_words(get_the_excerpt(), 16);
 ******************************************************************** */
    if ( ! function_exists( 'string_limit_words' ) ) {
		function string_limit_words($limit) {
			global $post, $page;

			if( $post->post_excerpt ) {
				$excerpt = the_excerpt();

			} else {

				$excerpt = explode(' ', get_the_excerpt(), $limit);

				if (count($excerpt) >= $limit) {
					array_pop($excerpt);
					$excerpt = implode(" ",$excerpt);

					if ( substr($excerpt, -1) !== '.' ) {
						$excerpt .= '&hellip;';
					}

				} else {
					$excerpt = implode(" ",$excerpt);
				}

				$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
			}

			return $excerpt;
		}
	}



/* ********************
 * The post meta display below post excerpts on front page
 * default usage gabfire_postmeta(date, comment, permalink, edit-post)
 ******************************************************************** */
  if ( ! function_exists( 'gabfire_bydate' ) ) {
	function gabfire_bydate() {
		global $post;
		$author_id=$post->post_author;
		echo '<span class="gabfire_meta gabfiremeta_bydate">';
		$authorlink = '<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a href="'.get_author_posts_url($post->post_author).'" rel="author" class="fn" itemprop="name">'.  get_the_author_meta( 'display_name', $post->post_author ) . '</a></span>';
		$date = '<time class="published updated" itemprop="datePublished" datetime="'. get_the_date('Y-m-d') . 'T' . get_the_time('H:i') .'">'. get_the_date() . '</time>';
		printf(esc_attr__('By %1$s on %2$s','gabfire'), $authorlink, $date);
		echo '</span>';
	}
  }

  if ( ! function_exists( 'gabfire_bycat' ) ) {
	function gabfire_bycat() {
		global $post;
		$author_id=$post->post_author;
		echo '<span class="gabfire_meta gabfiremeta_bydate">';
		$authorlink = '<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a href="'.get_author_posts_url($post->post_author).'" rel="author" class="fn" itemprop="name">'.  get_the_author_meta( 'display_name', $post->post_author ) . '</a></span>';
		$cat = get_the_category();
		$catspan = '<span class="gabfire_meta gabfiremeta_cats"><a href="' . get_category_link($cat[0]->term_id) . '"> ' . $cat[0]->name . '</span>';
		printf(esc_attr__('by %1$s in %2$s','gabfire'), $authorlink, $catspan);
		echo '</span>';
	}
  }

  if ( ! function_exists( 'gabfire_postcomment' ) ) {
	function gabfire_postcomment() { /* We first create a function to get the post permalink with read more anchor */
		echo '<span class="gabfire_meta gabfiremeta_comment">';
			echo '<i class="fa fa-comments-o"></i> ';
			comments_popup_link(__('No Comment','gabfire'), __('1 Comment','gabfire'), __('% Comments','gabfire'));
		echo '</span>';
	}
  }

  if ( ! function_exists( 'gabfire_commentsnr' ) ) {
	function gabfire_commentsnr() {
		if (get_post_type( get_the_ID() ) == 'post') {
		/* get the number of comments */
		$num_comments = get_comments_number();
		if ( comments_open() ){
			if($num_comments == 0){  $comments = __('No Comments', 'gabfire');  }
				elseif($num_comments > 1){ $comments = $num_comments. __(' Comments', 'gabfire'); }
				else{ $comments = __('1 Comment', 'gabfire'); }
			}
			echo '<span class="commentnr">' . $comments . '</span>';
		}
	}
  }

  if ( ! function_exists( 'gabfire_permalink' ) ) {
	function gabfire_permalink() {
		echo '<span class="gabfire_meta gabfiremeta_readmore"><i class="fa fa-plus-circle"></i> <a href="'. get_the_permalink() . '" title="'; printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); echo'" rel="bookmark">'; esc_attr_e('Read More', 'gabfire'); echo '</a></span>';
	}
  }

  if ( ! function_exists( 'gabfire_author' ) ) {
	function gabfire_author() {
		global $post;
		$author_id=$post->post_author;
		echo '<span class="gabfire_meta gabfiremeta_author"><a class="author vcard" href="'.get_author_posts_url($post->post_author).'" rel="author"><span class="fn">'.  get_the_author_meta( 'display_name', $post->post_author ) . '</span></a></span>';
	}
  }

  if ( ! function_exists( 'gabfire_posttags' ) ) {
	function gabfire_posttags() {
		the_tags('<span class="gabfire_meta gabfire_tags"><i class="fa fa-tags"></i> ',', ','</span>');
	}
  }

  if ( ! function_exists( 'gabfire_cats' ) ) {
	function gabfire_cats() {
		echo '<span class="gabfire_meta gabfiremeta_cats"><i class="fa fa-folder-o"></i> '; the_category(', '); echo '</span>';
	}
  }

  if ( ! function_exists( 'gabfire_editpost' ) ) {
	function gabfire_editpost() {
		if( current_user_can( 'edit_posts' ) ) {
			echo '<span class="gabfire_meta gabfiremeta_edit"><span><i class="fa fa-pencil-square-o"></i> <a href="'.get_edit_post_link().'">Edit</a></span></span>';
		}
	}
  }

  if ( ! function_exists( 'gabfire_postmeta' ) ) {
	function gabfire_postmeta($p_tag = true,$bydate = true,$comment = true,$tags = true,$cats = true,$permalink = true,$editpost = true) {
			echo (true === $p_tag)         ? '<p class="postmeta">' : "";
				echo (true === $bydate)    ? gabfire_bycat()       : "";
				echo (true === $comment)   ? gabfire_postcomment()  : "";
				echo (true === $tags)      ? gabfire_posttags()     : "";
				echo (true === $cats)      ? gabfire_cats()         : "";
				echo (true === $permalink) ? gabfire_permalink()    : "";
				echo (true === $editpost)  ? gabfire_editpost()     : "";
			echo (true === $p_tag)         ? '</p>'                 : "";
	}
  }

/* ********************
 * Truncate post title.
 * default usage gabfire_posttitle(title length,string after title)
 ******************************************************************** */
   if ( ! function_exists( 'gabfire_posttitle' ) ) {
    function gabfire_posttitle($t_length,$t_end) {
        global $post;
        $thetitle = $post->post_title;
        if( function_exists('mb_strlen') ) {
            $getlength = mb_strlen($thetitle, 'UTF-8');
            $thelength = $t_length;
            echo mb_substr($thetitle, 0, $thelength, 'UTF-8');
        } else {
            $getlength = strlen($thetitle);
            $thelength = $t_length;
            echo substr($thetitle, 0, $thelength);
        }
        if ($getlength > $thelength) echo $t_end;
    }
   }

/* ********************
 * Innerpage Slider
 * single postpage slider that auto grabs all attached pictures
 * and displays them with a nice slider
 ******************************************************************** */
   if ( ! function_exists( 'gabfire_innerslider' ) ) {
	 function gabfire_innerslider() {
		global $post, $page;
		if (get_option('sharp_inslider') == 'sitewide') {
			get_template_part( 'inc/theme-gallery', '' );
		}
		elseif (
				( get_option('sharp_inslider') == 'tagbased') and (has_tag(get_option('sharp_inslider_tag')) )
			or
				(  has_term( get_option('sharp_inslider_tag') , 'gallery-tag', '' )) )
		{
			get_template_part( 'inc/theme-gallery', '' );
		}
	 }
   }

/* ********************
 * Ad video-post class
 * add video-post as a class into post_class function
 * based on custom fields defined within post.
 ******************************************************************** */
   if ( ! function_exists( 'gabfire_post_classes' ) ) {
	add_filter('post_class','gabfire_post_classes');

	function gabfire_post_classes( $classes ) {
		if ( (get_post_meta( get_the_ID(), 'iframe', true )) or (get_post_meta( get_the_ID(), 'videoflv', true )) ){
			$classes[] = 'video-post';
		}
		return $classes;
	}
   }

/* ********************
 * Get the current post type in WordPress Admin
 * sample snippet to use
 * if ( get_current_post_type() == 'post' ) { }
 ******************************************************************** */
    if ( ! function_exists( 'get_current_post_type' ) ) {
		function get_current_post_type() {
		  global $post, $typenow, $current_screen;

		  //we have a post so we can just get the post type from that
		  if ( $post && $post->post_type )
			return $post->post_type;

		  //check the global $typenow - set in admin.php
		  elseif( $typenow )
			return $typenow;

		  //check the global $current_screen object - set in sceen.php
		  elseif( $current_screen && $current_screen->post_type )
			return $current_screen->post_type;

		  //lastly check the post_type querystring
		  elseif( isset( $_REQUEST['post_type'] ) )
			return sanitize_key( $_REQUEST['post_type'] );

		  //we do not know the post type!
		  return null;
		}
	}

/* ********************
 * Add css class last_archivepost to last posts
 * in archive query
 * used in conjunction with post_class('archive-post')
 ******************************************************************** */
if ( ! function_exists( 'last_post_class' ) ) {
	add_filter('post_class', 'last_post_class');
	function last_post_class($classes) {

		global $wp_query;
		if(($wp_query->current_post+1) == $wp_query->post_count) {
			$classes[] = 'last_archivepost';
		}

		return $classes;
	}
}

/* ********************
 * Return WordPress Archive Pagination
 * into a function
 ******************************************************************** */
 if ( ! function_exists( 'gabfire_archivepagination' ) ) {
	 function gabfire_archivepagination() {
		if((get_next_posts_link()) or (get_previous_posts_link())) { ?>
			<div class="archive-pagination">
				<?php
				// load pagination
				global $wp_query;

				$big = 999999999;
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );
				?>
			</div>
		<?php
		}
	}
 }

/* ********************
 * Get name of custom navigation
 ******************************************************************** */
  if ( ! function_exists( 'gabfire_menu_name' ) ) {
	function gabfire_menu_name( $location ) {
		if( empty($location) ) return false;

		$locations = get_nav_menu_locations();
		if( ! isset( $locations[$location] ) ) return false;

		$menu_obj = get_term( $locations[$location], 'nav_menu' );

		return $menu_obj;
	}
  }

/* ********************
 * If defined, display custom css on top of header
 ******************************************************************** */
if (!function_exists('gabfire_head_css')) {
	function gabfire_head_css() {
		// OUTPUT STYLES
		$output = '';
		$output = get_option('custom_css');

		if ($output <> '') {
			$output = "<!-- Custom Styling -->\n<style type=\"text/css\">\n".$output."</style>\n";
			echo $output;
		}
	}
	add_action('wp_head', 'gabfire_head_css');
}