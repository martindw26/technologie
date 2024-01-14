<?php
/*Template name: Training archive pages*/
?>

<?php
  get_header();

?>  

<div class="container">

        <div class="row">

        <div class="col-lg-8 p-lg-2">

        <?php $PageTitle = get_field( 'pagetitle' );?>
        <h1 class="display-4 font-weight-bold"><?php echo $PageTitle ;?></h1><hr><br>

        <!-- SEO text-->
        <?php if (!empty(get_field('learning_archive_seo_paragraph'))): ?>
        <div class="seo_block_mobile">  
        <div class="bg-secondary text-light p-4 mb-4 border-dark lead">
        <?php $learning_archive_seo_paragraph = get_field('learning_archive_seo_paragraph'); ?>
        <div><?php echo $learning_archive_seo_paragraph; ?></div>
        </div> 
        </div>
        <?php endif; ?>

        <!-- Post Block 1-->
        <?php get_template_part('template-parts/training-block');?>
        <!-- End of Post Block--> 


        </div>	

<div class="sidebar col-lg-4 col-md-4">



<!-- Start of posts sidebar related posts-->
<?php get_template_part( 'template-parts/generic_sidebar' );?>
<!-- End of posts sidebar related posts-->        
</div>

</div>               

</div>


    

<?php get_footer(); ?>