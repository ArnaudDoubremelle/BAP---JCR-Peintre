<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php $id = get_the_ID(); ?>
  <h3><?php the_title(); ?></h3>
  <?php the_content(); ?>
  <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
