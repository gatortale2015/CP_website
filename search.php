<?php

/* Template Name: Search Page */


get_header(); ?>


<div class="row">
        <div class="large-8 columns">
            <?php if(have_posts()) :?>
                <h1>
                <?php printf(__('Search Results for: %s'), '<span>'.
                 get_search_query().'</span>' ); ?>
                </h1>
                
            
            
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content();
            endwhile;
              endif; ?> 
        <?php else : ?>
        <h1><?php _e('Nothing Found'); ?></h1>
        <p><?php _e('Sorry, but nothing matched your search criteria. Please try again with a different search term.'); ?></p>
        <?php endif; ?>
        
        </div>
        <div class="large-4 columns">
        </div>
    </div>

<?php  get_footer(); ?>