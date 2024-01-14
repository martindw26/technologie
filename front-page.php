<?php
/*Template name: Front-Page*/
?>

<?php get_header();?>


 <!-- Desktop Header adslot-->

<?php get_template_part( 'template-parts/landing_page_ads/homepage_header_top_slot_ad' );?><br>
<!-- End Featured Post-->


<?php if( have_rows('home_page_blocks') ):
    while ( have_rows('home_page_blocks') ) : the_row();
        get_template_part('includes/section','home-page-block');   
    endwhile;
endif; ?>

<br>
<!-- Header bottom adslot-->
<?php get_template_part( 'template-parts/landing_page_ads/homepage_header_bottom_slot_ad' );?>
<!-- End Header bottom adslot-->



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>