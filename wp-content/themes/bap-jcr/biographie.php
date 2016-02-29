<?php
/*
    Template Name: biographie
*/
?>
<?php get_header(); ?>
<?php get_header()?>
<div class="container-fluid  backgroundgris ">
    <div class="row">
        <?php get_template_part('menu-template');?>
    </div>
    <div class="container backgroundbiographie mgt-80 ">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-12 center mgt-80">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-offset-1 col-md-10 center biographie mgt-50 pdb-50">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
<?php get_footer()?>
