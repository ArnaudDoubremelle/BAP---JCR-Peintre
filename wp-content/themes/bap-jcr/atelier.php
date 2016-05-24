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


<div class="slider vcenter">
    <?php $my_query = new WP_Query(array('post_type' => 'repérage')); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <?php $image = get_field('url_video');?>
        <?php if(!empty($image)):?>
        <a href="//vimeo.com/<?php the_field('url_video')?>" data-lity><div id="<?php the_field('url_video')?>" class="vimeo image "></div></a>
            <?php else : ?>
        <div><div class="image"><a href="<?php the_post_thumbnail_url()?>" data-lity><?php the_post_thumbnail(); ?></a></div></div>
            <?php endif;?>
    <?php endwhile; ?>
</div>
<?php get_footer()?>
