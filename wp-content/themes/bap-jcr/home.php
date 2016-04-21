<?php get_header() ?>
<body>
<!--<div class="container-fluid bacceuil">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-offset-2 col-md-8 mgt-50" id="video">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 mgt-50 logo">-->
<!--                <img src="--><?php //bloginfo('template_directory') ?><!--/img/Logo_accueil_blanc.png" alt="logo" class="center-block img-responsive">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-offset-5 col-md-1">-->
<!--                <a href="peintures"><img src="--><?php //bloginfo('template_directory') ?><!--/img/fr.jpg" class="img-responsive" alt="drapeau_fr"></a>-->
<!--            </div>-->
<!--            <div class="col-md-1">-->
<!--                <a href="peintures"><img src="--><?php //bloginfo('template_directory') ?><!--/img/en.jpg" class="img-responsive" alt="drapeau_en"></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="capture-video-jcr">
    <video src="<?php bloginfo('template_directory') ?>/video/video_accueil_3_v2.mp4" muted="true" autoplay="true"></video>
    <div class="language">
        <a href="peintures" class="btn btn-custom"><img src="<?php bloginfo('template_directory') ?>/img/door.png" alt=""></a>
    </div>
</div>

<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/video.js"></script>

<?php get_footer()?>
