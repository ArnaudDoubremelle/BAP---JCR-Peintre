<?php
/*
    Template Name: carnets
*/
?>
<?php get_header() ?>

<!-- Main -->
<div class="container-slider">
    <ul id="posts-slider">
        <?php $my_query = new WP_Query(array('post_type' => 'carnets')); ?>
        <?php while ($my_query->have_posts()) :
            $my_query->the_post(); ?>
            <li>
                <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></a>
            </li>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </ul>
</div>

<?php get_footer(); ?>
