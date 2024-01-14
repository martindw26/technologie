<?php
  get_header();
 /* Template Name: Review Post*/
 /* Template Post Type: post */
?>  

<div class="container p-1">
  
  <div class="row">
	


          <div class="col-lg-8 p-lg-2 bg-white text-dark">

       

            <h1 class=" display-2 font-weight-bold text-dark" style=""><?php echo esc_html( get_the_title() );?><hr></h1>
            
            <p class="card-text" style="color: grey; font-size: small;">
                By <?php the_author_meta('display_name', 1); ?> | Posted <?php echo get_the_date();?>
            </p>

            <?php
              $featured_post_label_text = get_field('featured_post_label_text');
              $featured_post_label_alt_text = get_field('featured_post_label_alt_text');
              $featured_post_label_logo = get_field('featured_post_label_logo');
              $featured_post_label = get_field('featured_post');
              $featured_post_URL = get_field('featured_post_url');

              if ($featured_post_label == 'yes') {
              echo '<div class="container-fluid rounded rounded-0 border border-0 alert alert-success" style="">
              <div class="row">
              <div class="col alert alert-success text-black rounded rounded-0 border border-0 fs-5 d-flex align-items-center justify-content-center">' . $featured_post_label_text . '</div>
              </div>
              <div class="row">
              <div class="col alert alert-success text-white rounded rounded-0 border border-0 d-flex align-items-center justify-content-center">
              <a href="' . $featured_post_URL . '" target="_blank">
              <img class="img-fluid" src="' . $featured_post_label_logo . '" alt="' . $featured_post_label_alt_text . '"> 
              </a>
              </div>
              </div>
              </div>';
              }
              ?>
              
				<!-- Social share icons-->
				<?php $enable_in_article = get_field('on_article','option');?>
				<?php if($enable_in_article):?>
					<?php get_template_part('includes/section','social_sharefrontpagearticle');?>
				<?php else:?>
					<?php echo '<style>{ display:none;}</style>';?>
				<?php endif;?>
				<!-- End Social share icons-->

        

               <?php get_template_part('includes/section','reviewrating');?><br><br>


             <!-- header image block-->
                                                
             <?php get_template_part('includes/section','header-image block');?>
                                                
             <!-- End header image block-->

             <!-- Article content blocks -->
             <?php get_template_part('includes/section','reviewprojectpostcontentblocks');?>
             <!-- End Article content blocks-->

             <!-- Article content disclaimer block -->
             <?php get_template_part('includes/section','post-meta');?>
             <!-- End content disclaimer block-->

            <!-- Article content disclaimer block -->
            <?php get_template_part('includes/section','disclaimer');?>
            <!-- End content disclaimer block-->

              <!-- meta block-->
             <?php get_template_part('includes/section','meta');?>
             <!-- End meta block-->

             <!-- Social share icons-->
             <?php $enable_in_article = get_field('on_article','option');?>
             <?php if($enable_in_article):?>
             <?php get_template_part('includes/section','social_sharefrontpagearticle');?>
             <?php else:?>
             <?php echo '<style>{ display:none;}</style>';?>
             <?php endif;?>
              <hr>
             <!-- End Social share icons-->

              	
            <?php
            // Get the value of the custom field 'post_id' for the current post
            $post_id = get_field('post_id');

            // Check if the 'post_id' has data (i.e., it is not empty or null)
            if ($post_id) {
            // If there is data, include the template file to display related posts
            // Assuming the template file is 'related_new.php' located in the 'template-parts' directory
            get_template_part('template-parts/related_new');
            }
            ?>


          </div>

                        <div class="sidebar col-lg-4 col-md-4">



		   <!-- Start of posts sidebar related posts-->
	 	   <?php get_template_part( 'template-parts/reviews_sidebar' );?>
		   <!-- End of posts sidebar related posts-->                         
	     </div>




      </div>               

</div>






<?php get_footer(); ?>
