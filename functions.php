<?php
/**
 * The header for our industrious
 *
 * @link https://www.softsmart.co.za/industrious-wordpress-template
 *
 * @package Industrious
 * @version 1.0
 */
 
function industriousScripts() 
{
    // Add custom fonts, used in the main stylesheet.
	//wp_enqueue_style( 'industrious-fonts', industrious_fonts_url(), array(), null );

    // Add Genericons, used in the main stylesheet.
	//wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

    // Theme stylesheet.
    wp_enqueue_style( 'industrious-style', get_stylesheet_uri() );

    wp_enqueue_script( 'industrious-browser', get_template_directory_uri() . '/assets/js/browser.min.js', array( 'jquery' ), '20180621', true );
    wp_enqueue_script( 'industrious-breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array( 'jquery' ), '20180621', true );
    wp_enqueue_script( 'industrious-util', get_template_directory_uri() . '/assets/js/util.js', array( 'jquery' ), '20180621', true );
    wp_enqueue_script( 'industrious-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '20180621', true );

    if (is_front_page()) {    
        wp_enqueue_style( 'flex-slider-css', get_template_directory_uri() . '/assets/css/flexslider.css', null, '20180621' );
        wp_enqueue_script( 'flex-slider', get_template_directory_uri() . '/assets/js/flexslider.js', array( 'jquery' ), '20180621', true );
    }

}
add_action( 'wp_enqueue_scripts', 'industriousScripts' );

function industrious_setup() 
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/industrious
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'industrious' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'industrious' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

	/*
	 * Enable support for custom logo.
	 *
	 */
	add_theme_support( 'custom-logo', array(
        'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
    ) );


	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'industrious' ),
		'social'  => __( 'Social Links Menu', 'industrious' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


}
add_action( 'after_setup_theme', 'industrious_setup' );


?>