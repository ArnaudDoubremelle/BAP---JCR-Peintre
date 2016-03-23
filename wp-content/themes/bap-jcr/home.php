<?php get_header() ?>
<body>
<div class="container-fluid bacceuil">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 mgt-50" id="video">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mgt-50 logo">
                <img src="<?php bloginfo('template_directory') ?>/img/Logo_accueil_blanc.png" alt="logo" class="center-block img-responsive">
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-5 col-md-1">
                <a href="galerie"><img src="<?php bloginfo('template_directory') ?>/img/fr.jpg" class="img-responsive" alt="drapeau_fr"></a>
            </div>
            <div class="col-md-1">
                <a href="galerie"><img src="<?php bloginfo('template_directory') ?>/img/en.jpg" class="img-responsive" alt="drapeau_en"></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/video.js"></script>

<?php get_footer()?>
