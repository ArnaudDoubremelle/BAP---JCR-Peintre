<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php $id = get_the_ID(); ?>
  <div class="singlepaint">
    <h3><?php the_title(); ?></h3>
    <?php the_post_thumbnail('', array('class' => 'imgcenter img-responsive')); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12">
            <h5>Informations :</h5>
            <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
