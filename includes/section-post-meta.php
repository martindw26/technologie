
<section class="bg-white p-2">
<h4>Categories: </h4>
<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if (!empty($categories)) {
    foreach ($categories as $category) {
        $output .= '
        
        <div class="">
        <div class="btn-group">
        <button type="button" class="btn btn-primary m-1">
        <a class="tag-cat-btns text-white text-decoration-none" href="' . esc_url(get_category_link($category->term_id)) . '"><span class="tag-cat-btns text-white text-decoration-none">' . esc_html($category->name) . '
        </span>
        </a>
        </button>
        </div>' . $separator;
     
    }
    echo trim($output, $separator);
}
?>

<h4>Tags: </h4>

<?php
$tags = get_the_tags(); // Get the tags for the current post

if ($tags) {
    echo '<div class="">';
    foreach ($tags as $tag) {
        echo '
        <div class="btn-group">
        <button type="button" class="btn btn-primary m-1">
            <a class="tag-cat-btns text-decoration-none" href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">
                <span class="tag-cat-btns text-white text-decoration-none">' . esc_html( $tag->name ) . '</span>
            </a>
        </button>
        </div>';
    }
    echo '</div>';
}

?>


<br>
</section>


<?php if (get_field('affiliate_disclaimer','option')) : ?>
<p class="affiliate-text-title text-secondary"><?php echo get_field('affiliate_disclaimer','option'); ?></p>
<?php endif; ?>

