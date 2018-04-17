<?php
require('bs4Navwalker.php');

require('includes/b4st-pagination.php');

function nattatheme_resources(){
    // Style
    wp_enqueue_style('boostrap4-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css');
    //wp_enqueue_style('style', get_stylesheet_directory_uri().'/assets/css/main.css');


    // Scripts and jQury
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.2.1.slim.min.js',[],'3.2.1',true);
    wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',['jquery'],'1.12.9',true);
    wp_enqueue_script('boostrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',['jquery','popper'],'4.0.0',true);
    wp_enqueue_script('myjs', get_stylesheet_directory_uri().'/js/script.js', ['jquery', 'boostrap'],false,true);

}

add_action('wp_enqueue_scripts', 'nattatheme_resources');

// Theme setup
function nattatheme_setup()
{
    // Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));

// Add post format support
add_theme_support('post-formats', ['aside', 'gallery', 'link']);

    // Add feature image support
add_theme_support('post-thumbnails');
add_image_size('small-thumbnail', 180, 120,true); //180 == width, 120 == tall or hight ,true == crop the image
add_image_size('banner-image', 700, 210, true); // in array ['left','top'] you set that you want to keep left and the top of image.

// Add Support For Logo
$options = [
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
];

add_theme_support( 'custom-logo' );

// Add Support For Header

    $args = [
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1900,
        'height'             => 1500,
        'flex-width'         => true,
        'flex-height'        => true,
    ];
    add_theme_support( 'custom-header', $args );


}

add_action('after_setup_theme', 'nattatheme_setup');

// Widgets
function myWidgetsInit(){
    // Widgest blog sidebar
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
        'after_widget'	=> '</div>',
    ) );
    // Widgest page sidebar
    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'theme_name' ),
        'id'            => 'page_sidebar',
        'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
        'after_widget'	=> '</div>',
    ) );

// register footer sidebar
register_sidebar([
    'name'			=> "Sidfots-widgetar",
    'id'			=> 'sidebar_footer',
    'before_widget'	=> '<div id="%1$s" class="widget col-md %2$s">',
    'after_widget'	=> '</div>',
    ]);


}
add_action('widgets_init', 'myWidgetsInit');

// Customize Excerpt Word Count Length
function custom_excerpt_lenght($length)
{
    return 25;
}

add_filter('excerpt_length', 'custom_excerpt_lenght');

// Replaces the excerpt "Read More" text
function new_excerpt_more() {
    return '...<br> <br><a class="more-link btn btn-primary" href="' . get_permalink($post->ID) . '">Read More&raquo;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Body Class
function custom_class( $classes ) {
    if ( is_page_template( 'page-example.php' ) ) {
        $classes[] = 'example';
    }
    return $classes;
}
add_filter( 'body_class', 'custom_class' );

// execlude post in category FAQ (id of cat) from main page

function exclude_category( $query ) {
    if ( $query->is_home() && $query->is_main_query()) {
        $query->set( 'cat', '-10' );

    }
}
//add_action('pre_get_posts', 'exclude_category' );
/*function modify_widget() {
    return ['cat' => '1,2,5,6'];

}
add_filter('widget_posts_args','modify_widget');
*/

function exclude_cat_widget( $query ) {

    //$query is passed by reference.  we don't need to return anything. whatever changes made inside this function will automatically effect the global variable

    $excluded = array(10);  //made it an array in case you need to exclude more than one

    // dont exclude if we're in wordpress admin
    if (!is_admin()) {
        // only exclude on the front end
        if( is_home() || is_single() || !is_page() ) {
            $query->set('category__not_in', $excluded);
        }
    }
}
add_action('pre_get_posts', 'exclude_cat_widget' );


// Customize Appearance Options
function nattaTheme_customize_register($nt_customize){


}

add_action('customize_register','nattaTheme_customize_register');
