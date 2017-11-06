<!DOCTYPE html>
<html lang="es">
<head>
    <title><?php bloginfo( 'title' ); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- @todo: fill with your company info or remove -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="emejias.com">

    <!-- Theme style -->
    <link href="<?php bloginfo( stylesheet_url ); ?>" rel="stylesheet">

    <!-- Iconset: Linearicons - https://linearicons.com/free -->
    <link href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" rel="stylesheet">


    <!-- Le fav and touch icons  -->
    <link rel="shortcut icon" href="">


    <!--Plugin: Retina.js (high def image replacement) - @see: http://retinajs.com/-->
    <?php wp_head(); ?>
</head>