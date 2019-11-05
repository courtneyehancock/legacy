<?php /*Template Name: Services Page Template*/ ?>
<?php get_header(); ?>


<div class="container-fluid services-page">
  <div class="row">
    <div class="col-md-12">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-services'); ?>
    </div>
  </div>
</div>

<div class="container services-page">
  <div class="row">
    <div class="col-md-6">
      <!--Middle left image widget-->
      <?php dynamic_sidebar('middle-left-img-widget-services'); ?>
    </div>

    <div class="col-md-6">
      <!--Middle right text widget-->
      <?php dynamic_sidebar('middle-right-text-widget-services'); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
