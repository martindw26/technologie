<?php
/*Template name: Home-Page*/
?>

<?php get_header();?>

<?php if( have_rows('non_featured_reviews') ):
    while ( have_rows('non_featured_reviews') ) : the_row();
        get_template_part('includes/section','home-page-block');
        echo '<hr class="container">';
    endwhile;
endif; ?>




<?php get_footer();?>