<?php
/**
 * Le modèle pour afficher les articles individuels (single post).
 *
 * @package WordPress
 * @subpackage mota
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    // Démarre la boucle.
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/post/content', get_post_format() );

        // Si les commentaires sont ouverts ou si nous avons au moins un commentaire, chargez le modèle de commentaire.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

        // Fin de la boucle.
    endwhile;
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>