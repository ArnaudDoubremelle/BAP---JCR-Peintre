<?php
/*
    Template Name: carnets
*/
?>
<?php get_header() ?>

<!-- Main -->

<div class="container-fluid">
    <div class='row'>
        <div class='col-md-12'>
            <div class="carousel slide media-carousel" id="media">

                <div class="carousel-inner">
                    <?php $first = 1;
                    $my_query = new WP_Query(array('post_type' => 'carnets')); ?>
                    <?php while ($my_query->have_posts()) :
                    $my_query->the_post(); ?>
                    <?php if ($first == '1') : ?>
                    <?php $first++; ?>
                    <div class="item active">
                        <?php else : ?>
                        <div class="item">
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-md-3 col-xs-3">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></a>
                                </div>
                                <?php $my_query->the_post(); ?>
                                <div class="col-md-3 col-xs-3">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></a>
                                </div>
                                <?php $my_query->the_post(); ?>
                                <div class="col-md-3 col-xs-3">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></a>
                                </div>
                                <?php $my_query->the_post(); ?>
                                <div class="col-md-3 col-xs-3">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></a>
                                </div>
                            </div>
                        </div>
                        <?php $inc_tmp++; ?>

                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                    <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#media" class="right carousel-control">›</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
