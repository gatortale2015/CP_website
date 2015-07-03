 <?php  get_header(); ?>
 
    <div class="row">
        <div class="large-12 columns mission">
            <div class="container">
                <h2>Our Mission</h2>
                <p>To honor Caleb Jacobbe's memory through the creation of memorable Syringe Art experiences for children and families confronting serious childhood illnesses.</p>
            </div>
        </div>
    </div>
    
    
    
    <div class="main-wrapper">
            <div class="container">
                <div class="row">
                
                    <div class="large-4 columns">
                        <?php dynamic_sidebar('first-widget'); ?>
                    </div>
                        
                    <div class="large-4 columns">
                        <?php dynamic_sidebar('second-widget'); ?>
                    </div>
                        
                    <div class="large-4 columns">
                        <?php dynamic_sidebar('third-widget'); ?>
                   </div>
                </div>   
            </div>
        </div>
    
    
    
    
     <div class="feature-wrapper">
        <div class="container">
            <div class="row">
                <div class="large-8 columns feature">
                    <?php dynamic_sidebar('feature-widget'); ?>
                </div>
                <div class="large-4 columns feature-image">
                    <?php dynamic_sidebar('featureimage-widget'); ?>
                    
                </div>
            </div>
        </div>
    </div>
    
<?php  get_footer(); ?>