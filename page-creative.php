<?php /*Template Name: Creative Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!--Creative Title Widget-->
      <?php dynamic_sidebar('creative-title-widget'); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <!--Creative Left Img Widget-->
      <?php dynamic_sidebar('creative-left-img-widget'); ?>
    </div>
    <div class="col-md-6">
      <!--Creative Right Text Widget-->
      <?php dynamic_sidebar('creative-right-text-widget'); ?>
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
