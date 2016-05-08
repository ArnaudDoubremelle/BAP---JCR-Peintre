<?php
/*
Template Name: biographie
*/
?>
<?php get_header()?>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2 backgroundbiographie">
          <div class="row">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <div class="col-xs-12 text-center">
                      <h2 class=""><?php the_title(); ?></h2>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-xs-8 col-xs-offset-2 biographie">
                      <?php the_content(); ?>
                  </div>
              <?php endwhile; endif; ?>
          </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <?php get_template_part('template-contact');?>
    </div>
</div>
<?php get_footer()?>
