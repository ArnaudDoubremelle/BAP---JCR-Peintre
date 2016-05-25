<?php
/*
    Template Name: carnets
*/
?>
<?php get_header() ?>


<div class="slider vcenter">
    <?php $my_query = new WP_Query(array('post_type' => 'carnets', 'orderby' => 'title', 'order'   => 'DESC')); ?>
    <?php while ($my_query->have_posts()) :
        $my_query->the_post(); ?>
        <div><div class="image"><a href="<?php the_post_thumbnail_url()?>" data-lity><?php the_post_thumbnail(); ?></a></div></div>
    <?php endwhile;
    wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>
