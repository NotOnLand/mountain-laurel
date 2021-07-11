<?php get_header(); ?>

</head>

<body>

  <?php get_template_part('nav') ?>

  <?php get_sidebar(); ?>


  <main id="pageContent" class="">
      <article class="container-fluid px-0">

        <section class="col-12 row mx-auto px-2">
          <div class="col-12 col-md-10 ">
            <h1>Gallery</h1>
            <?php
              $blocks = parse_blocks( get_the_content() );
              $content_markup = '';
              foreach ( $blocks as $block ) {
              	if ( 'modula/modulawp' === $block['blockName'] ) {
              		continue;
              	} else {
              		$content_markup .= render_block( $block );
              	}
              }

              $priority = has_filter( 'the_content', 'wpautop' );
              if ( false !== $priority ) {
              	remove_filter( 'the_content', 'wpautop', $priority );
              }

              echo apply_filters( 'the_content', $content_markup );

              if ( false !== $priority ) {
              	add_filter( 'the_content', 'wpautop', $priority );
              }
            ?>

          </div>
          <div class="spacer d-none d-md-inline-block col-md-2"></div>
        </section>

      </article>
  </main>

<?php get_footer(); ?>
</body>

</html>
