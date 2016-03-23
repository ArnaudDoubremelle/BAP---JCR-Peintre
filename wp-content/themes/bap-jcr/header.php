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

<body <?php if (is_single() ):?>class="single"<?php endif; ?>>
<!-- Header -->
<?php if (!is_page('home') ):?>
    <div id="wrapper" class="">
        <div class="overlay" style="display: none;"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li>
                    <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-camera"></i> Photo</a>
                </li>
                <li>
                    <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-facetime-video"></i> Video</a>
                </li>
            </ul>
        </nav>
        <div id="page-content-wrapper">
            <div class="container">
                <h1><i class="icon-menu fa fa-bars" data-toggle="offcanvas"></i> Jean-Christophe Reneaux</h1>
            </div>
        </div>
    </div>
<?php endif; ?>
