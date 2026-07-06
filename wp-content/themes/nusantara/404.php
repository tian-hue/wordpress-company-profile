<?php
/**
 * The template for displaying 404 pages (not found).
 * 
 * @package Nusantara
 */

get_header(); ?>

<main id="primary" class="site-main error-404 not-found">
    <div class="container">
        <section class="error-section text-center">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nusantara' ); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'nusantara' ); ?></p>
                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </div>
</main>

<?php get_footer(); ?>
