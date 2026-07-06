<?php
/**
 * The front page template file.
 * Used for the static homepage.
 * 
 * @package Nusantara
 */

get_header(); ?>

<main id="primary" class="site-main front-page-main">
    <?php
    while ( have_posts() ) :
        the_post();
        // This is where we will inject our Elementor blocks or custom Gutenberg blocks later.
        the_content();
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
