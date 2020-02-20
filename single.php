<?php
/**
 * @package WordPress
 * @subpackage Starter Theme
 * @since 1.0
 */
?>


<?php get_header();?>
<main class="component--single-post  container">
    <div class="row">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>    
            <article class="col-12 col-md-9">
                <h1><?php the_title();?></h1>
                <p>Posted <?php the_date();?> by <?php the_author();?></p>
                <p><?php the_content();?></p>
            </article>
            <aside class="col-12 col-md-3">
                <?php get_sidebar();?>
            </aside>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer();?>