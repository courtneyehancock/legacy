<?php /*Template Name: Training Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!--Training Title Widget-->
      <?php dynamic_sidebar('training-title-widget'); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <!--Training Left Img Widget-->
      <?php dynamic_sidebar('training-left-img-widget'); ?>
    </div>
    <div class="col-md-6">
      <!--Training Right Text Widget-->
      <?php dynamic_sidebar('training-right-text-widget'); ?>
    </div>
  </div>
</div>

  <div>
    <div class="row">
      <div class="col-md-12 pt-5">
        <!--Small Banner Widget-->
        <?php dynamic_sidebar('small-banner-services'); ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
