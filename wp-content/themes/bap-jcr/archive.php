<?php get_header() ?>
<?php
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<!-- Main -->
<div class="container-slider">
    <ul id="posts-slider">
        <?php $my_query = new WP_Query(array('tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'terms' => $term->slug,
                'field' => 'slug'
            )
        ),)); ?>
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
