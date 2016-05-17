<!-- Footer -->
<div class="clearfix"></div>
<div class="row">
    <?php get_template_part('template-contact'); ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/slick/slick.min.js"></script>
<!--<script src="--><?php //bloginfo( 'template_directory' ); ?><!--/js/jquery.flexisel.js"></script>-->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<!--<script src="--><?php //bloginfo( 'template_directory' ); ?><!--/js/cadre.js"></script>-->
<script src="<?php bloginfo('template_directory'); ?>/js/lity.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/vimeo.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/vivus.min.js"></script>

<!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
<!--<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
<script type="text/javascript">
    $(document).ready(function () {
        $('.slider').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>



<?php wp_footer(); ?>


</body>
</html>
