<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-12 vcenter ">
                <div class="tableau">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('', array('class' => 'img-responsive single-img center-block ')); ?>
                    <?php endif ?>
                    <div class="info">
                        <div class="info-text">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <p class="cadre text-center"><?php the_title(); ?></p>
                </div>

                <div class="row">
                    <div
                        class=" col-md-offset-4 col-sm-offset-1 col-md-4 col-sm-10 col-xs-12 cadrecaption invisible animated">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <span class="cadreclose">x</span>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!--  --><?php //$id = get_the_ID(); ?>
<!--  <div class="singlepaint">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col-md-offset-3 col-md-5">-->
<!--          --><?php //the_post_thumbnail('', array('class' => 'imgcenter img-responsive')); ?>
<!--        </div>-->
<!--        <div class="col-md-offset-1 col-md-3">-->
<!--          <div class="toile">-->
<!--            <h3>--><?php //the_title(); ?><!--</h3>-->
<!--            --><?php //the_content(); ?>
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<?php //endwhile; endif; ?>

<?php get_footer(); ?>
