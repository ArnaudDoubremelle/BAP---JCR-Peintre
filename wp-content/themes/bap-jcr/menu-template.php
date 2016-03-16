<div class="col-md-2 pull-right nav-menu">
  <a href="#" class="icon-close">
  <?php wp_nav_menu(array('theme_location' => 'side')); ?>
</div>
<div class="clearfix"></div>
<?php if(!is_page_template('page-peinture.php')){?>
	<div class="col-md-2 pull-right menu-icon">
  <h3 class="pull-right open-menu">MENU</h3>
</div>
<?php } 
	else{?>
		<div class="col-md-2 pull-right menu-icon">
		  <h3 class="pull-right open-menu white">MENU</h3>
		</div>
		<?php 
	}
?>




