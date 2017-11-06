<!-- @Element: Archive -->

<!-- @Element: Search form -->
<div class="mb-4">
    <form role="search" method="get" class="search-form container" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="input-group">
            <label class="sr-only" for="search-field">Buscar</label>
            <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Buscar …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Ir!</button>
            </span>
        </div>
    </form>
</div>
<div class="mb-4">
    <h4 class="title-divider">
        <span>Categorias</span>
    </h4>
    <?php
                   /**
                    * Displays a navigation menu
                    * @param array $args Arguments
                    */
                    $args = array(
                        'theme_location' => 'menu-categories',
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
</div>

<!-- @Element: Popular/recent tabs -->
<div class="mb-4">


    <?php dynamic_sidebar('recent_post_sidebar' ); ?>

</div>

<!-- @Element: Subscrive button
<div class="mb-4">
<a href="#" class="btn btn-warning"><i class="fa fa-rss"></i> Subscribe via RSS feed</a>
</div>
-->
<!-- Follow Widget -->
<div class="mb-4">
    <h4 class="title-divider">
        <span>Siguenos</span>
    </h4>
    <!--@todo: replace with real social media links -->
    <ul class="list-unstyled social-media-branding">
        <!--
        <li>
            <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square fa-fw"></i> Twitter</a>
        </li>
        -->
        <li>
            <a href="https://www.facebook.com/manmunipetenitza/" class="social-link branding-facebook"><i class="fa fa-facebook-square fa-fw"></i> Facebook</a>
        </li>

    </ul>
</div>