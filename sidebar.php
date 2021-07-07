<?php
  wp_nav_menu( array(
    'theme_location'  => 'main-menu',
    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => false,
    'menu_class'      => 'px-0 d-none d-md-inline-flex flex-column col-2 sticky-top navbar-light',
    'menu_id'         => 'sidenav',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
  ) );
 ?>

<!--<aside id="sidenav" class="px-0 d-none d-md-inline-flex flex-column col-2 sticky-top navbar-light">
  <nav class="navbar-nav">
    <a class="nav-link active" href="index.html"><h3>Home</h3></a>
    <a class="nav-link" href="about.html"><h3>About</h3></a>
    <a class="nav-link" href="store.html"><h3>Store</h3></a>
    <a class="nav-link" href="gallery.html"><h3>Gallery</h3></a>
  </nav>-->
</aside>
