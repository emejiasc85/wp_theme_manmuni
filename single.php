<?php get_header(); ?>
  <!-- ======== @Region: body ======== -->
  <body class="page page-blog-post navbar-layout-default">
   <?php include TEMPLATEPATH . '/templates/nav-header.php'; ?>


    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="container">
        <!--
        <h2 class="title-divider">
          <span>Categoria: <span class="font-weight-normal text-muted">Noticias</span></span>
          <small>
            <a href="blog.htm"><i class="fa fa-arrow-left"></i> Regresar</a>
          </small>
        </h2>
        -->
        <div class="row">
          <!--Main Content-->
          <div class="col-md-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
            <!-- Blog post -->
            <div class="row blog-post">
              <div class="col-md-1 date-md">
                <!-- Date desktop -->
                <div class="date-wrapper">
                  <span class="date-m bg-primary"><?php the_date('M'); ?></span>
                  <span class="date-d"><?php the_date('d') ?></span>
                </div>
                <!-- Meta details desktop
                <p class="text-muted"> <i class="fa fa-user"></i> <a href="#">Erin</a></p>
                -->
              </div>
              <div class="col-md-11">
                <div class="media-body">
                  <!--
                  <div class="sections">
                    <a href="#" class="text-primary">coding</a> /
                    <a href="#" class="type">image</a>
                  </div>

                  -->
                  <h3 class="title media-heading">
                    <?php the_title(); ?>
                  </h3>

                  <!-- Meta details mobile -->
                  <ul class="list-inline meta text-muted">
                    <li class="list-inline-item"><i class="fa fa-calendar"></i> <?php the_date(); ?></li>
                    <!--
                    <li class="list-inline-item"><i class="fa fa-user"></i> <a href="#">Erin</a></li>
                    -->
                  </ul>

                  <!--Main content of post-->
                  <div class="blog-content">
                    <div class="blog-media">
                      <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                    </div>

                    <!--Used to highlight key points of post-->
                    <?php the_content( ); ?>
                  </div>

                  <!-- Post tags -->
                  <div class="tag-cloud post-tag-cloud">
                    <h4>
                      Categorias
                    </h4>
                    <?php the_category(); ?>
                  </div>

                  <div class="block bg-faded p-3 post-block">

                    <!-- Share Widget -->
                    <div class="post-share social-media-branding">
                      <h5>
                        Compartir:
                      </h5>
                      <!--@todo: replace with real social share links -->
                      <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                      <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
            <!-- post navigation -->
            <!-- Post To Post Pager -->
            <?php paginate_links( $args ); ?>

            <div class="post-to-post-pager">

                <p class="pull-left"><i class="fa fa-chevron-left"></i></p>
                <p class="pull-right"><i class="fa fa-chevron-right"></i></p>
                <?php previous_post_link('%link'); ?>
                <?php next_post_link('<strong>%link <small></small></strong>'); ?>
            </div>
            <?php else: ?>
            <!-- no posts found -->
            <?php endif; ?>

            <!--Comments-->
            <div class="comments" id="comments">
            </div>
          </div>
          <!--Sidebar-->

          <div class="col-md-3 sidebar-right">

            <?php include TEMPLATEPATH . '/templates/aside.php'; ?>

          </div>
        </div>
      </div>
    </div>

      <?php get_footer();  ?>
  </body>
</html>