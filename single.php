<?php get_header(); ?>
    <article class="single">
        
        
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ): the_post(); ?>
        <h1 class="workTitle"><?php the_title(); ?></h1>
        
        <div class="workImage">
           <?php if ( wp_is_mobile()) : ?>
               <?php the_post_thumbnail('medium'); ?>
           <?php else :?>
               <?php the_post_thumbnail( array( 600, 600) ); ?>
           <?php endif ; ?>
        </div>
        
        <div class="workBody">
            <?php the_content(); ?>
        </div>
        
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="workLink">
            <?php next_post_link('%link','&laquo; 新しい投稿へ' ); ?>
            <?php previous_post_link('%link','古い投稿へ &raquo;' ); ?>
        </div>
        
    </article>

    <?php require('btn_backtotop.php'); ?>
    
    <?php get_template_part( 'sns' ); ?>

<?php get_footer(); ?>