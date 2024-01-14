<div class="container mobile_padding">
	<?php $BlockTitle = get_sub_field ( 'block_title' );?>
	<h2 class="post_block_title text-dark display-5 fw-bold"> <i><?php echo $BlockTitle;?></i></h2>
</div>
<div class="container pt-lg-4 pb-lg-4">
	<div class="row">
	<div class="col-lg-6">



<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>

<?php // Right large block posts projects loop begins here
$large_post_featured_post = get_sub_field ( 'large_post_featured_post' );
$post_button_text = get_sub_field('post_button_text');
$block_posts_left = get_sub_field ( 'block_posts_left' );
$tags_exclude = get_sub_field ( 'tags_exclude' );

    $condition = array(
        "post_type"           	=> "post",
        "post_status"         	=> "publish",
        "posts_per_page"      	=> 1,
        'p'                   	=> $large_post_featured_post,
        'tag__not_in' 			=> array( $tags_exclude )
    );

$block = new WP_Query ($condition);
if ($block->have_posts()) :
while ($block->have_posts()) : $block->the_post();
?>

<div class="right-card card rounded rounded-0 p-lg-3 mb-2 bg-body"><!-- non-fetured block-->
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-0 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h4 class="card-title fw-bold"><?php echo get_the_title();?></h4>
				<!-- catarrayrated -->
				<?php 
				$catarrayrated = get_the_category( $post->ID );
				foreach ($catarrayrated as $catarrayrated) {
				$catarrayrated = $catarrayrated->term_id;
				if ($catarrayrated == 2) {
				get_template_part('includes/section','reviewratingshort');
				}elseif ($catarrayrated == 3 || $catarrayrated == 84){
				get_template_part('includes/section','difficultyratingshort');
				}
				}
				?>
				<!-- End catarrayrated -->
						<p class="mb-3">&#34;<?php echo excerpt(35);?>&#34;</p>
										<a href="<?php the_permalink() ?>"><button type="button" class="btn btn-outline-dark"><?php echo $post_button_text;?></button></a>
  </div>
</div>
</div>


<?php endwhile;  else :  endif; wp_reset_postdata();?>

<div class="col-lg-6">

<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Left small block posts projects loop begins here
      
		$small_posts_category = get_sub_field('small_posts_category');
		$post_button_text = get_sub_field('post_button_text');
		$block_offset = get_sub_field('block_right_offset');
		$block_post_exclusion = get_sub_field('block_post_right_exclude');
		$block_orderby = get_sub_field('orderby');
		$block_orderby_asc_desc = get_sub_field('block_order_asc_desc');
		
		$condition = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'order' => $block_orderby_asc_desc,
			'orderby' => $block_orderby,
			'offset' => $block_offset,
			'posts_per_page' => 3,
			'post__not_in' => array($block_post_exclusion),
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'term_id',
					'terms' => $small_posts_category
				)
			)
		);
	  
	
                                $block = new WP_Query ($condition);
                                if ($block->have_posts()) :
                                while ($block->have_posts()) : $block->the_post();
                                ?>
<div class="non_featured_block_home_page">


<div class="left-card card container p-3 mb-2 bg-body rounded rounded-0" style="height:195px;"><!-- small non-fetured block-->

<div class="row">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
  <div class="col"><img class="img-fluid featured rounded rounded-0" src="<?php echo $url ?>" style="height:150px";>
</div>
    <div class="col-6">
    <h4 class="card-title fw-bold"><?php echo get_the_title();?></h4>
	<h5 class="mb-4" style="height:25px";>	
				<!-- catarrayrated -->
				<?php 
				$catarrayrated = get_the_category( $post->ID );
				foreach ($catarrayrated as $catarrayrated) {
				$catarrayrated = $catarrayrated->term_id;
				if ($catarrayrated == 2) {
				get_template_part('includes/section','reviewratingshort');
                }elseif ($catarrayrated == 3 || $catarrayrated == 84){
				get_template_part('includes/section','difficultyratingshort');
				}
				}
				?>
				<!-- End catarrayrated -->
				</h5>
				<a href="<?php the_permalink() ?>"><button type="button" class="btn btn-outline-dark"><?php echo $post_button_text;?></button></a>
  </div>
</div>
</div>
		<?php endwhile;  else :  endif; wp_reset_postdata();wp_reset_query();?>
				</div>



<div class="col-lg-6">

<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Left small mobile block posts projects loop begins here
        $small_posts_category = get_sub_field('small_posts_category');
		$post_button_text = get_sub_field('post_button_text');
		$block_offset = get_sub_field('block_right_offset');
		$block_post_exclusion = get_sub_field('block_post_right_exclude');
		$block_orderby = get_sub_field('orderby');
		$block_orderby_asc_desc = get_sub_field('block_order_asc_desc');
		
		$condition = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'order' => $block_orderby_asc_desc,
			'orderby' => $block_orderby,
			'offset' => $block_offset,
			'posts_per_page' => 3,
			'post__not_in' => array($block_post_exclusion),
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'term_id',
					'terms' => $small_posts_category
				)
			)
		);

						 $block = new WP_Query ($condition);
						 if ($block->have_posts()) :
						 while ($block->have_posts()) : $block->the_post();
						 ?>
<div class="non_featured_block_home_page_mobile pb-2">
<div class="left-card card rounded rounded-0">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-0 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h5 class="card-title"><?php echo get_the_title();?></h5>
		<div class="card-text text-muted small">
							Article by: <i><?php echo get_the_author();?></i>,  Posted: <i><?php echo get_the_date();?></i><?php if($read_time):?> | <?php echo $read_time ?><?php endif ?></i>
						</div><br>

				<a href="<?php the_permalink() ?>"><button type="button" class="btn btn-outline-dark"><?php echo $post_button_text;?></button></a>
  </div>
</div>
</div>
		<?php endwhile;  else :  endif; wp_reset_postdata();?>
				
				</div>
				</div>
			</div>
		</div>
	</div>
</div><hr class="d-sm-block d-md-none">
<div class="d-flex justify-content-center">
<?php
$BlockMoreURL = get_sub_field('block_more_url');
$more_button_block_text = get_sub_field('more_button_block_text');
?>
<a href="<?php echo $BlockMoreURL; ?>">
    <button type="button" class="btn btn-outline-dark"><?php echo $more_button_block_text; ?></button>
</a>
</div>




