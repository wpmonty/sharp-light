<?php
/** The short name gives a unique element to each options id. */
$shortname = 'sharp_';

// User access level
$capability = 'edit_theme_options';

// Predefined Arrays
$options_to_40 = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40);
$options_to_30 = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
$options_to_20 = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$options_to_15 = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
$options_to_10 = array(0,1,2,3,4,5,6,7,8,9,10);
$featuredslide = array( 'catbased' => __( 'Category Based', 'gabfire'),
                        'cfbased'  => __( 'Custom Field', 'gabfire'),
                        'mrecent'  => __( 'Recent Posts', 'gabfire'),
                        'tagbased' => __( 'Tag Based', 'gabfire')
                      );
$innerslide    = array( 'disable' => __( 'Disable', 'gabfire'),
                        'tagbased' => __( 'Tag Based', 'gabfire'),
                        'sitewide' => __( 'Site Wide', 'gabfire'),
                      );
$fonts         = array( 'Georgia, serif',
						'"Palatino Linotype", "Book Antiqua", Palatino, serif',
						'"Times New Roman", Times, serif',
						'Arial, Helvetica, sans-serif',
						'Tahoma, Geneva, sans-serif',
						'"Trebuchet MS", Helvetica, sans-serif',
						'Verdana, Geneva, sans-serif'
                      );
						  
// If using image radio buttons, define a directory path
$imagepath = get_template_directory_uri() . '/framework/admin/images/';

// Here we will set the options we are going to have in the customizer.
$options = array(); // If you delete this line, the sky will fall down! So you better don't.


/* ---------------------------------------------------------------------------------------------------
    Panels (optional - WP 4.0+ only)
--------------------------------------------------------------------------------------------------- */
$options[] = array( 'title'             => __( 'Homepage', 'gabfire' ),
                    'description'       => '',
                    'id'                => $shortname . 'homepage',
                    'priority'          => 22,
                    'theme_supports'    => '',
                    'type'              => 'panel' );
					
$options[] = array( 'title'             => __( 'Miscellaneous', 'gabfire' ),
                    'id'                => $shortname . 'misc',
                    'priority'          => 24,
                    'type'              => 'panel' );	

$options[] = array( 'title'             => __( 'Custom Styling', 'gabfire' ),
                    'id'                => $shortname . 'styling',
                    'priority'          => 25,
                    'type'              => 'panel' );						
					
/* ---------------------------------------------------------------------------------------------------
    Sections
--------------------------------------------------------------------------------------------------- */

$options[] = array( 'title'             => __( 'Site Identity', 'gabfire' ), // Section name
                    'description'       => '', // Section description
                    'id'                => 'title_tagline', // unique ID
                    'priority'          => 20,
                    'theme_supports'    => '',
                    'type'              => 'section' ); // type = section

//Colored Navigation Section
$options[] = array( 'title'             => __( 'Colored Nav Items', 'gabfire' ),
					'panel'				=> 'nav_menus',
					'description'       => 'Setup colored navigation links on Primary menu', // Section description
					'priority'          => 50,
                    'id'                => $shortname . 'colorednav',
                    'type'              => 'section' );				
					
//Homepage Sections
$options[] = array( 'title'             => __( 'Front Page Template', 'gabfire' ),
                    'panel'             => $shortname . 'homepage',
                    'id'                => 'static_front_page',
                    'type'              => 'section' );
					
$options[] = array( 'title'             => __( 'Featured Slider', 'gabfire' ),
                    'panel'             => $shortname . 'homepage',
                    'id'                => $shortname . 'featured',
                    'type'              => 'section' );

$options[] = array( 'title'             => __( 'Primary Top', 'gabfire' ),
                    'panel'             => $shortname . 'homepage',
                    'id'                => $shortname . 'primarytop',
                    'type'              => 'section' );

$options[] = array( 'title'             => __( 'Sidebar', 'gabfire' ),
                    'panel'             => $shortname . 'homepage',
                    'id'                => $shortname . 'sidebar',
                    'type'              => 'section' );

$options[] = array( 'title'             => __( 'Subnews', 'gabfire' ),
                    'panel'             => $shortname . 'homepage',
                    'id'                => $shortname . 'subnews',
                    'type'              => 'section' );

//Homepage Sections
$options[] = array( 'title'             => __( 'Social', 'gabfire' ),
                    'id'                => $shortname . 'social',
                    'priority'          => 23,
                    'type'              => 'section' );			
					
//Misc Section	
$options[] = array( 'title'             => __( 'Sliders', 'gabfire' ),
					'panel'             => $shortname . 'misc',
					'id'                => $shortname . 'sliders',
					'type'              => 'section' );
							
$options[] = array( 'title'             => __( 'Category Templates', 'gabfire' ),
					'panel'             => $shortname . 'misc',
                    'id'                => $shortname . 'cattemps',
                    'type'              => 'section' );
						
$options[] = array( 'title'             => __( 'Other Settings', 'gabfire' ),
					'panel'             => $shortname . 'misc',
                    'id'                => $shortname . 'othersettings',
                    'type'              => 'section' );

$options[] = array( 'title'             => __( 'Other Settings', 'gabfire' ),
					'panel'             => $shortname . 'misc',
                    'id'                => $shortname . 'othersettings',
                    'type'              => 'section' );
					
//Styling Section	
$options[] = array( 'title'             => __( 'Custom CSS', 'gabfire' ),
					'panel'             => $shortname . 'styling',
                    'id'                => $shortname . 'customcss',
                    'type'              => 'section' );

$options[] = array( 'title'             => __( 'Background Color', 'gabfire' ),
					'panel'             => $shortname . 'styling',
                    'id'                => 'colors',
                    'type'              => 'section' );
					
$options[] = array( 'title'             => __( 'Background Image', 'gabfire' ),
					'panel'             => $shortname . 'styling',
                    'id'                => 'background_image',
                    'type'              => 'section' );
					
$options[] = array( 'title'             => __( 'Customize Colors', 'gabfire' ),
					'panel'             => $shortname . 'styling',
                    'id'                => $shortname . 'customizecolors',
                    'type'              => 'section' );
					
/* ---------------------------------------------------------------------------------------------------
    Controls: General
--------------------------------------------------------------------------------------------------- */
$options[] = array( 'title'             => __( 'Logo Type', 'gabfire' ), // Control label
                    'description'       => __( 'If this option is set as Text Logo, make sure the Site Title and Taglines are entered below', 'gabfire' ),
                    'section'           => 'title_tagline', // Add it under the section
                    'id'                => $shortname . 'logo_type', // unique ID
                    'default'           => 'text',
					'priority'          => 1,
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'text'  =>  __( 'Text Logo', 'gabfire'),
                        'image' =>  __( 'Image Logo', 'gabfire' )
                    ),
                    'type'              => 'control' ); // type = control

$options[] = array( 'title'             => __( 'Custom Logo', 'gabfire' ),
                    'description'       => __('If image-based logo is selected, upload a logo for your theme. If text based logo is selected, define Site Title and Tagline below.', 'gabfire'),
                    'section'           => 'title_tagline',
                    'id'                => $shortname . 'logo',
					'priority'          => 2,
                    'default'           => '',
                    'option'            => 'image',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );					
					
$options[] = array( 'title'             => __( 'Display Logo on Footer', 'gabfire' ),
                    'description'       => __( 'Check this box to display logo before footer navigation', 'gabfire' ),
                    'section'           => 'title_tagline',
                    'id'                => $shortname . 'footerlogo',
                    'default'           => '',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Logo Margin Top', 'gabfire' ),
                    'description'       => __( 'Set a Margin value between logo and top line', 'gabfire' ),
                    'section'           => 'title_tagline',
                    'id'                => $shortname . 'padding_top',
                    'default'           => '0',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Logo Margin Bottom', 'gabfire' ),
                    'description'       => __( 'Set a Margin value between logo and bottom line', 'gabfire' ),
                    'section'           => 'title_tagline',
                    'id'                => $shortname . 'padding_bottom',
                    'default'           => '0',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Logo Margin Left', 'gabfire' ),
                    'description'       => __( 'Set a Margin value between logo and left line', 'gabfire' ),
                    'section'           => 'title_tagline',
                    'id'                => $shortname . 'padding_left',
                    'default'           => '0',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Controls: Colored Navigation
--------------------------------------------------------------------------------------------------- */
$options[] = array( 'title'             => __( 'Colored Navigation', 'gabfire' ), // Control label
                    'description'       => __( 'Number of colored navigation items to display on both header and footer navs', 'gabfire' ),
                    'section'           => $shortname . 'colorednav', // Add it under the section
                    'id'                => $shortname . 'navcolornr', // unique ID
                    'default'           => '0',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $options_to_10,
                    'type'              => 'control' ); // type = control

$options[] = array( 'title'             => __('Link #1', 'gabfire'),
                    'description'       => __('Select a category', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navlink1',
                    'default'           => '',
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav',
                    'id'                => $shortname . 'navcolor1',
                    'default'           => '#3cc0bf',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __('Link #2', 'gabfire'),
                    'description'       => __('Select a category', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navlink2',
                    'default'           => '',
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav',
                    'id'                => $shortname . 'navcolor2',
                    'default'           => '#a0a2dc',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __('Link #3', 'gabfire'),
                    'description'       => __('Select a category', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navlink3',
                    'default'           => '',
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav',
                    'id'                => $shortname . 'navcolor3',
                    'default'           => '#ff7e79',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __('Link #4', 'gabfire'),
                    'description'       => __('Select a category', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navlink4',
                    'default'           => '',
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav',
                    'id'                => $shortname . 'navcolor4',
                    'default'           => '#caa38c',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __('Link #5', 'gabfire'),
                    'description'       => __('Select a category', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navlink5',
                    'default'           => '',
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav',
                    'id'                => $shortname . 'navcolor5',
                    'default'           => '#4789b3',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __('Link #6', 'gabfire'),
                    'description'       => __('Select a category', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navlink6',
                    'default'           => '',
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav',
                    'id'                => $shortname . 'navcolor6',
                    'default'           => '#e44554',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __('Link #7', 'gabfire'),
                    'description'       => __('Select a category', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navlink7',
                    'default'           => '',
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav',
                    'id'                => $shortname . 'navcolor7',
                    'default'           => '#cc6699',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __('Link #8', 'gabfire'),
                    'description'       => __('Select a category', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navlink8',
                    'default'           => '',
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav',
                    'id'                => $shortname . 'navcolor8',
                    'default'           => '#f48d3e',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __('Link #9', 'gabfire'),
                    'description'       => __('Select a category', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navlink9',
                    'default'           => '',
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav',
                    'id'                => $shortname . 'navcolor9',
                    'default'           => '#b5cc7a',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __('Link #10', 'gabfire'),
                    'description'       => __('Select a category', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navlink10',
                    'default'           => '',
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav',
                    'id'                => $shortname . 'navcolor10',
                    'default'           => '#7ecac1',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __('Hovered Link Background Color', 'gabfire'),
                    'description'       => __('Select a color', 'gabfire'),
                    'section'           => $shortname . 'colorednav', 
                    'id'                => $shortname . 'navcolorhover',
                    'default'           => '#ec4017',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Controls: Homepage
--------------------------------------------------------------------------------------------------- */
$options[] = array( 'title'             => __( 'Featured slider', 'gabfire' ),
                    'description'       => __( 'Select a base query type to determine how this content area is populated. If base query type is Category or Tag-based, please identify the category or tag below. If it is Custom Field, posts which are marked as featured (checkbox labeled as "Is Featured" on "Add/Edit Post" screen) will be fetched while "Recent Posts" option is going to display most recent posts across all categories on featured slider.', 'gabfire' ),
                    'section'           => $shortname . 'featured',
                    'id'                => $shortname . 'featype',
                    'default'           => 'catbased',
                    'option'            => 'radio',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'catbased' => __( 'Category Based', 'gabfire'),
                        'cfbased'  => __( 'Custom Field', 'gabfire'),
                        'mrecent'  => __( 'Recent Posts', 'gabfire'),
                        'tagbased' => __( 'Tag Based', 'gabfire'),
                    ),
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('If Category Based: Select a category', 'gabfire'),
                    'section'           => $shortname . 'featured', 
                    'id'                => $shortname . 'cat',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('If Tag Based: Select a tag', 'gabfire'),
                    'section'           => $shortname . 'featured', 
                    'id'                => $shortname . 'tag',
                    'default'           => '',
                    'option'            => 'tags',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'featured',
                    'id'                => $shortname . 'nr',
                    'default'           => 4,
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Primary Top First Row', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'primarytop', 
                    'id'                => $shortname . 'cat2',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'nr2',
                    'default'           => 2,
                    'option'            => 'select',
                    'choices'           => array(0,2),
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Custom caption instead of large cat name', 'gabfire' ),
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'cap2',
                    'default'           => 'LATEST DESTINATION',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Custom caption instead of small cat name', 'gabfire' ),
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'cap2a',
                    'default'           => 'Previous Destination',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Primary Top Second Row', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'primarytop', 
                    'id'                => $shortname . 'cat4',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'nr4',
                    'default'           => 1,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Use a custom caption instead of cat name', 'gabfire' ),
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'cap4',
                    'default'           => 'LATEST ARTICLES',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Primary Top Third Row - Left', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'primarytop', 
                    'id'                => $shortname . 'top3cat1',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'top3nr1',
                    'default'           => 1,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Primary Top Third Row - Mid', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'primarytop', 
                    'id'                => $shortname . 'top3cat2',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'top3nr2',
                    'default'           => 1,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Primary Top Third Row - Right', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'primarytop', 
                    'id'                => $shortname . 'top3cat3',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'top3nr3',
                    'default'           => 1,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Right Narrow Col Below Slider', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'primarytop', 
                    'id'                => $shortname . 'cat3',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'nr3',
                    'default'           => 10,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Use a custom caption instead of cat name', 'gabfire' ),
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'cap3',
                    'default'           => 'TOP 10',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );
		
$options[] = array( 'title'             => '',
                    'description'       => __( 'Use an image instead of text caption', 'gabfire' ), 
                    'section'           => $shortname . 'primarytop',
                    'id'                => $shortname . 'cap3img',
                    'default'           => '',
                    'option'            => 'file',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Custom Title', 'gabfire' ),
                    'description'       => __( 'Use a custom caption above sidebar tabs', 'gabfire' ),
                    'section'           => $shortname . 'sidebar',
                    'id'                => $shortname . 'tabtitle',
                    'default'           => 'POPULAR',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Sidebar Tabbed Slider #1', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'sidebar', 
                    'id'                => $shortname . 'tabcat1',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'sidebar',
                    'id'                => $shortname . 'tabnr1',
                    'default'           => 5,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Sidebar Tabbed Slider #2', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'sidebar', 
                    'id'                => $shortname . 'tabcat2',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'sidebar',
                    'id'                => $shortname . 'tabnr2',
					'default'           => 5,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Sidebar Tabbed Slider #3', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'sidebar', 
                    'id'                => $shortname . 'tabcat3',
                   'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'sidebar',
                    'id'                => $shortname . 'tabnr3',
                    'default'           => 5,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Sidebar Tabbed Slider #4', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'sidebar', 
                    'id'                => $shortname . 'tabcat4',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'sidebar',
                    'id'                => $shortname . 'tabnr4',
                    'default'           => 5,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Subnews #1', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'subnews', 
                    'id'                => $shortname . 'subcat1',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'subnews',
                    'id'                => $shortname . 'subnr1',
                    'default'           => 3,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Use a custom caption instead of cat name', 'gabfire' ),
                    'section'           => $shortname . 'subnews',
                    'id'                => $shortname . 'subcap1',
                    'default'           => 'THINGS TO DO',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Subnews #2', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'subnews', 
                    'id'                => $shortname . 'subcat2',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'subnews',
                    'id'                => $shortname . 'subnr2',
                    'default'           => 3,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Use a custom caption instead of cat name', 'gabfire' ),
                    'section'           => $shortname . 'subnews',
                    'id'                => $shortname . 'subcap2',
                    'default'           => 'PLACES TO EAT',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Subnews #3', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'subnews', 
                    'id'                => $shortname . 'subcat3',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'subnews',
                    'id'                => $shortname . 'subnr3',
					'default'           => 3,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Use a custom caption instead of cat name', 'gabfire' ),
                    'section'           => $shortname . 'subnews',
                    'id'                => $shortname . 'subcap3',
                    'default'           => 'WHERE & WHEN',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Subnews #4', 'gabfire' ),
                    'description'       => __( 'Select a category', 'gabfire' ),
                    'section'           => $shortname . 'subnews', 
                    'id'                => $shortname . 'subcat4',
                    'default'           => 1,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Number of entries', 'gabfire' ),
                    'section'           => $shortname . 'subnews',
                    'id'                => $shortname . 'subnr4',
					'default'           => 3,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __( 'Use a custom caption instead of cat name', 'gabfire' ),
                    'section'           => $shortname . 'subnews',
                    'id'                => $shortname . 'subcap4',
                    'default'           => 'SHOP',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Controls: Sliders
--------------------------------------------------------------------------------------------------- */
$options[] = array( 'title'             => __( 'Featured Slider', 'gabfire' ),
                    'description'       => __( 'Auto rotation speed. Slide to next slide in X seconds (Select 0 to disable auto rotation)', 'gabfire' ),
                    'section'           => $shortname . 'sliders', 
                    'id'                => $shortname . 'featimeout',
                    'default'           => 5,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );
					
$options[] = array( 'title'             => __( 'Media Category Slider', 'gabfire' ),
                    'description'       => __( 'Auto rotation speed. Slide to next slide in X seconds (Select 0 to disable auto rotation)', 'gabfire' ),
                    'section'           => $shortname . 'sliders', 
                    'id'                => $shortname . 'mediatimeout',
                    'default'           => 5,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );		

$options[] = array( 'title'             => __( 'Sidebar Category Slider', 'gabfire' ),
                    'description'       => __( 'Auto rotation speed. Slide to next slide in X seconds (Select 0 to disable auto rotation)', 'gabfire' ),
                    'section'           => $shortname . 'sliders', 
                    'id'                => $shortname . 'sidebartimeout',
                    'default'           => 5,
                    'option'            => 'select',
                    'choices'           =>  $options_to_20,
                    'type'              => 'control' );							
					
$options[] = array( 'title'             => __( 'Post Gallery', 'gabfire' ),
                    'description'       => __( 'Automatically create a slideshow of uploaded photos in post entries to be displayed below post title. [Note: Inner-Page options include a) displaying slider site-wide b) tag-based c) or to disable completely].', 'gabfire' ),
                    'section'           => $shortname . 'sliders', 
                    'id'                => $shortname . 'inslider',
                    'default'           => 'disable',
                    'option'            => 'select',
                    'choices'           =>  $innerslide,
                    'type'              => 'control' );

$options[] = array( 'title'             => __( 'Post Gallery: If Tag Based', 'gabfire' ),
                    'description'       => __( 'If tag-based option is selected, display posts assigned this tag to be shown in inner-page slider. (Note: Posts with multiple image attachments and assigned this tag will display an inner-page slider).', 'gabfire' ), // Control label
                    'section'           => $shortname . 'sliders', // section
                    'id'                => $shortname . 'inslider_tag', // unique ID
                    'default'           => '',
                    'option'            => 'tags',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control
					
$options[] = array( 'title'             => __( 'Post Gallery: Auto Rotation Speed', 'gabfire' ),
                    'description'       => __( 'Auto rotation speed. Slide to next slide in X seconds (Select 0 to disable auto rotation)', 'gabfire' ),
                    'section'           => $shortname . 'sliders',
                    'id'                => $shortname . 'inner_speed',
                    'default'           => 0,
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $options_to_20,
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Controls: Social
--------------------------------------------------------------------------------------------------- */					
$options[] = array( 'title'             => __( 'Header - Social Items', 'gabfire' ),
                    'description'       => __( 'Display social icons on masthead', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'socialhead',
                    'default'           => '',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => __( 'Link To Social Sites', 'gabfire' ),
                    'description'       => __( 'Facebook Account Link', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'facebook',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'Twitter Account Link', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'twitter',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'Google Plus Account Link', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'gplus',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'LinkedIn Account Link', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'linkedin',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'Pinterest Account Link', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'pinterest',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'Tumblr Account Link', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'tumblr',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'Instagram Account Link', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'instagram',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'Vimeo Account Link', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'vimeo',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'Youtube Account Link', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'ytube',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => 'RSS Site Feed',
                    'description'       => __( 'Display a link to site feeds on masthead navigation', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'sitefeed',
                    'default'           => '',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );					

$options[] = array( 'title'             => '',
                    'description'       => __( 'Link to subscribe RSS via Email', 'gabfire' ),
                    'section'           => $shortname . 'social',
                    'id'                => $shortname . 'email',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
/* ---------------------------------------------------------------------------------------------------
    Controls: Misc
--------------------------------------------------------------------------------------------------- */					
$options[] = array( 'title'             => __( 'Category Templates', 'gabfire' ),
                    'description'       => __( '2 column cat template. Separate with comma if more than 1 category entered. (ex: 1,5,99)', 'gabfire' ),
                    'section'           => $shortname . 'cattemps',
                    'id'                => $shortname . '2col',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( '3 column category template IDs.', 'gabfire' ),
                    'section'           => $shortname . 'cattemps',
                    'id'                => $shortname . '3col',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( '4 column category template.', 'gabfire' ),
                    'section'           => $shortname . 'cattemps',
                    'id'                => $shortname . '4col',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( '2 column no sidebar category template IDs.', 'gabfire' ),
                    'section'           => $shortname . 'cattemps',
                    'id'                => $shortname . '2col_full',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( '3 column cat  no sidebar template IDs.', 'gabfire' ),
                    'section'           => $shortname . 'cattemps',
                    'id'                => $shortname . '3col_full',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( '4 column no sidebar cat template.', 'gabfire' ),
                    'section'           => $shortname . 'cattemps',
                    'id'                => $shortname . '4col_full',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'Media category template.', 'gabfire' ),
                    'section'           => $shortname . 'cattemps',
                    'id'                => $shortname . 'media',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'Magazine category layout.', 'gabfire' ),
                    'section'           => $shortname . 'cattemps',
                    'id'                => $shortname . 'mag',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => __( 'RSS Feed Burner', 'gabfire' ),
                    'description'       => __( 'Link to a third party feed handler', 'gabfire' ),
                    'section'           => $shortname . 'othersettings',
                    'id'                => $shortname . 'rssaddr',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => __( 'Do not duplicate posts', 'gabfire' ),
                    'description'       => __( 'Regardless of category selections, do not duplicate posts on homepage. This prevents the same post from appearing in multiple sections (good for SEO)', 'gabfire' ),
                    'section'           => $shortname . 'othersettings',
                    'id'                => $shortname . 'dnd',
                    'default'           => 0,
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );							
					
$options[] = array( 'title'             => __( 'Featured Image Post Display', 'gabfire' ),
                    'description'       => __( 'Auto resize and display featured image on single post - above entry', 'gabfire' ),
                    'section'           => $shortname . 'othersettings',
                    'id'                => $shortname . 'autoimage',
                    'default'           => '',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );
										
$options[] = array( 'title'             => __( 'Widget Map', 'gabfire' ),
                    'description'       => __( 'Display the location of widgets on front page. After reviewing widget locations be sure to disable this option.', 'gabfire' ),
                    'section'           => $shortname . 'othersettings',
                    'id'                => $shortname . 'widget',
                    'default'           => '',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );		
					
/* ---------------------------------------------------------------------------------------------------
    Controls: Custom Styling
--------------------------------------------------------------------------------------------------- */
$options[] = array( 'title'             => __( 'Custom CSS', 'gabfire' ),
					'description'       => __( 'Quickly add some CSS to your theme by adding it to this block. To use a solid background color for the body of site, paste body{background-image:none} below and then set the background color on next option.', 'gabfire' ),
                    'section'           => $shortname . 'customcss',
                    'id'                => 'custom_css',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Controls: Customize Colors
--------------------------------------------------------------------------------------------------- */				
$options[] = array( 'title'             => __( 'Customize Fonts and/or Colors', 'gabfire' ),
                    'description'       => __( 'This is a master trigger to enable/disable all custom styles.', 'gabfire' ),
                    'section'           => $shortname . 'customizecolors',
                    'id'                => $shortname . 'customcolors',
                    'default'           => 0,
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );	
					
$options[] = array( 'title'             => __('4 vertical column below gallery', 'gabfire'),
                    'description'       => __('Select a color for col #1', 'gabfire'),
                    'section'           => $shortname . 'customizecolors',
                    'id'                => $shortname . 'subnew1color',
                    'default'           => '#bd2242',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color for col #2', 'gabfire'),
                    'section'           => $shortname . 'customizecolors',
                    'id'                => $shortname . 'subnew2color',
                    'default'           => '#68b3d2',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );	

$options[] = array( 'title'             => '',
                    'description'       => __('Select a color for col #3', 'gabfire'),
                    'section'           => $shortname . 'customizecolors',
                    'id'                => $shortname . 'subnew3color',
                    'default'           => '#e87c58',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );	
					
$options[] = array( 'title'             => '',
                    'description'       => __('Select a color for col #4', 'gabfire'),
                    'section'           => $shortname . 'customizecolors',
                    'id'                => $shortname . 'subnew4color',
                    'default'           => '#d8c238',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );	

$options[] = array( 'title'             => __( 'Typography', 'gabfire' ),
                    'description'       => __( 'Change body font style of sitebody.', 'gabfire' ),
                    'section'           => $shortname . 'customizecolors',
                    'id'                => $shortname . 'bodytype',
                    'default'           => '',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => __( 'Body Font', 'gabfire' ), // Control label
                    'description'       => __( 'Font size (px)', 'gabfire' ),
                    'section'           => $shortname . 'customizecolors', // Add it under the section
                    'id'                => $shortname . 'bodyfontsize', // unique ID
                    'default'           => '15',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $options_to_30,
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __( 'Font Family', 'gabfire' ),
                    'section'           => $shortname . 'customizecolors',
                    'id'                => $shortname . 'bodyfontfamily',
                    'default'           => '',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => $fonts,
                    'type'              => 'control' );
					
$options[] = array( 'title'             => '',
                    'description'       => __('Font Color', 'gabfire'),
                    'section'           => $shortname . 'customizecolors',
                    'id'                => $shortname . 'bodyfontcolor',
                    'default'           => '#555555',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );
					
$options[] = array( 'title'             => __( 'Primary Color', 'gabfire' ),
                    'description'       => __( 'Change the primary color of site', 'gabfire' ),
                    'section'           => $shortname . 'customizecolors',
                    'id'                => $shortname . 'change_colors',
                    'default'           => 0,
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );					
					
$options[] = array( 'title'             => '',
                    'description'       => __('Change the pinkish red with another color', 'gabfire'),
                    'section'           => $shortname . 'customizecolors',
                    'id'                => $shortname . 'light_red',
                    'default'           => '#ec4017',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );					
					
// Do not edit or delete below. This will include any child theme options.
if ( file_exists( get_stylesheet_directory() .'/customizer.php' ) ) {
    include get_stylesheet_directory() . '/customizer.php';
}
/* ---------------------------------------------------------------------------------------------------
    End Control Options
--------------------------------------------------------------------------------------------------- */




/*
$options[] = array( 'title'             => __( 'Textarea Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => 'title_tagline', // section
                    'id'                => $shortname . 'textarea', // unique ID
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' ); // type = control




// URL field - Example Panel - section 2
$options[] = array( 'title'             => __( 'URL Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_2', // section
                    'id'                => $shortname . 'url', // unique ID
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' ); // type = control

// Email field - Example Panel - section 2
$options[] = array( 'title'             => __( 'Email Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_2', // section
                    'id'                => $shortname . 'email', // unique ID
                    'default'           => '',
                    'option'            => 'email',
                    'sanitize_callback' => 'sanitize_email',
                    'type'              => 'control' ); // type = control

// Password field - Example Panel - section 2
$options[] = array( 'title'             => __( 'Password Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_2', // section
                    'id'                => $shortname . 'password', // unique ID
                    'default'           => '',
                    'option'            => 'password',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' ); // type = control

// Range field - Example Panel - section 2
$options[] = array( 'title'             => __( 'Range Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_2', // section
                    'id'                => $shortname . 'range', // unique ID
                    'default'           => 70,
                    'option'            => 'range',
                    'sanitize_callback' => '',
                    'input_attrs'       => array(
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                        'class' => 'example-class',
                    ),
                    'type'              => 'control' ); // type = control

// Pages field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Pages Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_3', // section
                    'id'                => $shortname . 'pages', // unique ID
                    'default'           => 0,
                    'option'            => 'pages',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Categories field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Categories Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_3', // section
                    'id'                => $shortname . 'categories', // unique ID
                    'default'           => 0,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Tags field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Tags Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_3', // section
                    'id'                => $shortname . 'tags', // unique ID
                    'default'           => '',
                    'option'            => 'tags',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Post Types field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Post Types Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_3', // section
                    'id'                => $shortname . 'post_types', // unique ID
                    'default'           => '',
                    'option'            => 'post_types',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Posts field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Posts Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_3', // section
                    'id'                => $shortname . 'posts', // unique ID
                    'default'           => '',
                    'option'            => 'posts',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Users field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Users Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_3', // section
                    'id'                => $shortname . 'users', // unique ID
                    'default'           => '',
                    'option'            => 'users',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control

// Menus field - Example Panel 2 - section 3
$options[] = array( 'title'             => __( 'Menus Field', 'gabfire' ), // Control label
                    'description'       => '', // Control description
                    'section'           => $shortname . 'section_3', // section
                    'id'                => $shortname . 'menus', // unique ID
                    'default'           => '',
                    'option'            => 'menus',
                    'sanitize_callback' => '',
                    'type'              => 'control' ); // type = control
*/

