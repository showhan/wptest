<?php
/**
 * wptest functions and definitions.
 *
 * @package wptest
 */

if ( ! function_exists( 'wptest_setup' ) ) :

function wptest_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'wptest', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wptest' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wptest_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wptest_setup' );

/**
 * Register widget area.
 */
function wptest_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wptest' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wptest' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wptest_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wptest_scripts() {
	wp_enqueue_style( 'wptest-style', get_stylesheet_uri() );

	wp_enqueue_style('wptest-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('wptest-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	

	wp_enqueue_script( 'wptest-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jQuery'), '20151215', true );

	wp_enqueue_script( 'wptest-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wptest-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wptest-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wptest_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Navwaker added
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * breadcrumb added
 */
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * metabox added
 */
require get_template_directory() . '/inc/metaboxes/cmb-functions.php';

/**
 * custom post added
 */
require get_template_directory() . '/inc/custom-post/cpt-functions.php';
