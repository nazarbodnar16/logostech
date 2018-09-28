<?php
//Hide admin bar
show_admin_bar( false );

// Load Redux
/*include_once 'inc/loader.php';*/

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'menus' );
}

add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'audio',
	'quote',
	'link',
	'gallery',
) );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
) );

//Load assets
function my_assets() {

	// Add Google Fonts
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Oswald:400,500,600,700|Quicksand:300,400,500,700|Abel' );

	wp_enqueue_style( 'id-main', get_stylesheet_uri() );

	//	Vendor styles
	wp_enqueue_style( 'id-vendor-styles', get_template_directory_uri() . '/styles/vendor.min.css', '1.0' );
	//Custom styles
	wp_enqueue_style( 'id-styles', get_template_directory_uri() . '/styles/main.min.css', '1.0' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/development/css/fontawesome-free-5.3.1-web/css/all.css', '1.0' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/development/css/bootstrap.min.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/development/css/jquery.fancybox.min.css' );

	//jQuery minified
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/scripts/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	//Vendor scripts
	wp_enqueue_script( 'id-vendor-script', get_template_directory_uri() . '/scripts/vendor.min.js', array(), '1.0.0', true );

	//Custom scripts
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/development/scripts/swiper.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/development/scripts/jquery.fancybox.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/development/scripts/jquery.matchHeight-min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/development/scripts/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'id-custom-script', get_template_directory_uri() . '/scripts/index.min.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'my_assets' );

//Allow post thumbnails
add_theme_support( 'post-thumbnails' );

//Add SVG media support
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'audio',
	'quote',
	'link',
	'gallery',
) );

//Disable Contact Form 7 wrapping inputs into span's
add_filter( 'wpcf7_form_elements', function ( $content ) {
	$content = preg_replace( '/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content );
	return $content;
} );

