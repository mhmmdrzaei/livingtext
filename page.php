<?php get_header();  ?>

<div class="main">
  <div class="container">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="pageContent ">
        <?php the_content(); ?>
        
      </div>
        

      <?php endwhile; // end the loop?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>