<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 * 
 * @package Nusantara
 */
?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="footer-widgets">
            <!-- Footer widgets will go here -->
        </div>
        
        <div class="site-info">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div><!-- .site-info -->
    </div><!-- .container -->
</footer><!-- #colophon -->

<!-- wp_footer() is required for scripts to load before the closing body tag -->
<?php wp_footer(); ?>
</body>
</html>
