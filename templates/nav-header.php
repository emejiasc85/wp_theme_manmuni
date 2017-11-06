


 <div id="header">
    <!--Hidden Header Region-->
    <div class="header-hidden collapse">
        <div class="header-hidden-inner container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        <?php bloginfo( 'title' ); ?>
                    </h3>
                    <?php bloginfo( 'description' ); ?>
                    <a href="#" class="btn btn-sm btn-primary">leer mas</a>
                </div>
                <div class="col-sm-6">
                    <!--@todo: replace with company contact details-->
                    <h3>
                        Contáctanos
                    </h3>
                    <address>
                        <?php dynamic_sidebar('contact_sidebar'); ?>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <!--Header upper region-->
    <div class="header-upper">
        <!--Show/hide trigger for #hidden-header -->
        <div id="header-hidden-link">
            <a href="#" title="Click me you'll get a surprise" class="show-hide" data-toggle="show-hide" data-target=".header-hidden"><i></i>Abrir</a>
        </div>
        <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .flex-first or/and .flex-last classes to make an element show first or last within .header-inner or .headr-block elements -->
        <div class="header-inner container">
            <!--user menu-->
            <div class="header-block-flex flex-first mr-auto">
                <nav class="nav nav-sm header-block-flex">
                    <a class="nav-link hidden-md-up" href="<?php echo esc_url( home_url( '/wp-admin' ) ); ?>"><i class="fa fa-user"></i></a>
                    <a class="nav-link text-xs text-uppercase hidden-sm-down" href="<?php echo esc_url( home_url( '/wp-admin' ) ); ?>" >Ingresar</a>
                </nav>
            </div>
            <!--social media icons-->
            <div class="nav nav-icons header-block flex-last">
                <!--@todo: replace with company social media details
                <a href="#" class="nav-link"> <i class="fa fa-twitter-square icon-1x"></i> <span class="sr-only">Twitter</span> </a>
                -->
                <a href="https://www.facebook.com/manmunipetenitza/" class="nav-link"> <i class="fa fa-facebook-square icon-1x"></i> <span class="sr-only">Facebook</span> </a>
            </div>
        </div>
    </div>
    <div data-toggle="sticky">

        <!--Header search region - hidden by default -->
        <div class="header-search collapse" id="search">
            <form role="search" method="get" class="search-form container" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="form-control search" placeholder="<?php echo esc_attr_x( 'Buscar …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                <button type="submit" class="btn btn-link"><span class="sr-only">Buscar </span><i class="fa fa-search fa-flip-horizontal search-icon"></i></button>
                <button type="button" class="btn btn-link close-btn" data-toggle="search-form-close"><span class="sr-only">Cerrar </span><i class="fa fa-times search-icon"></i></button>
            </form>
        </div>

        <!--Header & Branding region-->
        <div class="header">

            <div class="header-inner container">
                <!--branding/logo -->
                <div class="header-brand flex-first">
                    <a class="header-brand-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Inicio">
                        <h1>
                            <span>Manmuni</span> Petén Itza<span>.</span>
                        </h1>
                    </a>
                    <!--
                    <div class="header-divider hidden-md-down"></div>
                    <div class="header-slogan hidden-md-down">Petén Itza</div>
                    -->
                </div>
                <!-- other header content -->
                <div class="header-block flex-last">

                    <!--Search trigger -->
                    <a href="#search" class="btn btn-icon btn-link header-btn float-right flex-last" data-toggle="search-form" data-target=".header-search"><i class="fa fa-search fa-flip-horizontal search-icon"></i></a>

                </div>

                <?php
                       /**
                        * Displays a navigation menu
                        * @param array $args Arguments
                        */
                        $args = array(
                            'theme_location' => 'menu-header',
                            'menu' => '',
                            'container' => 'nav',
                            'container_class' => '',
                            'container_id' => 'cssmenu',
                            'menu_class' => '',
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