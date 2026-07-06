<?php
/**
 * The template for displaying archive pages (categories, tags, custom taxonomies).
 * 
 * @package Nusantara
 */

get_header(); ?>

<main id="primary" class="site-main archive-main">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <div class="archive-grid">
                <?php
                while ( have_posts() ) :
                    the_post();
                    // Basic fallback structure
                    echo '<article class="archive-item">';
                    the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
                    the_excerpt();
                    echo '</article>';
                endwhile;
                ?>
            </div>
            
            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <p>No posts found in this archive.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
