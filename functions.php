<?php
    /*
    //set default excerpt length
    function custom_excerpt_length( $length ) {
        return 15;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    */
    function get_excerpt($limit, $source = null){

        if($source == "content" ? ($excerpt = get_the_content()) : ($excerpt = get_the_excerpt()));
        $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, $limit);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
        $excerpt = $excerpt.'[...]';
        return $excerpt;
    }


    //habilitar post-thumbnails
    add_theme_support('post-thumbnails');

    function register_my_menus()
    {
        register_nav_menus([
            'menu-header' => __('Menú encabezado'),
            'menu-footer' =>  __('Menú pie de pág.'),
            'menu-site-map' =>  __('Mapa del sitio.'),
            'menu-cities' =>  __('Menú de municipios.'),
            'menu-categories' =>  __('Menú Categorias.'),
        ]);
    }

    add_action('init', 'register_my_menus' );


    add_filter('next_posts_link_attributes', 'posts_link_attributes');
    add_filter('previous_posts_link_attributes', 'posts_link_attributes');

    function posts_link_attributes() {
        return 'class="btn btn-outline-info btn-sm next"';
    }

    function post_link_attributes($output) {
        $code = 'class="btn btn-outline-info btn-sm previous col-xs-4"';
        return str_replace('<a href=', '<a '.$code.' href=', $output);
    }

    function next_post_link_attributes($output) {
        $code = 'class="btn btn-outline-info next btn-sm col-xs-4"';
        return str_replace('<a href=', '<a '.$code.' href=', $output);
    }

    add_filter('next_post_link', 'next_post_link_attributes');
    add_filter('previous_post_link', 'post_link_attributes');
    /* widgest sidebar */

    function recent_post_sidebar()
    {
           /**
            * Creates a sidebar to show recent posts
            * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
            */
            $args = array(
                'name'          => __( 'Post Recientes', 'theme_text_domain' ),
                'id'            => 'recent_post_sidebar',
                'description'   => '',
                'class'         => '',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '<h4 class="widgettitle">',
                'after_title'   => '</h4>'
            );

            register_sidebar( $args );

    }

    add_action('widgets_init', 'recent_post_sidebar' );

    function contact_sidebar()
    {
           /**
            * Creates a sidebar
            * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
            */
            $args = array(
                'name'          => __( 'Datos de contacto'),
                'id'            => 'contact_sidebar',
                'before_widget' => '',
                'after_widget'  => ''
            );

            register_sidebar( $args );

    }

    add_action('widgets_init', 'contact_sidebar' );




