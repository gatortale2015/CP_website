<?php

function foundation_css() {
    wp_enqueue_style(
        'foundation',
        get_template_directory_uri().'/css/foundation.css'
    );
}

add_action('wp_enqueue_scripts', 'foundation_css');

function normalize_css() {
    wp_enqueue_style(
        'normalize',
        get_template_directory_uri().'/css/normalize.css'
    );
}
add_action('wp_enqueue_scripts', 'normalize_css');


/*------------Enable Widgets ---------------------*/

function slicks_widgets_init() {
    register_sidebar( array(
      'name' => ('First Widget'),
      'id' => 'first-widget',
      'description' => 'HP first widget',
      'before_widget' => '',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_widget' => '</h2>'
    ));
    
    
    register_sidebar( array(
      'name' => ('Second Widget'),
      'id' => 'second-widget',
      'description' => 'HP second widget',
      'before_widget' => '',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_widget' => '</h2>'
    ));
    
    register_sidebar( array(
      'name' => ('Third Widget'),
      'id' => 'third-widget',
      'description' => 'HP third widget',
      'before_widget' => '',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_widget' => '</h2>'
    ));
    
    register_sidebar( array(
      'name' => ('Logo Widget'),
      'id' => 'logo-widget',
      'description' => 'Contains logo',
      'before_widget' => '',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_widget' => '</h2>'
    ));
       
    register_sidebar( array(
      'name' => ('Search Widget'),
      'id' => 'search-widget',
      'description' => 'Contact information',
      'before_widget' => '',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_widget' => '</h2>'
    ));
   
     register_sidebar( array(
      'name' => ('Feature Image Widget'),
      'id' => 'featureimage-widget',
      'description' => 'Contact information',
      'before_widget' => '',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_widget' => '</h2>'
    ));
   
     register_sidebar( array(
      'name' => ('Feature Widget'),
      'id' => 'feature-widget',
      'description' => 'Contact information',
      'before_widget' => '',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_widget' => '</h2>'
    ));
   
     register_sidebar( array(
      'name' => ('Social Media Widget'),
      'id' => 'socialmedia-widget',
      'description' => 'Contact information',
      'before_widget' => '',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_widget' => '</h2>'
    ));
   
              
}
add_action('widgets_init', 'slicks_widgets_init');



/*------------ Enable Menu ---------------------*/
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'large-menu' => __( 'Large Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );