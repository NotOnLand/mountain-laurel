<?php get_header(); ?>

</head>

<body>

  <?php get_template_part('nav') ?>

  <?php get_sidebar(); ?>


  <main id="pageContent" class="">
      <article class="container-fluid px-0">
        <section class="col-12 row mx-auto px-2"><div class="col-12">
            <?php
              $post_id = get_the_ID();
              $post = get_post($post_id);
              $blocks = parse_blocks($post->post_content);

              echo '<h1>';
              echo the_Title();
              echo '</h1>';

              foreach ($blocks as $block) {
                if(isset($block['blockName'])){
                    //echo '<section class="col-12 row mx-auto px-2"><div class="col-12">';
                    echo render_block($block);
                    //echo '</div><div class="spacer d-none d-md-inline-block col-md-2"></div></section>';
                  }
                }

              $backurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
              echo '<a id="backbutton" href=';
              echo $backurl;
              echo ' class="btn btn-primary btn-lg" role="button">Back</a>';
              ?>
            </div><div class="spacer d-none d-md-inline-block col-md-2"></div></section>
      </article>
  </main>

<?php get_footer(); ?>
</body>

</html>
