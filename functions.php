<?php
// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );
// Load in our CSS
function mountainlaurel_enqueue_styles() {
  // wp_enqueue_style( 'font_awesome_css', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css' );
  wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' );
  wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/css/style.css', [], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'mountainlaurel_enqueue_styles' );
// Load in our JavaScript
function mountainlaurel_enqueue_js() {
  wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.6.0.slim.min.js', array('jquery'), true);
  //wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), true);
  wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array('jquery'), true);
  wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/ae6b17d964.js' );
  //wp_enqueue_script( 'elevator', get_template_directory_uri() . '/js/elevator.js' );
	//wp_enqueue_script( 'dropdown_js', get_template_directory_uri() . '/js/example.js' );
}
add_action( 'wp_enqueue_scripts', 'mountainlaurel_enqueue_js');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
// Register Menu Locations
register_nav_menus( [
  'main-menu' => esc_html__( 'Main Menu', 'mountainlaurel' ),
  'social-menu' => esc_html__( 'Social Menu', 'mountainlaurel' ),
  'footer-menu' => esc_html__( 'Footer Menu', 'mountainlaurel' ),
  'footer-social-menu' => esc_html__( 'Footer Social Menu', 'mountainlaurel' )
]);

function hide_wp_update_nag() {
    remove_action( 'admin_notices', 'update_nag', 3 ); //update notice at the top of the screen
    remove_filter( 'update_footer', 'core_update_footer' ); //update notice in the footer
}
add_action('admin_menu','hide_wp_update_nag');

//hide plugin updates notification in the dashboard
function hide_plugin_update_indicator(){
    global $menu,$submenu;
    $menu[65][0] = 'Plugins';
    $submenu['index.php'][10][0] = 'Updates';
}
add_action('admin_menu', 'hide_plugin_update_indicator');

function hide_update_msg_non_admins(){
     //if (!current_user_can( 'manage_options' )) { // non-admin users
        echo '<style>#setting-error-tgmpa>.updated settings-error notice is-dismissible, .update-nag, .updated { display: none; }</style>';
      //}
    }
    add_action( 'admin_head', 'hide_update_msg_non_admins');
?>
