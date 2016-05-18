<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?> - <?php the_title();?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css"/>
    <link href="<?php bloginfo( 'template_directory' ); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/slick.css"/>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/media.css"/>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/animate.css"/>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/lity.css"/>


    <?php wp_head(); ?>
</head>


<body <?php if (is_single() || is_page('biographie') ) : ?>
                class="other-back"
            <?php elseif ( is_page('home') ) : ?>
                class="home"
            <?php elseif ( is_page('reperage') ) : ?>
                class="atelier"
            <?php endif ; ?>>
<!-- Header -->
<?php if (!is_page('home') ):?>
    <div id="wrapper" class="">
        <div class="overlay" style="display: none;"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <?php if ( is_super_admin() ):?>
                    <li>
                        <a href="<?php echo get_dashboard_url(); ?>"><i class="fa fa-tachometer"></i> Tableau de bord</a>
                    </li>
                <?php endif; ?>
            </ul>
            <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
        </nav>
        <div id="page-content-wrapper">
            <button  class="link-menu" data-toggle="offcanvas"><span class="txt-menu"><?php echo get_the_title() ?></span><i class="icon-menu fa fa-bars"></i></button>
        </div>
        <a href="<?php echo get_home_url() ; ?>"><img id="logsvg" src="<?php bloginfo('template_directory')?>/img/Logo.svg"  width="200px" height="100px"></a>
    </div>
<!--    <div class="title"></div>-->

<?php endif; ?>
