<?php /*
Template Name: Syringe Art Page
*/
?>

<?php  get_header(); ?>

  <div class="row page-title">
                <div class="large-12 columns">
                  
                    <?php if (have_posts()):
                        while (have_posts()): the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();
                    endwhile;
                      endif; ?> 
                </div>
  </div>

<div class="syringe-wrapper">
    <div class="container">
	<div class="row">
	      <div class="large-12 columns">
	      </div>
	</div>
    </div>
</div>	 


 <?php  get_footer(); ?> 