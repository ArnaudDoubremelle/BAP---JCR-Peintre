<!-- Footer -->
<div class="clearfix"></div>
<div class="row">
    <?php get_template_part('template-contact'); ?>
</div>
<?php if(!is_page('edition')):?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php endif ?>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/lity.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/vimeo.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/vivus.min.js"></script>
<?php if(!is_page('edition')):?>
    <script src="<?php bloginfo('template_directory'); ?>/js/slick/galerie.js"></script>
<?php endif?>
<?php if(is_page('edition')):?>
    <script src="<?php bloginfo('template_directory'); ?>/livre/jquery.min.1.7.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/livre/jquery-ui-1.8.20.custom.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/livre/turn.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/livre/modernizr.2.5.3.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/livre/hash.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/livre/zoom.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/livre/magazine.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/livre/livre.min.js"></script>
<?php endif ?>
<script type="text/javascript">

</script>
<?php wp_footer(); ?>


</body>
</html>
