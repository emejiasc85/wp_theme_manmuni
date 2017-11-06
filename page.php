<?php get_header(); ?>

  <!-- ======== @Region: body ======== -->
  <body class="page page-about-extended navbar-layout-default">

    <!-- ======== @Region: #header ======== -->
   <?php include TEMPLATEPATH . '/templates/nav-header.php'; ?>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>


    <!-- ======== @Region: #footer ======== -->
    <?php get_footer(); ?>

  </body>
</html>