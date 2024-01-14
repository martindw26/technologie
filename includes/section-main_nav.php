<!-- Main navigation -->

<nav class="navbar-fluid navbar-expand-md navbar-black bg-black pt-1" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
<button class="navbar-toggler text-start" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><h5 class="	fas fa-bars"></h5>
</span>
</button>

  <?php
  wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'	          => 2,
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbar-collapse-1',
	  'add_li_class'    => 'nav-text',
    'menu_class'      => 'nav navbar-nav',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
  ) );
  ?>
</nav>
<!-- /Main navigation -->