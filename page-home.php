<?php /*Template Name: Home Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-home'); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <!-- About Brief Text Widget-->
      <?php dynamic_sidebar('about-brief-home'); ?>
    </div>
    <div class="col-m-4">
      <!--Img Widget-->
      <?php dynamic_sidebar('right-img-home'); ?>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <!--Small Banner Img Widget-->
      <?php dynamic_sidebar('small-banner-home'); ?>
    </div>
  </div>

  <div class="row section-margins">
    <div class="twelve columns">
      <!--Service Brief Widgets-->
      <?php dynamic_sidebar('service-brief-home'); ?>
    </div>
  </div>
</div>

  <div class="row">
    <!--Work Brands Slider Widget-->
    <?php dynamic_sidebar('brands-home'); ?>
  </div>

<div class="container">
  <div class="row section-margins">
    <div class="six columns">
      <!--Img Widget-->
      <?php dynamic_sidebar('left-img-home'); ?>
    </div>
    <div class="six columns">
      <!-- Contact Brief Text Widget-->
      <?php dynamic_sidebar('contact-brief-home'); ?>
    </div>
  </div>

  <div class="row">
    <!--Feature Posts/Case Studies Widget-->
    <?php dynamic_sidebar(''); ?>
  </div>
</div>

<?php get_footer(); ?>
