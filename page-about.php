<?php /*Template Name: About Page Template*/ ?>
<?php get_header(); ?>


<div class="container-fluid about-page">

  <div class="row align-items-center">
    <div class="col-md-4 text-center">
      <!-- About Brief Text Widget-->
      <?php dynamic_sidebar('about-brief-home'); ?>
    </div>
    <div class="col-md-auto">
      <!--Img Widget-->
      <?php dynamic_sidebar('right-img-home'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
