<?php 

$series_intro_post = get_field('series_intro_post');
if (!empty($series_intro_post)) {

 
$series_intro_post = get_field('series_intro_post');
$training_block_category = get_field('training_block_category');
$tcondition1 = array(
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => 1,
  'p'              => $series_intro_post,
);

$tblock1 = new WP_Query($tcondition1);

if ($tblock1->have_posts()) : 
  while ($tblock1->have_posts()) : 
    $tblock1->the_post(); 
    ?>
    <div class="col-md">
      <div class="container border-border border-0 p-3 rounded">
        <h4>Series Intro</h4>
        <div class="row">
          <div class="col-md-6 col-sm bg-white text-dark">
            <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
            <img class="img-fluid p-1 rounded-1" src="<?php echo $url ?>"/>
          </div>
          <div class="col-md-6 col-sm bg-white text-dark p-2">
            <h5 class="card-title"><?php echo get_the_title();?></h5>
            <p class="p-1 text-dark">&ldquo;<?php echo excerpt(15);?>&rdquo;</p>
            <p class="card-text"><small class="text-dark"><?php echo get_the_date();?></small></p>
            <a href="<?php the_permalink() ?>" class="btn btn-sm btn-dark text-white m-0">Learn now</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr>
    <br>
  <?php 
  endwhile;  
else : 
  echo '<p>No content found</p>';
endif; 
wp_reset_postdata();
wp_reset_query();
}
?>

<?php 
$post_exclusion = get_field( 'post_exclusion' );
$training_block_category = get_field( 'training_block_category' );
$tcondition2 = array(
    'post_type'         => 'post',
    'post_status'       => 'publish',
    'order'             => 'ASC',
    'orderby'           => 'title',
    'cat'               =>  $training_block_category,
    'posts_per_page'    => -1,
    'post__not_in'      => array($post_exclusion),
);

$tblock2 = new WP_Query($tcondition2);

if ($tblock2->have_posts()) : 
  while ($tblock2->have_posts()) : 
    $tblock2->the_post(); 
    ?>
    <div class="col-md">
      <div class="container border-border border-0 p-3 rounded">
        <div class="row">
          <div class="col-md-6 col-sm bg-white text-dark">
            <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
            <img class="img-fluid p-1 rounded-1" src="<?php echo $url ?>"/>
          </div>
          <div class="col-md-6 col-sm bg-white text-dark p-2">
            <h5 class="card-title"><?php echo get_the_title();?></h5>
            <p class="p-1 text-dark">&ldquo;<?php echo excerpt(15);?>&rdquo;</p>
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
            <a href="<?php the_permalink() ?>" class="btn btn-sm btn-dark text-white m-0">Learn now</a>
          </div>
        </div>
      </div>
    </div>
  <?php 
  endwhile;  
else : 
  echo '<p>No content found</p>';
endif; 
wp_reset_postdata();
wp_reset_query();
?>
