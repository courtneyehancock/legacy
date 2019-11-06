<?php /*Template Name: Events Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!--Events Title Widget-->
      <?php dynamic_sidebar('events-title-widget'); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <!--Events Left Img Widget-->
      <?php dynamic_sidebar('events-left-img-widget'); ?>
    </div>
    <div class="col-md-6">
      <!--Events Right Text Widget-->
      <?php dynamic_sidebar('events-right-text-widget'); ?>
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
