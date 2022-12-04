<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

function wpbootstrap_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

function enqueue_and_register_my_scripts(){
    wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery.min.js', array(), '1.0.0', true );
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_register_script( 'custom', get_template_directory_uri().'/js/global.js', array(), '1.0.0', true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'custom' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_and_register_my_scripts' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
        wp_register_style(
            'custom-style',
            get_template_directory_uri() . '/styles/custom.css',
            array(),
            $version_string
        );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );
		wp_enqueue_style( 'custom-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
