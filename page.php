<?php
/**
 * @package WordPress
 * @subpackage Skeleton Theme
 * @since 1.0
 */
?>


<?php get_header();?>
<main class="container">
    <div class="row">
        <div class="col-12 col-md-8 mx-auto">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>    
                <h1><?php the_title();?></h1>
                <p><?php the_content();?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer();?>