<?php get_header(); ?>

<!-- ======== @Region: body ======== -->
<body class="page page-index-static navbar-layout-default">

    <?php include TEMPLATEPATH . '/templates/nav-header.php'; ?>
    <!-- ======== @Region: #highlighted ======== -->
    <div id="highlighted">

        <div class="bg-white overlay overlay-primary overlay-op-5 text-center px-3 py-5 py-lg-10 flex-valign" data-bg-img="<?php bloginfo(stylesheet_directory); ?>/assets/img/tikal.jpg" data-css='{"background-position": "center top","background-attachment": "fixed"}' data-toggle="full-height" data-offset="#header">
            <h2 class="display-4 text-white" data-animate="fadeIn" data-animate-delay="0.2">
                Manmuni <span class="font-weight-bold">Petén Itza!</span>
            </h2>
            <h3 class="text-grey font-weight-normal" data-animate="fadeIn" data-animate-delay="0.35">
                <?php bloginfo( 'description' ); ?>!
            </h3>
            <hr class="hr-inverse hr-lg w-20 mx-auto my-4" data-animate="fadeIn" data-animate-delay="0.45" />
            <div> <a href="#" class="btn btn-inverse btn-rounded btn-lg py-lg-3 px-lg-5" data-toggle="scroll-link" data-animate="fadeIn" data-animate-delay="0.55">Sobre Nosotros</a>
            </div>
        </div>
    </div>

    <!-- ======== @Region: #content ======== -->
    <div id="content" class="p-0">
        <!-- Features -->
        <div id="features" class="container py-4 py-lg-6">
            <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
            <h2 class="text-center text-uppercase font-weight-bold my-0">
                Municipalidades Asociadas
            </h2>

            <h5 class="text-center font-weight-light mt-2 mb-0 text-muted">
            Petén, Guatemala Centroamerica.
            </h5>

            <hr class="mb-5 w-50 mx-auto" />
            <div class="row text-center justify-content-center">

                <?php rewind_posts(); ?>
                <?php query_posts('order=Asc&cat=2'); ?>
                <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- post -->
                    <div class="col-xs-12 col-sm-6 col-lg-2 py-2">
                    <a href="<?php the_permalink(); ?>">
                        <div class="div-img hidden" >
                            <?php the_post_thumbnail('medium', ['class' => 'img'] ); ?>
                        </div>

                        <h4 class="mt-2 text-muted">
                            <?php the_title(); ?>
                        </h4>
                    </a>
                    </div>
                <?php endwhile; ?>
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found -->
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Why AppStrap -->
    <div class="bg-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 divider-diagonal divider-diagonal-r divider-inverse" data-bg-img="<?php bloginfo(stylesheet_directory); ?>/assets/img/sj.jpg"></div>
                <div class="col-lg-6 py-5">
                    <hr class="hr-lg mt-0 mb-2 w-10 ml-0 hr-primary" />
                    <h2 class="display-4 text-slab text-white text-uppercase mt-0 mb-5">
                        Finalidad
                    <!--
                    <span class="text-primary font-weight-bold">Manmuni Petén Itza</span>
                    -->
                    </h2>
                    <div class="row mb-3">
                        <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i>
                        </div>
                        <div class="col-10 col-md-11 text-grey">
                            <p>Formulación común de políticas públicas municipales, planes, programas y proyectos, así como la ejecución de obras y la prestación eficiente de servicios municipales.</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i></div>
                        <div class="col-10 col-md-11 text-grey">
                            <p>Aumentar la capacidad de interlocución y gestión municipal, a través de la Mancomunidad, ante entidades públicas y privadas y organismos de cooperación internacional.</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i></div>
                        <div class="col-10 col-md-11 text-grey">
                            <p>Incidir en las autoridades de gobierno central competentes en la materia para que los programas y proyectos realizados dentro de la Mancomunidad reciban el apoyo necesario.</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i></div>
                        <div class="col-10 col-md-11 text-grey">
                            <p>Velar porque las acciones que ejecuten instituciones públicas o privadas, estén enmarcadas dentro de los planes, programas u proyectos de los municipios mancomunados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Pricing Table-->
    <div class="bg-faded py-3 py-lg-6">
        <div class="container">
            <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
            <h2 class="text-center text-uppercase font-weight-bold my-0">
                Ultimas Noticias
            </h2>
            <hr class="mb-5 w-50 mx-auto" />


            <div class="blog-roll blog-grid" data-toggle="isotope-grid" data-isotope-options='{"itemSelector": ".grid-item"}'>
                <div class="row">
                    <!--Timeline item 1-->
                    <?php rewind_posts(); ?>
                    <?php query_posts( 'order=Desc&cat=3'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- post -->
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="blog-post">
                                <div class="blog-media">
                                    <a href="blog-post.htm">
                                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>

                                    </a>
                                </div>
                                <div class="mt-4">
                                    <div class="date-wrapper date-wrapper-horizontal">
                                        <span class="date-m bg-success"><?php echo get_the_date(); ?></span>
                                    </div>
                                    <!--
                                    <div class="tags">
                                        <a href="#" class="text-primary">design</a> /
                                        <a href="#" class="type">image</a>
                                    </div>
                                    -->
                                    <h4 class="timeline-item-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                   <?php echo get_excerpt(140, 'content'); ?>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-link text-success"><i class="fa fa-arrow-circle-right"></i> Leer Mas</a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <!-- post navigation -->
                    <?php else: ?>
                        <h3>No se ha encontrodo Ninguna Noticia...</h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ======== @Region: #footer ======== -->
    <?php get_footer(); ?>
</body>
</html>