<?php
/*
    Template Name: home
*/
?>
<?php get_header() ?>

<!--<div class="capture-video-jcr">-->
<!--    <video src="--><?php //bloginfo('template_directory') ?><!--/video/video_accueil_3_v2.mp4" muted="true" autoplay="true"></video>-->
<!--    <div class="language">-->
<!--        <a href="peintures" class="btn btn-custom"><img src="--><?php //bloginfo('template_directory') ?><!--/img/door.png" alt=""></a>-->
<!--    </div>-->
<!--</div>-->

<a href="peintures">
    <div id="animation">
        <div class="svg">
            <img src="<?php bloginfo('template_directory')?>/img/Logo.svg"  width="50%" height="50%">
        </div>
        <button class="btn btn-intro">Entrer</button>
    </div>
</a>


<div class="cd-transition-layer">
    <div class="bg-layer"></div>
</div> <!-- .cd-transition-layer -->



<?php get_footer()?>
<script>
    new Vivus('my-svg', {type: 'delayed', duration: 200},console.log('salut'));
</script>
