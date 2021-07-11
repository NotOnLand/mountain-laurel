<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
 get_header(); ?>

</head>

<body>

  <?php get_template_part('nav') ?>

  <?php get_sidebar(); ?>


  <main id="pageContent" class="">
      <article class="container-fluid px-0">
        <section class="col-12 row mx-auto px-4">
          <h1>Error 404: Page Not Found</h1>
          <h3>Looks like there's nothing here, sorry!</h3>
          <p>If you got here by accident, try starting from the <a href="<?php echo get_home_url(); ?>" ><strong class="text-decoration-underline">home page</strong></a>.</p>
          <p>If there should be a page here but isn't, <a href="mailto:contact@mountainlaurel.store" ><strong class="text-decoration-underline">contact us</strong></a> and we'll look into it.</p>
          <br>
          <img src="<?php echo get_template_directory_uri(); ?>/images/construction.svg" title="Our repair Sasquatch is on the case!" alt="Our repair Sasquatch is on the case!" class="col-3" style="background-color: transparent; filter: none;"/>
          <div class="col-12"></div>
        <div class="spacer d-none d-md-inline-block col-md-2"></div>
      </section>'

      </article>
  </main>

<?php get_footer(); ?>
</body>

</html>
