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
$args1 = array(
    'post_type' => 'repérage',
    'order'     => 'DESC',
    'posts_per_page' => '-1',
);
?>
<div class="slider vcenter">
    <?php $my_query = new WP_Query(array('post_type' => 'peintures', 'orderby' => 'title', 'order'   => 'DESC')); ?>
    <?php while ($my_query->have_posts()) :
        $my_query->the_post(); ?>
        <div><div class="image"><a href="#<?php echo $post->post_name ?>"><?php the_post_thumbnail(); ?></a></div></div>
    <?php endwhile;
    wp_reset_postdata(); ?>
</div>

<a href="//vimeo.com/<?php the_field(url_video)?>" data-lity>
    <div class="col-md-6 col-sm-6  col-xs-12 mg-top">
        <div class="grid">
            <figure class="effect-oscar">
                <div id="<?php the_field(url_video)?>" class="vimeo "></div>
                <figcaption>
                    <h2><?php the_title(); ?></h2>
                    <div>
                        <?php the_content() ?>
                    </div>

                </figcaption>
            </figure>
        </div>

    </div>
</a>


<?php get_footer()?>
