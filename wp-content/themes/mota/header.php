<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

<header>
    <nav>
        <div class="site-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo du site de Nathalie Mota">
            </a>
        </div>
        <ul id="nav" class="nav_menu">
            <li><a href="" class="nav_link">Accueil</a></li>
            <li><a href="" class="nav_link">À propos</a></li>
            <li><a href="" class="nav_link">Contact</a></li>
        </ul>
        <div id="icons"></div>
    </nav>
</header>

