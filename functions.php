<?php
	// Framework Files
	get_template_part( 'framework/customizer/customizer-framework' );
	get_template_part( 'framework/functions/misc-functions' );
	get_template_part( 'framework/functions/breadcrumb' );
	get_template_part( 'framework/functions/gabfire-media' );

	//Theme Specific Functions
	get_template_part( 'inc/theme-custom-fields');
	get_template_part( 'inc/theme-functions');

	/**
	 * Setup Theme.
	 *
	 * Set up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support post thumbnails.
	 *
	 */
	if ( ! function_exists( 'sharp_theme_setup' ) ) {

		function sharp_theme_setup() {
			/*
			 * Make theme ready for translation
			 * Translations can be added to the /inc/lang/ directory.
			 */
			load_theme_textdomain( 'gabfire', get_template_directory() . '/inc/lang' );

			// Add document title tag to HTML
			add_theme_support( 'title-tag' );

			// Add RSS feed links to <head> for posts and comments.
			add_theme_support( 'automatic-feed-links' );

			add_theme_support( 'post-thumbnails' );
			add_image_size( 'moderate', 360, 245, true );

			// This theme uses wp_nav_menu() in two locations.
			register_nav_menus(array(
				'masthead' => __( 'Masthead Navigation', 'gabfire' ),
				'primary'  => __( 'Primary Navigation', 'gabfire' ),
			));

			/*
			 * Switch default core markup for search form, comment form, and comments
			 * to output valid HTML5.
			 */
			add_theme_support( 'html5', array(
				'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			));

			if ( ! isset( $content_width ) ) {
				$content_width = 750;
			}

			// This theme allows users to set a custom background.
			add_theme_support( 'custom-background', apply_filters( 'gabfire_custom_background_args', array(
				'default-color' => 'f5f5f5',
			)));
		}

		add_action( 'after_setup_theme', 'sharp_theme_setup' );
	}
	// sharp_theme_setup

/* ********************
 * Load theme styles and custom scripts
 ******************************************************************** */
	 if ( ! function_exists( 'sharp_theme_scripts' ) ) {
		function sharp_theme_scripts() {
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/framework/bootstrap/css/bootstrap.min.css');
			wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/framework/font-awesome/css/font-awesome.min.css');
			wp_enqueue_style( 'owl-carousel2', get_template_directory_uri() .'/css/owl-carousel.css');
			wp_enqueue_style( 'sharp-style', get_stylesheet_uri(), array( 'bootstrap','font-awesome','owl-carousel2' ));
			wp_enqueue_style( 'bootstrap-social', get_template_directory_uri() .'/css/bootstrap-social.css');

			wp_enqueue_script( 'jquery', array(), '', true);
			wp_enqueue_script( 'owl-carousel2', get_template_directory_uri() .'/inc/js/owl.carousel.min.js', array(), '', true);
			wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/framework/bootstrap/js/bootstrap.min.js', array(), '', true);
			wp_enqueue_script( 'responsive-menu', get_template_directory_uri() .'/inc/js/responsive-menu.js', array(), '', true);
			wp_enqueue_script( 'sharp-scripts', get_template_directory_uri() .'/inc/js/scripts.js', array(), '', true);

			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}

			get_template_part( 'css/customizedcss' );

			if(file_exists(get_stylesheet_directory() . '/custom.css')) {
				wp_enqueue_style('custom-style', get_stylesheet_directory_uri() .'/custom.css');
			} elseif(file_exists(get_template_directory_uri() . '/custom.css')) {
				wp_enqueue_style('custom-style', get_template_directory_uri() .'/custom.css');
			}
		}

		add_action( 'wp_enqueue_scripts', 'sharp_theme_scripts' );
	}

/* ********************
 * Widgetize theme
 ******************************************************************** */
	if ( !function_exists( 'sharp_register_sidebar' ) ) {
		function sharp_register_sidebar($args) {
			$common = array(
				'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widgetinner">',
				'after_widget'  => "</div></section>\n",
				'before_title'  => '<h3 class="widgettitle">',
				'after_title'   => "</h3>\n"
			);
			$args = wp_parse_args($args, $common);
			return register_sidebar($args);
		}

		function sharp_widgets_init() {
			sharp_register_sidebar(array('name' => 'Inner Header - 728x90','id' => 'header-ad','description' => __('Header ad zone, right hand of logo, 728x90 only', 'gabfire')));
			sharp_register_sidebar(array('name' => 'Below Header','id' => 'header-ad-below','description' => __('Header ad zone, below primary menu', 'gabfire')));

			sharp_register_sidebar(array('name' => 'Home Middle Fullwidth','id' => 'home-middle','description' => __('Homepage, underneath featured posts', 'gabfire')));
			sharp_register_sidebar(array('name' => 'Home Right Sidebar','id' => 'home-right-sidebar','description' => __('Homepage, right sidebar', 'gabfire')));

			sharp_register_sidebar(array('name' => 'Sidebar Default','id' => 'default-sidebar','description' => __('Sidebar for default homepage and innerpages', 'gabfire')));
			sharp_register_sidebar(array('name' => 'Home 2 Column Top','id' => 'home-left-top','description' => __('Homepage, underneath 2 column posts, left of sidebar', 'gabfire')));
			sharp_register_sidebar(array('name' => 'Home 2 Column Bottom','id' => 'home-left-bottom','description' => __('Homepage, underneath 2 column posts, left of sidebar', 'gabfire')));

			sharp_register_sidebar(array('name' => 'Footer Full Banner','id' => 'footer-full','description' => __('Full width zone above footer', 'gabfire')));
			sharp_register_sidebar(array('name' => 'Footer 1','id' => 'footer-1','description' => __('Footer 1st column', 'gabfire')));
			sharp_register_sidebar(array('name' => 'Footer 2','id' => 'footer-2','description' => __('Footer 2nd column', 'gabfire')));
			sharp_register_sidebar(array('name' => 'Footer 3','id' => 'footer-3','description' => __('Footer 3rd column)', 'gabfire')));
			sharp_register_sidebar(array('name' => 'Footer 4','id' => 'footer-4','description' => __('Footer 4th column)', 'gabfire')));

			sharp_register_sidebar(array('name' => 'Mag Category - Left','id' => 'archive-mag-left','description' => __('Archive Magazine and Homepage No Slider template - Left Sidebar', 'gabfire')));

			sharp_register_sidebar(array('name' => 'PostWidget','id' => 'PostWidget','description' => __('Single post page - below entry', 'gabfire')));
		}
		add_action( 'widgets_init', 'sharp_widgets_init' );
	} //sharp_register_sidebar

/**
 * Include the TGM_Plugin_Activation class.
 */
//require_once dirname( __FILE__ ) . '/framework/tgmpa/class-tgm-plugin-activation.php';

//add_action( 'tgmpa_register', 'sharp_register_reguired_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function sharp_register_reguired_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
/*
		array(
			'name'      => 'Bootstrap Shortcodes for WordPress',
			'slug'      => 'bootstrap-3-shortcodes',
			'required'  => false,
		),
*/

		array(
			'name'      => 'Gabfire Media Module',
			'slug'      => 'gabfire-media-module',
			'required'  => false,
		),

/*
		array(
			'name'      => 'OTF Regenerate Thumbnails',
			'slug'      => 'otf-regenerate-thumbnails',
			'required'  => false,
		),
*/

/*
		array(
			'name'      => 'Gabfire Widget Pack',
			'slug'      => 'gabfire-widget-pack',
			'required'  => false,
		),
*/

		array(
			'name'      => 'The Events Calendar',
			'slug'      => 'the-events-calendar',
			'required'  => false,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}