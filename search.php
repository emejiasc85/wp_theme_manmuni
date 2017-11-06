    <?php get_header(); ?>

    <!-- ======== @Region: body ======== -->
    <body class="page page-blog navbar-layout-default">
    <?php include TEMPLATEPATH . '/templates/nav-header.php'; ?>

    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="container">
        <h2 class="title-divider">
          <span>Resultados </span>
        </h2>

        <div class="row">
          <!--Blog Grid -->
          <div class="col-md-9">
            <div class="blog-roll blog-grid" data-toggle="isotope-grid" data-isotope-options='{"itemSelector": ".grid-item"}'>
              <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- post -->
                <!--Timeline item 1-->
                <div class="col-sm-6 col-md-4 grid-item">
                  <div class="blog-post">
                    <div class="blog-media">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid'] ); ?>
                      </a>
                    </div>
                    <div class="mt-4">
                      <div class="date-wrapper date-wrapper-horizontal">
                        <span class="date-m bg-primary"><?php the_date('M' ); ?></span>
                        <span class="date-d"><?php the_date('d'); ?></span>
                      </div>

                      <h4 class="timeline-item-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h4>
                      <?php the_excerpt(['class' => 'timeline-item-description']); ?>
                      <a href="<?php the_permalink(); ?>" class="btn btn-link"><i class="fa fa-arrow-circle-right"></i> Leer mas</a>
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
                <!-- post navigation -->
                <?php else: ?>
                <h3>No se encontro ningun resutado</h3>
                <?php endif; ?>


              </div>
            </div>

            <div class="pagination d-block">
              <button type="button" class="btn btn-secondary btn-lg btn-block">Paginar</button>
            </div>
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