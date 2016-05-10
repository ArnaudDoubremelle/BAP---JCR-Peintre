<?php get_header() ?>
<?php
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>


<div id="top"></div>
<div class="slider">
    <?php $my_query = new WP_Query(array('tax_query' => array(
        array(
            'taxonomy' => 'categories',
            'terms' => $term->slug,
            'field' => 'slug'
        )
    ),)); ?>
    <?php while ($my_query->have_posts()) :
        $my_query->the_post(); ?>
        <div><div class="image"><a href="#<?php echo $post->post_name ?>"><?php the_post_thumbnail(); ?></a></div></div>
    <?php endwhile;
    wp_reset_postdata(); ?>
</div>

<?php $my_query = new WP_Query(array('tax_query' => array(
    array(
        'taxonomy' => 'categories',
        'terms' => $term->slug,
        'field' => 'slug'
    )
),)); ?>
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
