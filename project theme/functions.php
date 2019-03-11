<?php
add_filter('show_admin_bar', '__return_false');

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-main', get_template_directory_uri() .'/css/main.css', array(), filemtime( get_theme_file_path('css/main.css')) );
    wp_enqueue_style( 'style-reset', get_template_directory_uri() .'/css/reset.css' );
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . "/slick/slick.css");
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . "/slick/slick-theme.css");
    wp_enqueue_style( 'font-css', "https://fonts.googleapis.com/css?family=Oswald:300,400,700&amp;subset=cyrillic");
    wp_enqueue_style( 'icon-css', "https://use.fontawesome.com/releases/v5.7.2/css/all.css");

    wp_deregister_script('jquery');
    wp_register_script('jquery', "https://code.jquery.com/jquery-3.3.1.min.js");
    wp_register_script('jquery', "//code.jquery.com/jquery-migrate-1.2.1.min.js");
    wp_register_script('slick-js', get_template_directory_uri() . '/slick/slick.min.js', array ('jquery'), null, false);
    wp_enqueue_script( 'nav-js', get_template_directory_uri() . '/js/nav.js', array ('jquery'), null, false);
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js', array ('jquery', 'slick-js'), null, false);
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
add_theme_support('post-thumbnails');

function register_my_menu() {
    register_nav_menu('header-menu', __( 'header menu') );
}
add_action( 'init', 'register_my_menu' );


add_filter('excerpt_length', function (){
    return 20;
});

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
    global $post;
    return '<a href="'. get_permalink($post) . '" class="blog_post-list_item_text_link" >Читать дальше...</a>';
}












?>