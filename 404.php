<?php
/* Template Name: 404 page (Not Found) */


get_header(); ?>


<div class="row">
        <div class="large-12 columns">
            <h1><?php _e('Not Found'); ?></h1>
            <h2>This is somewhat embarrassing, isn't it?</h2>
            <p>It looks like nothing was found at this location. Maybe try a search?</p>
            <h2>Try searching for what you need:</h2>
            <?php get_search_form() ?>
        </div>
        <div class="large-4 columns">
            <?php get_sidebar(); ?>
        </div>
        
        
        
    </div>

<?php  get_footer(); ?>