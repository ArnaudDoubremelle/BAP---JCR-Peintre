<?php
/*
    Template Name: galerie
*/
?>
<?php get_header(); ?>

<!-- Main -->
<div class="container " >
  <div class='row'>
    <div class='col-md-12'>
      <div class="carousel slide media-carousel" id="media">
       
        <div class="carousel-inner">
          <div class="item  active">
             <div class="row">
              <?php $my_query = new WP_Query(array('post_type' => 'galerie', 'posts_per_page' => '4')); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        
              <div class="col-md-3 col-xs-3">

                 
    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></a>

                               
                         
                              
                            </div>
                            <?php endwhile; wp_reset_postdata();?>
                            
                            </div>
          </div>
           <?php $my_query = new WP_Query(array('post_type' => 'galerie', 'offset' => '4')); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <div class="item">
            <div class="row" >
              <div class="col-md-3 col-xs-3" style="vertical-align:middle">
                <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></a>
              </div>
            </div>
          </div>
          <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
