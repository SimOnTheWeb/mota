<?php
function theme_enqueue_styles() {
    // Chargement du style personnalisé du thème
    wp_enqueue_style('mota-style', get_stylesheet_directory_uri() . '/sass/style.scss', array(), time());

    // Chargement des scripts js du thème
    wp_enqueue_script('burger', get_template_directory_uri() . '/js/burger.js', array(), time(), true);
    wp_enqueue_script('burger', get_template_directory_uri() . '/js/main.js', array(), time(), true);
}

/****ACTIONS ****/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>