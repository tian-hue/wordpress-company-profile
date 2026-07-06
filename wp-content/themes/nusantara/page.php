<?php
/**
 * The template for displaying all single pages.
 * 
 * @package Nusantara
 */

get_header(); ?>

<main id="primary" class="site-main page-main">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
