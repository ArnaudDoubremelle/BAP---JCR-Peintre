<?php
/*template name: atelier*/
/**
 * Created by PhpStorm.
 * User: Vasach
 * Date: 21/04/2016
 * Time: 18:57
 */

?>
<?php get_header()?>
<body>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args1 = array(
    'post_type' => 'atelier',
    'order'     => 'DESC',
    'pagination'=> true,
    'posts_per_page' => '4',
    'paged'     => $paged
);
?>
<div class="container">

    <div class="row">
        <?php $wp_query = new WP_Query($args1); ?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <a href="//vimeo.com/<?php the_field(url_video)?>" data-lity>
            <div class="col-md-6 col-sm-6 col-xs-12 mg-top">
                <div class="grid">
                    <figure class="effect-bubba">
                        <div id="<?php the_field(url_video)?>" class="vimeo "></div>
                        <figcaption>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <p><i class="fa fa-play fa-5x" aria-hidden="true"></i></p>
                        </figcaption>
                    </figure>
                </div>

            </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <?php
    // clean up after our query
    wp_reset_postdata();
    ?>
</div>



<?php get_footer()?>
