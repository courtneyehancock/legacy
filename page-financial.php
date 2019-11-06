<?php /*Template Name: Financial Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!--Financial Title Widget-->
      <?php dynamic_sidebar('financial-title-widget'); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <!--Financial Left Img Widget-->
      <?php dynamic_sidebar('financial-left-img-widget'); ?>
    </div>
    <div class="col-md-6">
      <!--Financial Right Text Widget-->
      <?php dynamic_sidebar('financial-right-text-widget'); ?>
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
