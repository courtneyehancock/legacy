<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-4 p-2">
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
          ));
        ?>
      </div>
      <div class="col-sm-4 p-2">
        <?php dynamic_sidebar('middle-footer'); ?>
      </div>
      <div class="col-sm-4 p-2">
        <?php dynamic_sidebar('right-footer'); ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
