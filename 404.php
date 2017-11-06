<?php get_header(); ?>

<!-- ======== @Region: body ======== -->
<body class="page page-index-static navbar-layout-default">

    <?php include TEMPLATEPATH . '/templates/nav-header.php'; ?>
        <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="w-90 mx-auto">
              <h2 class="error-code font-xs-x7 font-md-x10">
                404 <i class="fa fa-file-text text-primary font-xs-x6 font-md-x8"></i>
              </h2>
              <h2 class="error-message font-xs-x2 font-md-x2">
                Oops, esta página no funciona!
              </h2>

            </div>
          </div>
          <div class="col-md-4">
            <h4>
              Quizas te interese:
            </h4>
            <?php
                   /**
                    * Displays a navigation menu
                    * @param array $args Arguments
                    */
                    $args = array(
                        'theme_location' => 'menu-site-map',
                        'menu' => '',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'list-unstyled list-lg list-bordered',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                        'depth' => 0,
                        'walker' => ''
                    );

                    wp_nav_menu( $args );
            ?>
            <form role="search" method="get" class="error-search mt-4" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <h4>
                    O buscalo:
                </h4>
                <div class="input-group">
                    <label class="sr-only" for="search-field">Buscar</label>
                    <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Buscar …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit">Ir!</button>
                    </span>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- ======== @Region: #footer ======== -->
    <?php get_footer(); ?>
</body>
</html>