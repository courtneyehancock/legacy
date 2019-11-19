<?php /*Template Name: About Page Template*/ ?>
<?php get_header(); ?>


<div class="container-fluid about-page">

  <div class="row align-items-center">
    <div class="col-md-6">
      <!-- About Brief Text Widget-->
      <?php dynamic_sidebar('about-left-brief-info'); ?>
    </div>
    <div class="col-md-6">
      <!-- About Right Img Widget-->
      <?php dynamic_sidebar('about-right-brief-info'); ?>
    </div>
  </div>

  <div class="row align-items-center">
    <div>
      <!-- About Brief Text Widget-->
      <?php dynamic_sidebar('about-bottom-left-brief-info'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
