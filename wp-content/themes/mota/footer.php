<footer>
    <nav>
        <div class="footer_menu">
            <?php
                // Utilisation de la fonction wp_nav_menu pour afficher le menu WP
                wp_nav_menu(
                    array(
                        'theme_location' => 'second-menu',
                        'container'      => 'false',
                    )
                );
            ?>
        </div>
    </nav>
</footer>