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
        <div class="row single-post">
            <div class="col-md-12 single-content">
                <div class="col-md-8">
                    <?php the_post_thumbnail('', array( 'class'	=> " shadow img-responsive center-block")); ?>
                </div>
                <div class="col-md-4 single-content">
                    <div class="single-border text-center">
                        <h3 class="single-title"><?php the_title() ?></h3>
                        <div class="inherit">
                            <?php the_content(); ?>
                            <p><?php the_terms( $post->ID, 'series', 'Série : ' ); ?><br></p>
                            <?php $prix=get_field('prix');?>
                            <?php if(!empty($prix)):?>
                                <p> <?php _e("[:en]Price[:fr] Prix[:]"); ?> : <?php the_field('prix')?></p>
                                <?php else:?>
                                <p></p>
                            <?php endif;?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- / row -->
<?php endwhile;
wp_reset_postdata(); ?>


<?php get_footer(); ?>
