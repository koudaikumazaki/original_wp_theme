<?php get_header(); ?>
    <article class="singleWork">
        
        <div class="workImage">
            <?php if ( wp_is_mobile()) : ?>
               <?php the_post_thumbnail('medium'); ?>
            <?php else :?>
               <?php the_post_thumbnail( array( 600, 600) ); ?>
            <?php endif ; ?>
        </div>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ): the_post(); ?>
        <h1 class="workTitle"><?php the_title(); ?></h1>
        <div class="workBody">
            <?php the_content(); ?>
        </div>
        
        <?php endwhile; ?>
        <?php endif; ?>
        <?php get_template_part('page_link'); ?>
        
    </article>

    <?php require('btn_backtotop.php'); ?>
    
    <?php get_template_part( 'sns' ); ?>

<?php get_footer(); ?>