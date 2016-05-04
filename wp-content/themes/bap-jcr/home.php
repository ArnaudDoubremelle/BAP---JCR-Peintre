<?php
/*
    Template Name: home
*/
?>
<?php get_header() ?>
<body>

<!--<div class="capture-video-jcr">-->
<!--    <video src="--><?php //bloginfo('template_directory') ?><!--/video/video_accueil_3_v2.mp4" muted="true" autoplay="true"></video>-->
<!--    <div class="language">-->
<!--        <a href="peintures" class="btn btn-custom"><img src="--><?php //bloginfo('template_directory') ?><!--/img/door.png" alt=""></a>-->
<!--    </div>-->
<!--</div>-->

<a href="peintures">
    <div id="animation">
        <img id="toile" src="<?php bloginfo('template_directory') ?>/img/toile.jpg" alt="toile" />
        <img id="logo" src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo-jcr" />
        <button class="btn btn-intro">Entrer</button>
    </div>
</a>

<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/video.js"></script>

<?php get_footer()?>
