<?php
function theme_enqueue_styles_and_scripts() {
    // Chargement du style personnalisé du thème
    wp_enqueue_style('mota-style', get_stylesheet_directory_uri() . '/sass/style.css', array(), time());

    // Chargement du script jquery via CDN
    wp_enqueue_script('jquery-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

    // Chargement des scripts js du thème
    wp_enqueue_script('main', get_theme_file_uri() . '/js/main.js', array(), true);
    wp_enqueue_script('burger', get_theme_file_uri() . '/js/burger.js',array(), true);
    
}

/****ACTIONS ****/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_and_scripts' );
?>