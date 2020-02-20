<?php get_header();?>
<main class="component--blog-index container">
    <div class="row">
        <div class="col-12 col-sm-8">
            <?php if ( have_posts() ) : ?>
                <h1>Blog</h1>
                <?php while ( have_posts() ) : the_post(); ?>    
                    <article>
                        <a href="<?php the_permalink();?>">
                            <h2><?php the_title();?></h2>
                        </a>
                        <p class="meta">Posted <?php the_date();?> by <?php the_author();?></p>
                        <p><?php the_excerpt();?></p>
                    </article>
                <?php endwhile; ?>
         <!-- End of the main loop -->
        </div>
        <aside class="col-12 col-sm-4">
            <?php get_sidebar();?>
        </aside>
    </div>
        <!-- Add the pagination functions here. -->
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="row pt-5 pb-5">
                <div class="col-6 nav-previous ml-0"><?php previous_posts_link( '<< Newer posts' ); ?></div>
                <div class="col-6 nav-next mr-0 text-right"><?php next_posts_link( 'Older posts >>' ); ?></div>
            </div>
        </div>
    </div>
</main>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer();?>