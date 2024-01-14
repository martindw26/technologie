<?php
  get_header();
 /* Template Name: Multi Review Post repeater*/
 /* Template Post Type: post */
?>  

<div class="container">

        <div class="row">

          <div class="col-lg-8 p-lg-2">

            <h1 class="display-2 font-weight-bold"><?php echo esc_html( get_the_title() );?><hr></h1>

            <p class="card-text" style="color: grey; font-size: small;">
                By <?php the_author_meta('display_name', 1); ?> | Posted <?php echo get_the_date();?>
            </p>

            <?php
              $featured_post_label_text = get_field('featured_post_label_text');
              $featured_post_label_alt_text = get_field('featured_post_label_alt_text');
              $featured_post_label_logo = get_field('featured_post_label_logo');
              $featured_post_label = get_field('featured_post');

              if ($featured_post_label == 'yes') {
              echo '<div class="container-fluid text-sm-start">
              <div class="row row-cols-lg-2 row-cols-sm-2 alert alert-success text-sm-start rounded-0 border-0 p-1 m-1">
              <div class="col fs-5 d-flex align-items-center justify-content-end">' . $featured_post_label_text . '</div>
              <div class="col d-flex align-items-center"><img class="img-fluid" src="' . $featured_post_label_logo . '" alt="'. $featured_post_label_alt_text .'" style="max-height: 100px;"></div>
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

            
              <br><br>    

               <!-- Jump points-->                                  
               <?php get_template_part('includes/section','jump-points');?>
               <!-- End header image block-->

             <!-- header image block-->                                  
             <?php get_template_part('includes/section','header-image block');?>
                                                
             <!-- End header image block-->

             <!-- SEO text-->

             <div class=" bg-secondary text-light p-4 mb-4 border-dark lead">
             <?php the_field('seo_paragraph');?> 
             </div>
       
             <!-- Article content blocks -->
             <?php get_template_part('includes/section','multiproduct3');?>
             <!-- End Article content blocks-->
            
             <!-- Article content disclaimer block -->
             <?php get_template_part('includes/section','post-meta');?>
             <!-- End content disclaimer block-->

             <!-- meta block-->
             <?php get_template_part('includes/section','meta');?>
             <!-- End meta block-->

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


		   <!-- Start of posts related posts-->
	 	   <?php get_template_part( 'template-parts/reviews_sidebar' );?>
		   <!-- End of posts related posts-->      
                        </div>




      </div>               

</div>

    

<?php get_footer(); ?>