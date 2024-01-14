<style>
/* Custom CSS for the horizontal scroller */
.horizontal-scroll {
  flex-wrap: nowrap;
  overflow-x: auto;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch; /* For smooth scrolling on iOS devices */
  padding: 10px; /* Optional: Add some padding at the bottom to accommodate the scrollbar */
}

/* scrollbar css*//* For WebKit-based browsers (including Safari and iOS) *

/* Apply the horizontal scroll for larger screens */
.horizontal-scroll {
  overflow-x: auto;
  white-space: nowrap;
}

/* Media query for mobile devices */
@media (max-width: 480px) {
  .horizontal-scroll-text-mobile {
    /* Remove horizontal scroll and make content flow vertically on smaller screens */
    display: block;
    
  }
}

@media (min-width: 481px) {
  .horizontal-scroll-text-mobile {
    display: none;
  }
}

.horizontal-scroll-text-mobile  {
      color: darkgreen;
      animation: pulsate 2s linear infinite;
      font-weight: bold;
    }

    @keyframes pulsate {
      0% {
        color: lightgreen;
      }
      50% {
        color: darkgreen;
      }
      100% {
        color: lightgreen;
      }
    }

</style>

<?php $jump_point_label = get_field('jump_point_label', 'option'); ?>
<div class="scroll-container">
  <h5><?php echo $jump_point_label; ?></h5>
  <h6 class="horizontal-scroll-text-mobile">Scroll >></h6>
</div>


<div class="horizontal-scroll">
<?php if (have_rows('jumps')): ?>
<?php while (have_rows('jumps')): the_row(); ?>
<?php $anchor = esc_url(get_sub_field('jump_anchor')); ?>
<?php $image_url = esc_url(get_sub_field('jump_image')); ?>

<a class="text-decoration-none" href="#<?php echo ltrim($anchor, 'http://'); ?>">
<img class="img-fluid" src="<?php echo $image_url; ?>" style="height:100px; width:200px;">
</a>

<?php endwhile; ?>
<?php else: ?>
<p>No jump points found.</p>
<?php endif; ?>
</div><br>



