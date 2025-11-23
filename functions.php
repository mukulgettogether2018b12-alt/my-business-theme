<?php
// Enqueue scripts & styles
function my_business_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_business_scripts');

// Register main menu
function my_business_menu() {
    register_nav_menus(array('main-menu' => __('Main Menu')));
}
add_action('init', 'my_business_menu');

// Custom Post Types
function create_custom_post_types() {
    register_post_type('product', array(
        'labels'=> array('name'=>'Products','singular_name'=>'Product'),
        'public'=> true, 'has_archive'=> true, 'supports'=> array('title','editor','thumbnail')
    ));
    register_post_type('package', array(
        'labels'=> array('name'=>'Packages','singular_name'=>'Package'),
        'public'=> true, 'has_archive'=> true, 'supports'=> array('title','editor','thumbnail')
    ));
}
add_action('init', 'create_custom_post_types');
?>