<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php $id = get_the_ID(); ?>
    <div class="singlepaint">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-5">
                    <?php the_post_thumbnail('', array('class' => 'imgcenter img-responsive')); ?>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <div class="toile">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <?php get_template_part('template-contact');?>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
