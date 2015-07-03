<!DOCTYPE html>
    
    <html>
    <head>
        <title>Caleb's Pitch</title>
        
        <?php wp_head(); ?>
        
        <link href='http://fonts.googleapis.com/css?family=Cabin|Ubuntu' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
            
    </head>
    
    <body>
        
   <div id="main-container">     
        
        
         
         <header class="row">
            <div class="large-3 columns">
                <?php dynamic_sidebar('logo-widget'); ?>
            </div>
        
        
             <div class="large-9 columns">
                   <div id="share">
                   <?php echo do_shortcode("[mashshare]"); ?>
                   </div>
                   
                   <div id="search" class="clearfix"><?php get_search_form(); ?>
                    <label class="screen-reader-text" for="s"></label>
                   </div>
                   
                   <div id="sub-menu">
                   <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                   </div>
                   
                    
             </div>
             
         </header>
         
         
             <div class="container">  
                 <div class="row">
                     <div class="large-12 columns large-menu">
                         <?php wp_nav_menu( array( 'theme_location' => 'large-menu', 'container_class' => 'my_large_menu_class' ) );
                   ?>
                     </div>   
                 </div>
             </div>  
         
         
        