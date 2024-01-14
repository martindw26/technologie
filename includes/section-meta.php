<div class="container-fluid ps-2 pe-2">
    <div class="row">
        <div class="card mb-3 rounded-0">
            <div class="row g-0">
                <div class="col-md-4" style="padding:0;">
                    <?php
                    // Get the ACF field value for author_profile_image
                    $author_profile_image = get_field('author_profile_image');
                    if(!empty($author_profile_image)): ?>
                        <img src="<?php echo esc_url($author_profile_image); ?>" style="width: 100%; height: 100%; object-fit: cover;" class="img-fluid rounded-0" alt="Author Image">
                    <?php endif; ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><strong>By <?php the_author_meta('display_name', 1); ?></strong></h5>
                        <p class="card-text">
                            <?php 
                            $author_id = get_the_author_meta('ID', 1);
                            $author_bio = get_the_author_meta('description', $author_id);
                            echo esc_html($author_bio);
                            ?>
                            <!-- social icons -->
                            <?php
// Get fields
$facebook = get_field('facebook','option');
$twitter = get_field('twitter','option');
$reddit = get_field('reddit','option');
$linkedin = get_field('linkedin','option');

// If any of the fields have data, show the section
if( $facebook || $twitter || $reddit || $linkedin ): ?>
    <section class="d-flex justify-content-start align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16" style="margin-right: 5px;">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"></path>
                            </svg>
                            <i class="bi bi-chevron-double-right me-4"></i>
        <?php if( $facebook ): ?>
            <a class="bi bi-facebook text-dark me-4" width="48" height="48" href="<?php echo $facebook; ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if( $twitter ): ?>
            <a class="bi bi-twitter text-dark me-4" width="48" height="48" href="<?php echo $twitter; ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if( $reddit ): ?>
            <a class="bi bi-reddit text-dark me-4" width="48" height="48" href="<?php echo $reddit; ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if( $linkedin ): ?>
            <a class="bi bi-linkedin text-dark me-4" width="48" height="48" href="<?php echo $linkedin; ?>" target="_blank"></a>
        <?php endif; ?>

    </section>
<?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    </div>
