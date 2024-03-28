<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body <?php body_class(); ?>>

<header>
    <nav>
        <div class="site_logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo du site de Nathalie Mota">
            </a>
        </div>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="nav_menu">
            <?php
                // Utilisation de la fonction wp_nav_menu pour afficher le menu WP
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'container'      => 'false',
                    )
                );
            ?>
        </div>
    </nav>
</header>

</body>
</html>
