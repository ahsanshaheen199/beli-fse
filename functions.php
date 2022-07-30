<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Beli
 * @since 1.0.0
 */

if ( ! function_exists( 'beli_assets' ) ) {
	/**
	 * Enqueue the style.css file.
	 *
	 * @since 1.0.0
	 */
	function beli_assets() {
		wp_enqueue_style(
			'beli-style',
			get_theme_file_uri( '/assets/css/beli.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'beli-main-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}

add_action( 'wp_enqueue_scripts', 'beli_assets' );

if( ! function_exists( 'beli_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 */
	function beli_setup() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( './assets/css/beli.css' );
	}
}

add_action( 'after_setup_theme', 'beli_setup' );

if( ! function_exists( 'beli_register_block_pattern_category' ) ) {
	/**
	 * Register category for block pattern
	 *
	 * @return void
	 */
	function beli_register_block_pattern_category() {
		register_block_pattern_category( 'beli', array(
			'label' => __( 'Beli', 'beli' )
		) );
	}
}
add_action( 'init', 'beli_register_block_pattern_category' );
