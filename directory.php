<?php
/*
Template Name: Directory Post
Template Post Type: page
*/

get_header();
?>

<div class="container">

    <div class="row">

        <div class="col-lg-8 p-lg-2 bg-white text-dark p-1">

            <h1 class="display-2 font-weight-bold"><?php echo esc_html(get_the_title()); ?></h1>

            
            <p class="card-text" style="color: grey; font-size: small;">
                By <?php the_author_meta('display_name', 1); ?> | Posted <?php echo get_the_date();?>
            </p>

            <!-- Social share icons-->
            <?php $enable_in_article = get_field('on_article', 'option'); ?>
            <?php if ($enable_in_article) : ?>
                <?php get_template_part('includes/section', 'social_sharefrontpagearticle'); ?>
            <?php else : ?>
                <?php echo '<style>{ display:none;}</style>'; ?>
            <?php endif; ?>
            <!-- End Social share icons-->

            <!-- header image block-->
            <?php get_template_part('includes/section', 'header-image block'); ?>
            <!-- End header image block-->

	    <?php
		$seo_paragraph = get_field('seo_paragraph');

		if (!empty($seo_paragraph)):
	    ?>
		<div class="bg-secondary text-light p-4 mb-4 border-dark lead">
		    <?php echo $seo_paragraph; ?>
		</div>
	        <?php endif; ?>


            <!-- featured directory content blocks -->
            <?php get_template_part('includes/section', 'directory'); ?>
            <!-- End directory content blocks-->

            <!-- meta block-->
            <?php get_template_part('includes/section', 'meta'); ?>
            <!-- End meta block-->

            <!-- Social share icons-->
            <?php $enable_in_article = get_field('on_article', 'option'); ?>
            <?php if ($enable_in_article) : ?>
                <?php get_template_part('includes/section', 'social_sharefrontpagearticle'); ?>
            <?php else : ?>
                <?php echo '<style>{ display:none;}</style>'; ?>
            <?php endif; ?>
  
            <!-- End Social share icons-->
        </div>

        <div class="sidebar col-lg-4 col">


            <!-- Start of posts sidebar related posts-->
            <?php get_template_part('template-parts/projects_sidebar'); ?>
            <!-- End of posts sidebar related posts-->
        </div>
    </div>
</div>

<?php get_footer(); ?>
