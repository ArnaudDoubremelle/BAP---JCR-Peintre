<?php
/*
    Template Name: peintures
*/
?>
<?php get_header(); ?>




<div class="slider">
    <?php $my_query = new WP_Query(array('post_type' => 'peintures')); ?>
    <?php while ($my_query->have_posts()) :
        $my_query->the_post(); ?>
        <div><div class="image"><?php the_post_thumbnail(); ?></div></div>
    <?php endwhile;
    wp_reset_postdata(); ?>
</div>


<!-- Main -->
<!--<div class="container-slider">-->
<!--    <ul id="posts-slider">-->
<!--        --><?php //$my_query = new WP_Query(array('post_type' => 'peintures')); ?>
<!--        --><?php //while ($my_query->have_posts()) :
//            $my_query->the_post(); ?>
<!--            <li>-->
<!--                <a href="--><?php //echo get_permalink(); ?><!--">--><?php //the_post_thumbnail('', array('class' => 'img-responsive')); ?><!--</a>-->
<!--            </li>-->
<!--        --><?php //endwhile;
//        wp_reset_postdata(); ?>
<!--    </ul>-->
<!--</div>-->
<!--<div class="clearfix"></div>-->
<!--<div class="row">-->
<!--    --><?php //get_template_part('template-contact');?>
<!--</div>-->
<?php get_footer(); ?>
