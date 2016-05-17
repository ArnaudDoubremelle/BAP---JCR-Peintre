<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-2">
           <!-- <a href="peintures"><i class="fa fa-long-arrow-left fa-lg" aria-hidden="true"></i> Retour Galerie</a>-->
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-4 vcenter ">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('',array('class'=>'img-responsive single-img center-block ')); ?>
                <?php endif ?>
                <div class="clearfix"></div>
                <div class="col-md-offset-3 col-md-1 col-sm-1 col-xs-2  ">
                    <p class=" cadre text-center"><?php the_title(); ?></p>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-offset-4 col-sm-offset-2 col-md-4 col-sm-8 col-xs-12 cadrecaption invisible animated">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <span class="cadreclose">x</span>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
        </div>
    <div class="clearfix"></div>
    <div class="row">
        <?php get_template_part('template-contact');?>
    </div>
    </div>


<?php get_footer(); ?>
