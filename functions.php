<?php
/**
 * treelc functions and definitions
 *
 * @package treelc
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'treelc_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function treelc_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on treelc, use a find and replace
	 * to change 'treelc' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'treelc', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'treelc' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'treelc_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // treelc_setup
add_action( 'after_setup_theme', 'treelc_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function treelc_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'treelc' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'treelc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function treelc_scripts() {
	/* Stylesheets */
	wp_enqueue_style( 'treelc-style', get_stylesheet_uri() );
	wp_enqueue_style( 'treelc-foundation', get_template_directory_uri() . '/assets/css/foundation.css');
	wp_enqueue_style( 'treelc-app', get_template_directory_uri() . '/assets/css/app.css');
	wp_enqueue_style( 'treelc-vollkorn', 'http://fonts.googleapis.com/css?family=Vollkorn:400italic,400,700');

	/* Scripts */
	wp_enqueue_script( 'treelc-modernizer', get_template_directory_uri() . '/assets/js/jquery.js', array(), true );
	wp_enqueue_script( 'treelc-modernizer', get_template_directory_uri() . '/assets/js/modernizr.js', array(), true );
	wp_enqueue_script( 'treelc-foundation', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'treelc-app', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), true );


	wp_enqueue_script( 'treelc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'treelc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'treelc_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
