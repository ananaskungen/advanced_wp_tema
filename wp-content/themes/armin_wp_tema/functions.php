<?php

if ( ! isset( $content_width ) ) {
	$content_width = 800; /* pixels */
}

if ( ! function_exists( 'armins_advanced_theme' ) ) :
	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function armins_advanced_theme() {

    /**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
		load_theme_textdomain( 'armins_advanced_theme', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus([
			'primary'   => __( 'Primary Menu', 'armins_advanced_theme' ),
			'secondary' => __( 'Secondary Menu', 'armins_advanced_theme' ),
		]);

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', [ 'aside', 'gallery', 'quote', 'image', 'video' ] );
	}


	function add_theme_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
	
		wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1', 'all' );
	
		wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), 1.1, true );
	
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



endif; // armins_advanced_theme
add_action( 'after_setup_theme', 'armins_advanced_theme' );


