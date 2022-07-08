<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mesonix
 * @since 1.0.0
 */

if ( ! function_exists( 'mesonix_assets' ) ) {
	/**
	 * Enqueue the style.css file.
	 *
	 * @since 1.0.0
	 */
	function mesonix_assets() {
		wp_enqueue_style(
			'mesonix-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}

add_action( 'wp_enqueue_scripts', 'mesonix_assets' );

if( ! function_exists( 'mesonix_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 */
	function mesonix_setup() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
}

add_action( 'after_setup_theme', 'mesonix_setup' );