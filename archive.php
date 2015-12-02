<?php 
get_header(); 

	/**
	 * gabfire_before_archive_entries hook
	 *
	 * @hooked gabfire_catNameDesc - 10 (inc/theme-functions.php)
	 */	
	do_action( 'gabfire_before_archive_entries');
	
	//Grid Archive template
	if ( ( get_option('sharp_2col') <> '' && is_category(explode(',', get_option('sharp_2col'))))
	  or ( get_option('sharp_2col_full') <> '' && is_category(explode(',', get_option('sharp_2col_full'))))
      or ( get_option('sharp_3col') <> '' && is_category(explode(',', get_option('sharp_3col'))))
	  or ( get_option('sharp_3col_full') <> '' && is_category(explode(',', get_option('sharp_3col_full'))))
	  or ( get_option('sharp_4col') <> '' && is_category(explode(',', get_option('sharp_4col'))))
	  or ( get_option('sharp_4col_full') <> '' && is_category(explode(',', get_option('sharp_4col_full')))) 
	   )
	{
		/**
		 * gabfire_grid_archive_template hook
		 *
		 * @hooked gabfire_grid_cat_layout - 10 (inc/theme-functions.php)
		 */
		do_action( 'gabfire_grid_archive_template');
	}

	//Magazine Archive template
	elseif ( get_option('sharp_mag') <> '' && is_category(explode(',', get_option('sharp_mag'))))
	{
		/**
		 * gabfire_magazine_archive_template hook
		 *
		 * @hooked gabfire_grid_cat_layout - 10 (inc/theme-functions.php)
		 */
		do_action( 'gabfire_magazine_archive_template');
	}
	
	//Media Archive template
	elseif ( get_option('sharp_media') <> '' && is_category(explode(',', get_option('sharp_media'))))
	{
		/**
		 * gabfire_media_archive_template hook
		 *
		 * @hooked gabfire_grid_cat_layout - 10 (inc/theme-functions.php)
		 */
		do_action( 'gabfire_media_archive_template');
	}
	
	//Fallback: Default Archive template
	else { 
		/**
		 * gabfire_default_archive_template hook
		 *
		 * @hooked gabfire_grid_cat_layout - 10 (inc/theme-functions.php)
		 */
		do_action( 'gabfire_default_archive_template');
	}

	do_action( 'gabfire_after_archive_entries');

get_footer();