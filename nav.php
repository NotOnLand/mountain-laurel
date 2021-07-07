  <header class="navbar navbar-expand-md navbar-light">
    <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
      <a href="<?php echo get_home_url(); ?>" id="site-id" class="navbar-brand">
        <img src="<?php echo get_template_directory_uri(); ?>/images/site-id.svg" alt="Mountain Laurel Country Store" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

      <div class="collapse navbar-collapse" id="navbarToggle">

        <?php
          wp_nav_menu( array(
            'theme_location'  => 'main-menu',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => false,
            'menu_class'      => 'navbar-nav me-auto d-md-none',
            'add_li_class'    => 'mx-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ) );
         ?>

        <!--<ul id="navigation" class="navbar-nav me-auto d-md-none">
          <li class="nav-item mx-auto"><a class="nav-link active" href="index.html"><h3>Home</h3></a></li>
          <li class="nav-item mx-auto"><a class="nav-link" href="about.html"><h3>About</h3></a></li>
          <li class="nav-item mx-auto"><a class="nav-link" href="store.html"><h3>Store</h3></a></li>
          <li class="nav-item mx-auto"><a class="nav-link" href="gallery.html"><h3>Gallery</h3></a></li>
        </ul>-->

        <?php
          wp_nav_menu( array(
            'theme_location'  => 'social-menu',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => false,
            'menu_class'      => 'navbar-nav mx-auto me-md-0 d-inline-flex flex-row justify-content-evenly',
            'menu_id'         => 'social',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ) );
         ?>

        <!--
        <span id="social" class="navbar-nav mx-auto me-md-0 d-inline-flex flex-row justify-content-evenly">
          <a class="nav-link" href="https://wvbigfootmuseum.com" title="WV Bigfoot Museum" target="_blank"><i class="icon-bigfoot"><span class="visually-hidden-focusable">WV Bigfoot Museum</span></i></a>
          <a class="nav-link" href="https://www.facebook.com/MountainLaurelCountryStore/" title="Facebook" target="_blank"><i class="fab fa-facebook"><span class="visually-hidden-focusable">Facebook</span></i></a>
          <a class="nav-link" href="https://www.instagram.com/mountainlaurelcountry/" title="Instagram" target="_blank"><i class="fab fa-instagram"><span class="visually-hidden-focusable">Instagram</span></i></a>
          <a class="nav-link" href="https://goo.gl/maps/9WrPFtTRjCF6HNBg6" title="Directions on Google Maps" target="_blank"><i class="fas fa-map-marked-alt"><span class="visually-hidden-focusable">Directions on Google Maps</span></i></a>
          <a class="nav-link" href="mailto:contact@mountainlaurel.store" title="Contact us" target="_blank"><i class="fas fa-envelope"><span class="visually-hidden-focusable">Contact us</span></i></a>
        </span>-->

      </div>
    </nav>

  </header>
