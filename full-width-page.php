<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Starter Theme
 * @since 1.0
 */
?>


<?php get_header();?>
<main class="container-fluid <?php if(!is_front_page()):?>pt-5<?php endif;?>">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
    
    <?php the_content();?>
    <?php endwhile; ?>
</main>
<?php endif; ?>
<?php get_footer();?>