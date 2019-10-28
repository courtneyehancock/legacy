<?php get_header(); ?>  

<!-- Wordpress Loop -->  
<div class="container">
	<div class="row">
		<?php
		if(have_posts()){
			while(have_posts()){
				the_post(); ?>
				<div class="col-md-3">
          <h3 class="title"><?php the_title(); ?></h3>

          <?php the_post_thumbnail('medium'); ?>

          <p><?php echo "<span class='bold'>Published: </span>" . get_the_date(); echo " | "; echo "<span class='bold'>Written by: </span>" . get_the_author(); ?></p>

          <p> <?php the_excerpt(); ?> </p>

          <p class="button"><a href="<?php the_permalink(); ?>">Read More</a></p>
        </div>
      <?php } //end while loops
    } //end if PDOStatement
    ?>
  </div>
</div>



      <?php get_footer(); ?>
