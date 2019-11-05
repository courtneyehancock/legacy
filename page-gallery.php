<?php /*Template Name: Gallery Page Template*/ ?>
<?php get_header(); ?>


<div class="container-fluid services-page">
  <div class="row">
    <div class="col-md-12">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-gallery'); ?>
    </div>
  </div>
</div>

<div class="container services-page">
  <div class="row">
    <div class="col-md-12">
      <!--Photo Gallery Widget-->
      <?php dynamic_sidebar('photo-gallery'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
