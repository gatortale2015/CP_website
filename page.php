<?php  get_header(); ?>


<div class="row">
        <div class="large-8 columns">
            
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content();
            endwhile;
              endif; ?> 
        </div>
        
        <div class="large-4 columns">
                <?php get_sidebar(); ?>
        
        </div>
    </div>



<?php  get_footer(); ?>