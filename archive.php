<?php get_header(); ?>
    <article>
        <div class="cover">
           <h1><?php
                  $postType = get_post_type();
                  $title = ($postType === 'work')? "WORK":"BLOG";
                  echo $title;
                ?></h1>
         </div>
         
         <?php if ( have_posts() ) :?>
         
         <section class="archive">
                 <?php while ( have_posts() ) : the_post();?>
                     <div class="archiveBox">
                        <a href="<?php the_permalink(); ?>">
                            <div class="boxShadow">
                                <?php the_post_thumbnail('medium');?>
                            </div>
                           <p><?php the_title();?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
                
                
                
                
         </section>
         <?php endif; ?>
           
         <div class="pageLink">
            <?php the_posts_pagination(); ?>
         </div>
        
    </article>

    <?php require('btn_backtotop.php'); ?>

<?php get_footer(); ?>