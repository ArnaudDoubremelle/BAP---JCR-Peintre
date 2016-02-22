<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title><?php bloginfo('name'); ?> - <?php the_title();?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css"/>

    <!-- Font-Awesome -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <?php wp_head(); ?>
</head>

<body>
<!-- Header -->
<header id="top" class="header">
    <nav id="navigation">
        <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
    </nav>
</header>
