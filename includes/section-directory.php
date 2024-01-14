<div class="container mt-4">
  <div class="row">

  <?php 
  $directory_featured_heading = get_field('directory_featured_heading', 'option');
  if ($directory_featured_heading):
  ?>
  <h2><?php echo $directory_featured_heading; ?></h2>
  <?php endif; ?>

    <?php if (have_rows('products')) : ?>
      <?php while (have_rows('products')) : the_row(); ?>
        <?php
        $retailer = get_sub_field('dir_retailer');
        $item_image = get_sub_field('dir_image');
        $item_name = get_sub_field('dir_product');
        $item_description = get_sub_field('dir_description');
	      $product_title = get_field( 'product_title');
        ?>

        <!-- Item in the directory -->
      <div class="col-md-4 mb-4">
      <div class="card rounded-rounded-0" style="height: 300px;">
      <div style="height: 120px; width: 100%; overflow: hidden;">
      <img src="<?php echo esc_url($item_image); ?>" class="card-img-top" alt="<?php echo esc_attr($item_name); ?>" style="height: 100%; width: 100%; object-fit: contain; object-position: center;">
      </div>


      <div class="card-body">
      <h5 class="card-title"><?php echo esc_html($item_name); ?></h5>
      <!-- catarrayrated -->
      <?php
      // Get the rating value from the ACF field
      $rating = get_sub_field('product_rating');

      // Define the star symbols
      $star_full = '&#9733;';
      $star_empty = '&#9734;';

      // Display the star rating
      if ($rating) {
      for ($i = 1; $i <= 5; $i++) {
      echo ($i <= $rating) ? $star_full : $star_empty;
      }
      }
      ?>

				<!-- End catarrayrated -->
              <p class="card-text"><?php echo esc_html($item_description); ?></p>
              <a href="<?php the_sub_field('dir_buy_now'); ?>" class="btn btn-success float-end mt-2" target="_blank">Get yours now</a>

            </div>
          </div>
        </div>

      <?php endwhile; ?>
    <?php else : ?>
      <p>No products found.</p>
    <?php endif; ?>

  </div>
</div>

<?php 
  $directory_featured_heading = get_field('directory_basic_heading', 'option');
  if ($directory_featured_heading):
  ?>
  <h2><?php echo $directory_featured_heading; ?></h2>
  <?php endif; ?>

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="table-primary">
        <tr>
          <th>Make</th>
          <th>Model</th>
          <th>Retailer</th>
          <th>Price</th>
          <th>Rating</th>
        </tr>
      </thead>
      <tbody>
        <?php if (have_rows('listings')) :
          while (have_rows('listings')) : the_row();
            $Make = get_sub_field('make');
            $Model = get_sub_field('model');
            $Retailer = get_sub_field('retailer');
            $Price = get_sub_field('price');
            $URL = get_sub_field('price_url');
            $Rating = get_sub_field('rating');
        ?>
            <tr>
              <td><?php echo $Make; ?></td>
              <td><?php echo $Model; ?></td>
              <td><?php echo $Retailer; ?></td>
              <td><a href='<?php echo $URL; ?>' target="_blank"><?php echo $Price; ?></a></td>
              <td>
                <?php
                $star_full = '&#9733;';
                $star_empty = '&#9734;';
                
                // Display the star rating
                if ($Rating) {
                  for ($i = 1; $i <= 5; $i++) {
                    echo ($i <= $Rating) ? $star_full : $star_empty;
                  }
                }
                ?>
              </td>
            </tr>
        <?php
          endwhile;
        else :
          // Do something if no rows exist.
        endif;
        ?>
      </tbody>
    </table>
</div>




<div class="pb-2">
<?php
$product = get_field( 'product');
?>
<h5>Related Articles for <i><?php echo $product; ?></i></h5>
</div>

<div class="container mt-4">
<?php
// Get the post object field value
$related_posts = get_field('director_related_posts');

// Check if there are related posts
if ($related_posts) {
    // Output a list of related posts
    echo '<ul class="list-unstyled">';
    foreach ($related_posts as $post) {
        setup_postdata($post);
        ?>
   <div class="container p-2 bg-dark text-white">
  			<div class="row">
	    		<div class="col-lg-9"><h5><a class="text-decoration-none link-dark text-white" href='<?php echo get_permalink();?>'/></><?php the_title(); ?></a></h5></div>
	    		<div class="col-lg-4"><?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <img class="img-fluid rounded pb-xs-4" src="<?php echo $url ?>" /></div>
	    		<div class="col-lg-6 mb-3 mt-4 mt-md-0"><p class="text-white">&ldquo;<?php echo excerpt(100);?>&rdquo;</p><br><a class="text-white text-decoration-none align-content-end" href="<?php the_permalink() ?>">Read more →</a></div>
  			</div>
		</div><br>

        <?php
    }
    echo '</ul>';

    // Reset the post data to avoid conflicts with the main query
    wp_reset_postdata();
}
?>
</div>





