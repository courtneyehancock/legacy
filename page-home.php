<?php /*Template Name: Home Page Template*/ ?>
<?php get_header(); ?>

<div class="container-fluid">
  <div class="row video-hero">
    <div class="col-md-12">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-home'); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <!--Short Section w/Icons-->
      <?php dynamic_sidebar('service-brief-home'); ?>
    </div>
  </div>
</div>

  <div class="row">
    <div class="col-md-12">
      <!--Small Banner Img Widget-->
      <?php dynamic_sidebar('small-banner-home'); ?>
    </div>
  </div>

<div class="mt-5 mb-5">
  <div class="row align-items-center">
    <div class="col-md-4 text-center pl-5">
      <!-- About Brief Text Widget-->
      <?php dynamic_sidebar('about-brief-home'); ?>
    </div>
    <div class="col-md-8">
      <!--Img Widget-->
      <?php dynamic_sidebar('right-img-home'); ?>
    </div>
  </div>
</div>

<div class="container tony-home-background">
  <div class="row">
    <div class="col-md-4">
      <p><?php dynamic_sidebar('left-img-home'); ?></p>
    </div>
    <div class="col-md-6 shadow p-3 mb-5 bg-white tony-quote-text">
      <p><?php dynamic_sidebar('quote-home'); ?></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
