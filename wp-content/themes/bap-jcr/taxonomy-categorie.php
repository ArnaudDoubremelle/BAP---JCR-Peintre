<?php
/*
    Template Name: peintures
*/
?>
<?php get_header(); ?>



<div class="slider vcenter">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div><div class="image"><a href="#<?php echo $post->post_name ?>"><?php the_post_thumbnail(); ?></a></div></div>
    <?php endwhile; endif; ?>
</div>

<?php $my_query = new WP_Query(array('post_type' => 'peintures')); ?>
<?php while ($my_query->have_posts()) :
    $my_query->the_post(); ?>
    <div id="<?php echo $post->post_name ?>" class="port">
        <div class="container">
            <a href="#" class="close"></a>
            <div class="row">
                <div class="col-md-offset-2 col-md-5 single-post">
                    <?php the_post_thumbnail('', array( 'class'	=> "single-img")); ?>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 single-post">
                    <h3 class="text-center"><?php the_title() ?></h3>
                    <?php the_content(); ?>
                    <p class="center"><?php the_terms( $post->ID, 'series', 'Série : ' ); ?><br></p>
                </div>

            </div>
        </div>
    </div> <!-- / row -->
<?php endwhile;
wp_reset_postdata(); ?>


<?php get_footer(); ?>
