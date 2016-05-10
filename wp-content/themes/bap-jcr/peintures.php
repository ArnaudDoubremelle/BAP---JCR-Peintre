<?php
/*
    Template Name: peintures
*/
?>
<?php get_header(); ?>



<div class="slider vcenter">
    <?php $my_query = new WP_Query(array('post_type' => 'peintures', 'orderby' => 'title', 'order'   => 'DESC')); ?>
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
            <div class="col-md-offset-2 col-md-5">
                <?php the_post_thumbnail('', array( 'class'	=> "single-img")); ?>
            </div>
            <div class="col-md-4">
                <h3><?php the_title() ?></h3>
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</div> <!-- / row -->
<?php endwhile;
wp_reset_postdata(); ?>


<?php get_footer(); ?>
