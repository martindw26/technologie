<div class="container">
	<?php $Block3Title = get_field ( 'block_title' );?>
	<h2 class=" post_block_title text-dark"> <i><?php echo $Block3Title;?></i></h2>
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


<?php // Right small block posts projects loop begins here
$large_post_category = get_field ( 'large_post_category' );
$large_post_featured_post = get_field ( 'large_post_featured_post' );
$block_posts_left = get_field ( 'block_posts_left' );

if(isset($large_post_featured_post)){
    $condition = array(
        "post_type"           	=> "post",
        "post_status"         	=> "publish",
        "posts_per_page"      	=> 1,
        'p'                   	=> $large_post_featured_post,
        'tag__not_in' 			=> array( 62 )
    );
}else{
    $condition = array(
        "post_type"           	=> "post",
        "post_status"         	=> "publish",
        "posts_per_page"      	=> 1,
        'cat' 					=> $large_post_category,
        'tag__not_in' 			=> array( 62 )
    );
}

$block1 = new WP_Query ($condition);
if ($block1->have_posts()) :
while ($block1->have_posts()) : $block1->the_post();
?>

<div class="card rounded rounded-0 border border-0 shadow-sm p-3 mb-2 bg-body rounded" style="min-height:600px; max-height:670px;"><!-- non-fetured block-->
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-1 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h4 class="card-title fw-bold"><?php echo get_the_title();?></h4>
		<div class="card-text text-muted small">
							Article by: <i><?php echo get_the_author();?></i>,  Posted: <i><?php echo get_the_date();?></i><?php if($read_time):?> | <?php echo $read_time ?><?php endif ?></i>
						</div><br>
						<p class="mb-3">&#34;<?php echo excerpt(25);?>&#34;</p>
    <a href="<?php the_permalink() ?>" class="btn btn-dark text-white">Read More</a>
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
		<?php // Left block posts projects loop begins here
        $small_posts_category = get_field ( 'small_posts_category' );
		$blockOffset = get_field ( 'block_right_offset' );
        $block_post_right_exclude = get_field ( 'block_post_right_exclude' );
		$block_orderby = get_field ( 'orderby' );
		$condition2 = array(
								'post_type'         => 'post',
								"post_status"       => "publish",
								"order"  			=> $block_orderby,
								"offset" 			=> $blockOffset,
								"posts_per_page" 	=> 3,
								'post__not_in' 		=> array($block_post_right_exclude),
								'tax_query'         => array(
									array(
									'taxonomy' => 'category',
									'field'    => 'term_id', 
									'terms'    => $small_posts_category
									)
								)
								);  
								$block2 = new WP_Query ($condition2);
								if ($block2->have_posts()) :
								while ($block2->have_posts()) : $block2->the_post();?>
<div class="non_featured_block_home_page">


<div class="container shadow-sm p-3 mb-2 bg-body rounded" style="height:195px;"><!-- small non-fetured block-->

<div class="row">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
  <div class="col"><img class="img-fluid featured rounded rounded-1" src="<?php echo $url ?>" style="height:150px";>
</div>
    <div class="col-6">
    <h4 class="card-title fw-bold"><?php echo get_the_title();?></h4>
	<p class="card-text text-muted">Article by: <?php echo get_the_author();?></i>,   Posted: <i><?php echo get_the_date();?></i><?php if($read_time):?> | Read time: <?php echo $read_time ?><?php endif ?></p>
	<a href="<?php the_permalink() ?>" class="btn btn-sm btn-dark text-white m-0">Read More</a></div>

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
		<?php // Left block posts projects loop begins here
         $small_posts_category = get_field ( 'small_posts_category' );
		 $blockOffset = get_field ( 'block_2_right_offset' );
		 $block_orderby = get_field ( 'orderby' );
		 $condition2 = array(
										'post_type'         => 'post',
										"post_status"       => "publish",
										"order"  			=> $block_orderby,
										"offset" 			=> $blockOffset,
										"posts_per_page" 	=> 3,
										'post__not_in' 		=> array($block_post_right_exclude),
										'tax_query'         => array(
											array(
											'taxonomy' => 'category',
											'field'    => 'term_id', 
											'terms'    => $small_posts_category
											)
										)
										);  
                                          $block2 = new WP_Query ($condition2);
                                          if ($block2->have_posts()) :
                                          while ($block2->have_posts()) : $block2->the_post();?>
<div class="non_featured_block_home_page_mobile">
<div class="card rounded rounded-0 border border-0">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-0 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h5 class="card-title"><?php echo get_the_title();?></h5>
		<div class="card-text text-muted small">
							Article by: <i><?php echo get_the_author();?></i>,  Posted: <i><?php echo get_the_date();?></i><?php if($read_time):?> | <?php echo $read_time ?><?php endif ?></i>
						</div><br>

    <a href="<?php the_permalink() ?>" class="btn btn-dark text-white">Read More</a>
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
<?php $Block3MoreURL = get_field( 'block_3_more_url' );?>
<a href="<?php echo $Block3MoreURL;?>" class="btn btn-white text-black border border-2 border-dark pb-sm-2 fs-5 text">More <?php echo $Block3Title;?></a>
</div>