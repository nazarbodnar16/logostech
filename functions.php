<?php
//Hide admin bar
show_admin_bar( false );

// Load Redux
/*include_once 'inc/loader.php';*/

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'menus' );
}

//register menus
register_nav_menus(array(
    'main_menu' => 'Main menu',
    'foot_menu' => 'Footer menu'
));

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
    wp_enqueue_style( 'sumoselect', get_template_directory_uri() . '/styles/sumoselect.min.css' );

	//jQuery minified
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/scripts/jquery.min.js', false, null, false );
	wp_enqueue_script( 'jquery' );

	//Vendor scripts
	wp_enqueue_script( 'id-vendor-script', get_template_directory_uri() . '/scripts/vendor.min.js', array(), '1.0.0', true );

	//Custom scripts
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/development/scripts/swiper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/development/scripts/parallax.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/development/scripts/jquery.fancybox.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/development/scripts/jquery.matchHeight-min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/development/scripts/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'id-custom-script', get_template_directory_uri() . '/scripts/index.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'sumo-select', get_template_directory_uri() . '/scripts/jquery.sumoselect.min.js', array('jquery'), '1.0.0', true );

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
// add_filter( 'wpcf7_form_elements', function ( $content ) {
// 	$content = preg_replace( '/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content );
// 	return $content;
// } );

// ACF option pages

    if( function_exists('acf_add_options_page') ) {

        $option_page = acf_add_options_page(array(
            'page_title' 	=> 'Logitech Theme Setting',
            'menu_title' 	=> 'Theme setting',
            'menu_slug' 	=> 'theme-general-settings',
            'capability' 	=> 'manage_options',
            'redirect' 	    => false
        ));
   		acf_add_options_sub_page(array(
   		    'page_title'    => 'Logitech Header Settings',
   		    'menu_title'    => 'Header',
   		    'parent_slug'   => 'theme-general-settings',
   		));
   		acf_add_options_sub_page(array(
   		    'page_title'    => 'Logitech Footer Settings',
   		    'menu_title'    => 'Footer',
   		    'parent_slug'   => 'theme-general-settings',
   		));

    }


//====================================================================================================================
//===============================================PRODUCTS CUSTOM POST TYPE========================================
//====================================================================================================================

function add_products_posts(){
    register_post_type(
                    'products',
                    array(
                        'labels'        => array(
                                                'name'                  => 'Products',
                                                'singular_name'         => 'Products item',
                                                'add_new'               => 'Add new',
                                                'add_new_item'          => 'Add new item',
                                                'edit'                  => 'Edit',
                                                'edit_item'             => 'Edit item',
                                                'new_item'              => 'New item',
                                                'view'                  => 'View',
                                                'view_item'             => 'View item',
                                                'search_items'          => 'Search item',
                                                'not_found'             => 'Not found',
                                                'not_found_in_trash'    => 'Not find in trash',
                                        ),
                        'public'        => true,
                        'hierarchical'  => true, 
                        'has_archive'   => true,
                        'menu_icon'    => 'dashicons-cart',
                        'supports'      => array(
                                                'title',
                                                //'editor',
                                                'thumbnail',
                                                //'post-formats',
                                                'excerpt',
                                                'products_artical_category'
                                            ),
                        'can_export' => true,
                    )
    );
}
add_action('init','add_products_posts');

function my_taxonomies_products_artical() {
    $labels = array(
        'name'              => _x( 'Category products', 'taxonomy general name' ),
        'singular_name'     => _x( 'Singular name', 'taxonomy singular name' ),
        'search_items'      => __( 'Search items' ),
        'all_items'         => __( 'All item' ),
        'parent_item'       => __( 'Parent item' ),
        'parent_item_colon' => __( 'Parent item colon' ),
        'edit_item'         => __( 'Edit item' ), 
        'update_item'       => __( 'Update item' ),
        'add_new_item'      => __( 'Add new item' ),
        'new_item_name'     => __( 'New item name' ),
        'menu_name'         => __( 'Products Category' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui'           => true,
        'show_admin_column' => true
    );
    register_taxonomy( 'products_artical_category', 'products', $args );
}
add_action( 'init', 'my_taxonomies_products_artical', 0 );

//====================================================================================================================
//===============================================SERVICES CUSTOM POST TYPE========================================
//====================================================================================================================

function add_services_posts(){
    register_post_type(
                    'services',
                    array(
                        'labels'        => array(
                                                'name'                  => 'Services',
                                                'singular_name'         => 'Services item',
                                                'add_new'               => 'Add new',
                                                'add_new_item'          => 'Add new item',
                                                'edit'                  => 'Edit',
                                                'edit_item'             => 'Edit item',
                                                'new_item'              => 'New item',
                                                'view'                  => 'View',
                                                'view_item'             => 'View item',
                                                'search_items'          => 'Search item',
                                                'not_found'             => 'Not found',
                                                'not_found_in_trash'    => 'Not find in trash',
                                        ),
                        'public'        => true,
                        'hierarchical'  => true, 
                        'has_archive'   => true,
                        'menu_icon'    => 'dashicons-share',
                        'supports'      => array(
                                                'title',
                                                'editor',
                                                'thumbnail',
                                                //'post-formats',
                                                'excerpt',
                                                'services_artical_category'
                                            ),
                        'can_export' => true,
                    )
    );
}
add_action('init','add_services_posts');

function my_taxonomies_services_artical() {
    $labels = array(
        'name'              => _x( 'Category services', 'taxonomy general name' ),
        'singular_name'     => _x( 'Singular name', 'taxonomy singular name' ),
        'search_items'      => __( 'Search items' ),
        'all_items'         => __( 'All item' ),
        'parent_item'       => __( 'Parent item' ),
        'parent_item_colon' => __( 'Parent item colon' ),
        'edit_item'         => __( 'Edit item' ), 
        'update_item'       => __( 'Update item' ),
        'add_new_item'      => __( 'Add new item' ),
        'new_item_name'     => __( 'New item name' ),
        'menu_name'         => __( 'Services Category' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui'           => true,
        'show_admin_column' => true
    );
    register_taxonomy( 'services_artical_category', 'services', $args );
}
add_action( 'init', 'my_taxonomies_services_artical', 0 );
