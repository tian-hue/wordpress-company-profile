<?php
/**
 * The main template file.
 * This is the ultimate fallback file in the WordPress template hierarchy.
 * 
 * @package Nusantara
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                // We will extract this into a template part later (e.g., template-parts/content.php)
                echo '<article id="post-' . get_the_ID() . '">';
                the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
                the_excerpt();
                echo '</article>';
            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
