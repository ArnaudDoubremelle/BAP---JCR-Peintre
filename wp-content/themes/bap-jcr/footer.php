<!-- Footer -->
</body>
  <?php wp_footer(); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.flexisel.js"></script>

<script type="text/javascript">

  $(window).load(function() {
    $("#posts-slider").flexisel({
      visibleItems: 4
    });
  });
</script>

  <script src="<?php bloginfo( 'template_directory' ); ?>/js/main.js"></script>
</html>
