<?php
/*
    Template Name: peintures
*/
?>
<?php get_header(); ?>


<div id="top"></div>
<div class="slider">
    <?php $my_query = new WP_Query(array('post_type' => 'peintures')); ?>
    <?php while ($my_query->have_posts()) :
    $my_query->the_post(); ?>
        <div><div class="image"><a href="#<?php echo $post->post_name ?>"><?php the_post_thumbnail(); ?></a></div></div>
    <?php endwhile;
    wp_reset_postdata(); ?>
</div>

<?php $my_query = new WP_Query(array('post_type' => 'peintures')); ?>
<?php while ($my_query->have_posts()) :
$my_query->the_post(); ?>
<div id="<?php echo $post->post_name ?>" class="port">
    <div class="container">
        <a href="#" class="close"></a>
        <div class="row">
            <div class="col-md-8">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-md-4">
                <h1><?php the_title() ?></h1>
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</div> <!-- / row -->
<?php endwhile;
wp_reset_postdata(); ?>

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
