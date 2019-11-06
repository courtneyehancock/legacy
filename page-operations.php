<?php /*Template Name: Internal Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!--Operations Title Widget-->
      <?php dynamic_sidebar('operations-title-widget'); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <!--Operations Left Img Widget-->
      <?php dynamic_sidebar('operations-left-img-widget'); ?>
    </div>
    <div class="col-md-6">
      <!--Operations Right Text Widget-->
      <?php dynamic_sidebar('operations-right-text-widget'); ?>
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
