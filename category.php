  <?php get_header(); ?>

  <!-- ======== @Region: body ======== -->
  <body class="page page-blog navbar-layout-default">
   <?php include TEMPLATEPATH . '/templates/nav-header.php'; ?>


    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="container">
        <h2 class="title-divider">
          <span>Mantente Informado.<span class="font-weight-normal text-muted"></span></span>
          <!--<small>Mantente Informado.</small>-->
        </h2>
        <div class="row">
          <!--Blog Roll Content-->
          <div class="col-md-9 blog-roll blog-list">
            <!-- Blog post -->
            <?php rewind_posts(); ?>
            <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
            <div class="row blog-post">
              <div class="col-md-1 date-md">
                <!-- Date desktop -->
                <div class="date-wrapper">
                  <span class="date-m bg-primary"><?php echo get_the_date('M'); ?></span>
                  <span class="date-d"><?php echo get_the_date('d'); ?></span>
                </div>
                <!-- Meta details desktop
                <p class="text-muted"> <i class="fa fa-user"></i> <a href="#">Joe</a> </p>
                -->
              </div>
              <div class="col-md-11">
                <!--
                <div class="tags">
                  <a href="#" class="text-primary">design</a> /
                  <a href="#" class="type">podcast</a>
                </div>
                -->
                <h4 class="title media-heading">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h4>
                <!-- Meta details mobile -->
                <ul class="list-inline meta text-muted">
                  <li class="list-inline-item"><i class="fa fa-calendar"></i> <?php the_date(); ?></li>
                </ul>
                <div class="row">
                  <div class="col-md-4 push-md-8">
                    <div class="blog-media">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid'] ); ?>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-8 pull-md-4">
                    <?php the_excerpt(); ?>
                    <ul class="list-inline links">
                      <li class="list-inline-item">
                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-circle-right"></i> Leer mas</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
            <!-- post navigation -->
            <!-- Post To Post Pager -->
            <div class="post-to-post-pager">
              <div class="pull-left">
                <?php previous_posts_link(); ?>
              </div>
              <div class="pull-right">
                <?php next_posts_link(); ?>
              </div>
            </div>

            <?php else: ?>
            <!-- no posts found -->
            <?php endif; ?>


          </div>
          <!--Sidebar-->
          <div class="col-md-3 sidebar-right">
            <?php include TEMPLATEPATH . '/templates/aside.php'; ?>

          </div>
        </div>
      </div>
      <!--.container-->
    </div>
    <!--#content-->

    <?php get_footer(); ?>
  </body>
</html>