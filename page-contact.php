<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header(); ?>


<div class="container-fluid services-page">
  <div class="row">
    <div class="col-md-12">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-contact'); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 text-center">
      <!--Business Card Img Widget-->
      <?php dynamic_sidebar('business-card-contact'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
