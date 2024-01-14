<?php
$disclaimer_text = get_field( 'article_post_content_disclaimer_block_text','option' );
$disclaimer_url = get_field( 'article_post_content_disclaimer_block_url','option' );

if(get_field('article_post_content_disclaimer_block_text','option'))
{
    echo '<br><hr><br><div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="font-weight-normal text-danger">' . $disclaimer_text . '<a class="text-decoration-none" href='.$disclaimer_url.' target="_blank"/> &#9432; </a></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>
