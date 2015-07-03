<?php wp_footer(); ?>    
    
    
    <div class="footer-wrapper clearfix">
        <div class="container">
            <div class="row">
                <div class="large-12 columns clearfix">
                   <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );
                    ?>
            
                    <div class="copyright">
                        <p>&copy; 2015 Caleb's Pitch All rights reserved.</p>
                    </div>    
              
                    <div class="socialmedia-widget">
                        <?php dynamic_sidebar('socialmedia-widget'); ?>
                    </div>
                    
                </div>
            </div>
        </div>   
    </div>
    
 </div>   
    
    </body>
</html>