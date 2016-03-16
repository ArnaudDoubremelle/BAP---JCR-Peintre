
jQuery(document).ready(function( $ ) {
    $("#video").html(function () {
        var video =Math.floor((Math.random() * 3) + 1);
        var html = '<video class="center-block img-responsive"  src="wp-content/themes/bap-jcr/video/video_accueil_'+video+'.mp4" loop="true" muted="true"  autoplay="true"></video>';
        return html;
    });
});