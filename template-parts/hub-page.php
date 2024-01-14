<?php
/*Template name: Training archive hub*/
?>
<?php
get_header();
?>  

<div class="container">
<div class="row">
  <div class="col-lg-8 p-lg-2">
  <?php if (have_rows('training_hub_block')): ?>
<?php $training_hub_page_title = get_field ( 'training_hub_page_title' );?>
<h1 class="display-2 font-weight-bold"><?php echo $training_hub_page_title; ?><hr></h1>

<!-- SEO text-->
<div class=" bg-secondary text-light p-4 mb-4 border-dark lead">
<?php $training_hub_page_seo = get_field ( 'training_hub_page_seo' );?>
<div><?php echo $training_hub_page_seo; ?></div> 
</div>       

<?php while (have_rows('training_hub_block')): the_row(); ?>
  <div class="col-md">
  <div class="container mt-3 border-border border-0 shadow-sm p-3 mb-5 bg-body rounded">
      <div class="row"><!-- block left-->
          <div class="col-md-6 col-sm bg-white text-dark">
            <?php $trainingCat  = get_sub_field ( 'training_block_cat' ); ?>
            <?php $title = get_sub_field ( 'training_block_title' ); ?>
            <?php $summary = get_sub_field ( 'training_block_summary' ); ?>
            <?php $link = get_sub_field ( 'training_block_link' ); ?>
            <img src="<?php the_sub_field ('training_block_image');?>" class="img-fluid bg-dark border-0"/>
            </div><!-- End block right-->
            <div class="col-md-6 col-sm bg-white text-dark p-2"><!-- block right-->
            <h5 class="card-title"><?php echo $title;?></h5>
            <p class="p-1 text-dark">&ldquo;<?php echo $summary;?>&rdquo;</p>
            <a href="<?php echo $link; ?>" class="btn btn-sm btn-dark text-white m-0">Start Learning <?php echo $trainingCat;?> Now</a>
          </div><!-- End block right-->
          <br>
          </div>
      </div>
      </div>	
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata();?>
      </div>
      <div class="sidebar col-lg-4 col-md-4">
      <!-- Category sidebar search-->
      <?php get_template_part('includes/section','search');?>
      <!-- End Category sidebar search-->
      <!-- Start of posts sidebar related posts-->
      <?php get_template_part( 'template-parts/generic_sidebar' );?>
      <!-- End of posts sidebar related posts-->        
      </div>
    </div>
</div>


    

<?php get_footer(); ?>