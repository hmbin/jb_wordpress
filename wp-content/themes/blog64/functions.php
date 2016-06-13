<?php
/**
 * Blog64 functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package blog64
 */

if ( ! function_exists( 'blog64_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blog64_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on blog64, use a find and replace
	 * to change 'blog64' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'blog64', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 820, 350, true );
	add_image_size( 'blog64-figure-thumb', 360, 240, true ); // Home Blog Page
	add_image_size( 'blog64-header-full', 1920, 720, true ); // Header background
	add_image_size( 'blog64-single-full', 999999, 350, true ); // Single Page

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'blog64' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	//Custom background image and text color has been disabled in this theme

	add_theme_support( 'custom-logo', array(
	   	'height'      => 52,
	   	'width'       => 200,
	   	'header-text' => array( 'site-title', 'site-description' ),
		) 
	);
}
endif; // blog64_setup
add_action( 'after_setup_theme', 'blog64_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! isset( $content_width ) ) $content_width = 900;
function blog64_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blog64_content_width', 640 );

}
add_action( 'after_setup_theme', 'blog64_content_width', 0 );


function blog64_filter_front_page_template( $template ) {
    return is_home() ? '' : $template;
}
add_filter( 'front_page_template', 'blog64_filter_front_page_template' );




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blog64_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Left', 'blog64' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div class="single">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Right', 'blog64' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<div class="single">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title custom-widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Blocks', 'blog64' ),
		'id'            => 'footer-blocks',
		'description'   => '',
		'before_widget' => '<div class="col-md- col-sm-4 single">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'blog64_widgets_init' );



function blog64_the_custom_logo() {
   if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
   }
}



function blog64_title( $before = '', $after = '' ) {
	if ( is_category() ) {
		echo single_cat_title();
	} else 
		echo the_title();
}




if ( ! function_exists( 'blog64_get_link_url' ) ) :
function blog64_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}
endif;





add_filter( 'widget_tag_cloud_args', 'blog64_tag_cloud_args' );
function blog64_tag_cloud_args( $args ) {
	$args['number'] = 10; // Your extra arguments go here
	$args['largest'] = 18;
	$args['smallest'] = 12;
	$args['unit'] = 'px';
	return $args;
}



function blog64_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'blog64_custom_excerpt_length', 999 );




/**
 * Enqueue scripts and styles.
 */
function blog64_scripts() {
	wp_enqueue_style( 'blog64-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/css/font-awesome.css' );	
	wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css' );
	wp_enqueue_style( 'webfont', '//fonts.googleapis.com/css?family=Josefin+Sans:300,400,700,400italic,700italic|Open+Sans:700,900,400,300&subset=latin,latin-ext', array(), NULL);
	wp_enqueue_style( 'blog64-main', get_template_directory_uri().'/css/main.css' );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery-smartmenus-bootstrap', get_template_directory_uri() . '/js/jquery.smartmenus.bootstrap.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery-smartmenus-min', get_template_directory_uri() . '/js/jquery.smartmenus.min.js', array('jquery'), '1.0.0', true );	
	wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'blog64-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blog64_scripts' );



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
require get_template_directory() . '/inc/class.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Navigation Walker
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';