<div class="">
<h3 class="post_block_title text-dark d-flex justify-content-center">You may also like </h3><hr>
<div class="">
<!-- Top MPU adslot-->
<?php get_template_part( 'template-parts/ads_body/top_mpu_ad' );?>
<!-- End Top MPU adslot -->
<?php if (have_posts()) : while (have_posts()) : the_post();
the_content();
endwhile;
else :
echo '<p>No content found</p>';
endif; ?>
<?php // Block1 posts projects loop begins here
$sidebarCatGeneric = get_field('sidebarCatGeneric', 'option');
$generic_posts_per_page = get_field('generic_posts_per_page', 'option');
$generic_order_by = get_field('generic_order_by', 'option');

$condition = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => $generic_posts_per_page,
    'orderby'        => $generic_order_by,
    'offset'         => 0,
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'term_id',
            'terms'    => is_array($sidebarCatGeneric) ? $sidebarCatGeneric : array($sidebarCatGeneric),
        )
    )
);







$block1 = new WP_Query ($condition);
if ($block1->have_posts()) :
while ($block1->have_posts()) : $block1->the_post();?>
<!-- Blog post-->
<div class="col">
 <div class="card rounded rounded-0 border border-1 p-2">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-0 featured p-2" src="<?php echo $url ?>" alt="Card image cap" style="">  <div class="card-body">
    <h6 class="card-title fw-bold"><?php echo get_the_title();?></h6>

	<div>
<?php
$featured_post_label_text = get_field('featured_post_label_text');
$featured_post_label_alt_text = get_field('featured_post_label_alt_text');
$featured_post_label_logo = get_field('featured_post_label_logo');
$featured_post_label = get_field('featured_post');

if ($featured_post_label == 'yes') {
    echo '
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-sm alert alert-success rounded-0 border-0">
                <span class="fs-5">' . $featured_post_label_text . '</span>
            </div>
            <div class="col-sm alert alert-success rounded-0 border-0 d-flex align-items-center">
                <img class="img-fluid" src="' . $featured_post_label_logo . '" alt="' . $featured_post_label_alt_text . '" style="max-height: 50px;">
            </div>
        </div>
    </div>';
}
?>
</div>


				<p class="mb-4">	
				<!-- catarrayrated -->
				<?php 
				$catarrayrated = get_the_category( $post->ID );
				foreach ($catarrayrated as $catarrayrated) {
				$catarrayrated = $catarrayrated->term_id;
				if ($catarrayrated == 2) {
				get_template_part('includes/section','reviewratingshort');
				}elseif ($catarrayrated == 3){
				get_template_part('includes/section','difficultyratingshort');
				}
				}
				?>
				<!-- End catarrayrated -->
				</p>
<p class="mb-3">&#34;<?php echo excerpt(25);?>&#34;
				</p>

		<div class="card-text text-muted small">
		Article by: <i><?php echo get_the_author();?></i>,  Posted: <i><?php echo get_the_date();?></i><?php if($read_time):?> | <?php echo $read_time ?><?php endif ?></i>
		</div><br>
    <a href="<?php the_permalink() ?>" class="btn btn-dark text-white">Read More</a>
  </div>
</div>
</div><br>
<?php endwhile;  else :  endif; wp_reset_postdata();?>


</div>
</div>
<!-- Bottom MPU adslot-->
<?php get_template_part( 'template-parts/ads_body/bottom_mpu_ad' );?>
<!-- End Bottom MPU adslot -->



 
