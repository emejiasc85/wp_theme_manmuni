    <!-- ======== @Region: #content-below ======== -->
    <div id="content-below">
        <!-- Awesome features call to action -->
        <div class="bg-primary text-white py-4">
            <div class="container">
                <div class="row text-center text-lg-left">
                    <div class="col-12 col-lg-7 py-2">
                        <h2 class="text-uppercase font-weight-bold mt-0 mb-2">
                            <span class="text-shadow">¿Buscas mas</span> <span class="text-primary-darkend">Noticias?</span>
                        </h2>
                        <h5 class="text-faded">
                            <?php
                                $args = array (
                                    'exclude' => [2],
                                    'show_count' => true,
                                    'title_li' => false,
                                    'style' =>'',
                                    'separator' => '<span class="text-primary-darkend font-weight-bold px-lg-1">/</span>'
                                );
                                wp_list_categories($args);
                            ?>
                        </h5>
                    </div>
                    <div class="col-12 col-lg-5 py-2 text-lg-right">
                        <a href="<?php echo esc_url( get_category_link(3 ) ); ?>" class="btn btn-lg btn-primary btn-invert btn-rounded py-3 px-4">Ver mas Noticias<i class="fa fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <h3 class="text-white text-uppercase text-slab font-weight-bold">
                        Manmuni<span class="text-primary"> Petén Itza</span>
                    </h3>
                    <p class="text-sm"><?php bloginfo('description') ?></p>
                    <address>
                        <?php dynamic_sidebar('contact_sidebar'); ?>
                    </address>
                    <!--social media icons-->
                    <div class="mt-3 mb-4 mb-lg-0">
                        <!--@todo: replace with company social media details
                        <a href="#" class="btn btn-icon btn-inverse btn-invert btn-rounded"> <i class="fa fa-twitter"></i> <span class="sr-only">Twitter</span> </a>
                        -->
                        <a href="https://www.facebook.com/manmunipetenitza/" class="btn btn-icon btn-inverse btn-invert btn-rounded"> <i class="fa fa-facebook"></i> <span class="sr-only">Facebook</span> </a>
                    </div>
                </div>

                <div class="col-lg-7 offset-lg-1">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <h4 class="mt-0 text-slab">
                                Mapa del Sitio
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
                                        'menu_class' => 'list-unstyled footer-links',
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
                        <div class="col-6 col-md-4">
                            <h4 class="mt-0 text-slab">
                                Noticias populares
                            </h4>
                            <?php
                                   /**
                                    * Displays a navigation menu
                                    * @param array $args Arguments
                                    */
                                    $args = array(
                                        'theme_location' => 'menu-footer',
                                        'menu' => '',
                                        'container' => '',
                                        'container_class' => '',
                                        'container_id' => '',
                                        'menu_class' => 'list-unstyled footer-links',
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
                        <div class="col-6 col-md-4">
                            <h4 class="mt-0 text-slab">
                                Municipios
                            </h4>
                            <?php
                                   /**
                                    * Displays a navigation menu
                                    * @param array $args Arguments
                                    */
                                    $args = array(
                                        'theme_location' => 'menu-cities',
                                        'menu' => '',
                                        'container' => '',
                                        'container_class' => '',
                                        'container_id' => '',
                                        'menu_class' => 'list-unstyled footer-links',
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

                    </div>
                </div>
            </div>

            <hr class="my-4 hr-white op-1" />
            <!--@todo: replace with company copyright details-->
            <div class="subfooter text-sm text-center">
                <p>por <a href="http://emejias.com" target="_blank" class="footer-link">Emejias</a> | Copyright 2017 &copy; Manmuni Petén Itza</p>
    <!--
    <ul class="list-inline footer-links">
    <li class="list-inline-item"><a href="#">Terms</a></li>
    <li class="list-inline-item"><a href="#">Privacy</a></li>
    <li class="list-inline-item"><a href="#">Contact Us</a></li>
    </ul>
    -->
    </div>
    </div>
    <a href="#top" class="btn btn-icon btn-inverse pos-fixed pos-b pos-r mr-3 mb-3 scroll-state-hidden hidden-md-down" title="Back to top" data-scroll="scroll-state"><i class="fa fa-chevron-up"></i></a>
    </footer>


    <!--jQuery 3.2.1 via CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Tether 1.1.1 via CDN, needed for Bootstrap Tooltips & Popovers -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.1.1/js/tether.min.js"></script>

    <!-- Bootstrap 4.0.0-alpha.6 JS via CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


    <!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 To disable this and load plugin assets manually simple add data-plugins-manual=true to the body tag -->

    <!--Custom scripts & AppStrap API integration -->

    <!--AppStrap scripts mainly used to trigger libraries/plugins -->
    <script src="<?php bloginfo(stylesheet_directory); ?>/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php bloginfo(stylesheet_directory); ?>/assets/plugins/jPanelMenu/jquery.jpanelmenu.min.js"></script>
    <script src="<?php bloginfo(stylesheet_directory); ?>/assets/js/script.js"></script>

    <?php wp_footer(); ?>