<?php get_header() ?>
<body>
<div class="container-fluid bacceuil">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 mgt-50" id="video">
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 mgt-50 logo">
                <img src="<?php bloginfo('template_directory') ?>/img/Logo_accueil_blanc.png" alt="logo" class="center-block img-responsive">
                <a href="galerie" class="btn btn-primary">FR</a>
                <a href="galerie" class="btn btn-danger">EN</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/video.js"></script>

<?php get_footer()?>
