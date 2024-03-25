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
        <div class="site-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo du site de Nathalie Mota">
            </a>
        </div>
        <div class="hamburger">☰</div>
        <div class="nav_menu">
            <ul>
                <li><a href="#" class="nav_link">Accueil</a></li>
                <li><a href="#" class="nav_link">À propos</a></li>
                <li><a href="#" class="nav_link">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>

</body>
</html>
