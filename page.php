<?php
/**
 * @package WordPress
 * @subpackage Skeleton Theme
 * @since 1.0
 */
?>


<?php get_header();?>
TEST
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
    <h1><?php the_title();?></h1>
    <p><?php the_content();?></p>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar();?>
<?php get_footer();?>