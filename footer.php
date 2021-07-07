<div id="greenbar"></div>

  <footer class="footer">
    <div class="container p-0 flex-wrap flex-md-nowrap navbar">
        <img src="<?php echo get_template_directory_uri(); ?>/images/site-id.svg" class="d-none d-md-inline-block navbar-brand col-4 p-3" />

        <div class="d-inline-block navbar-light col-12 col-md-7 mx-auto">


          <?php
          $menucode = wp_nav_menu( array(
            'theme_location'  => 'footer-menu',
            'echo'            => false,
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => false,
            'menu_class'      => 'navbar-nav d-flex flex-row justify-content-between',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ) );

          echo str_replace('__', ' <br class="d-md-none">', $menucode);
           ?>

          <!--<div class="navbar-nav d-flex flex-row justify-content-between">
            <a href="index.html" class="nav-link active"><h6>Home</h6></a>
            <a href="about.html" class="nav-link"><h6>About</h6></a>
            <a href="contact.html" class="nav-link"><h6>Store</h6></a>
            <a href="gallery.html" class="nav-link"><h6>Gallery</h6></a>
            <a href="http://wvbigfootmuseum.com" class="nav-link me-lg-5"><h6>Bigfoot <br class="d-md-none">Museum</h6></a>
          </div>-->

          <span class="navbar-text d-none d-md-inline-block col-md-6 col-lg-5">©2021 All Rights Reserved<br>Web design by <a target="_blank" href="https://landonpettit.com">Landon Pettit</a></span>

          <?php
            wp_nav_menu( array(
              'theme_location'  => 'footer-social-menu',
              'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => false,
              'menu_class'      => 'col-12 col-md-5 d-inline-flex flex-row justify-content-center justify-content-md-end mb-md-auto navbar-light navbar-nav mt-md-1',
              'add_li_class'    => 'mx-2 px-1 px-md-2 me-md-0 ms-lg-3',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
           ?>

          <!--<span class="col-12 col-md-5 d-inline-flex flex-row justify-content-center justify-content-md-end mb-md-auto navbar-light navbar-nav mt-md-1">
            <a class="nav-link mx-2 px-1 px-md-2 me-md-0 ms-lg-3" href="https://www.facebook.com/MountainLaurelCountryStore/" title="Facebook" target="_blank"><i class="fab fa-facebook"><span class="visually-hidden-focusable">Facebook</span></i></a>
            <a class="nav-link mx-2 px-1 px-md-2 me-md-0 ms-lg-3" href="https://www.instagram.com/mountainlaurelcountry/" title="Instagram" target="_blank"><i class="fab fa-instagram"><span class="visually-hidden-focusable">Instagram</span></i></a>
            <a class="nav-link mx-2 px-1 px-md-2 me-md-0 ms-lg-3" href="https://goo.gl/maps/9WrPFtTRjCF6HNBg6" title="Directions on Google Maps" target="_blank"><i class="fas fa-map-marked-alt"><span class="visually-hidden-focusable">Directions on Google Maps</span></i></a>
            <a class="nav-link mx-2 px-1 px-md-2 me-md-0 ms-lg-3" href="mailto:contact@mountainlaurel.store" title="Contact us" target="_blank"><i class="fas fa-envelope"><span class="visually-hidden-focusable">Contact us</span></i></a>
          </span>-->

          <span class="navbar-text d-inline-block d-md-none col-12">©2021 All Rights Reserved<br>Web design by <a target="_blank" href="https://landonpettit.com">Landon Pettit</a></span>
        </div>
    </div>
  </footer>

    <?php wp_footer();?>
