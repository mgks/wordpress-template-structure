<?php
/**
 * Theme Setup and Enqueue
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'wp_skeleton_setup' ) ) {
	function wp_skeleton_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Switch default core markup for search form, comment form, etc. to HTML5.
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );
	}
}
add_action( 'after_setup_theme', 'wp_skeleton_setup' );

/**
 * Enqueue scripts and styles.
 */
function wp_skeleton_scripts() {
	// Load main stylesheet (style.css)
	wp_enqueue_style( 'wp-skeleton-style', get_stylesheet_uri() );

	// Load custom CSS
	wp_enqueue_style( 'wp-skeleton-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );

	// Load custom JS
	wp_enqueue_script( 'wp-skeleton-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_skeleton_scripts' );

// Load custom function snippets
require get_template_directory() . '/inc/custom-functions.php';