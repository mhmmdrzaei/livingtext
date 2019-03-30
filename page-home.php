<?php get_header();  ?>

<div class="main">
  <div class="container">
    <section class="entry-content" aria-label="latest version">
    <?php $args = array( 'post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => 1 );
      query_posts( $args ); // hijack the main loop
      while ( have_posts() ) : the_post();
    ?>
      <h2><?php the_title(); ?></h2>

        <?php
        the_content();
        ?>
          

       <?php endwhile; ?>
      <?php wp_reset_query();?> 
    </section>

    <section id="archives" aria-label="Living Text ArchivesArchives">
    <?php $args = array( 'post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => -1 );
      query_posts( $args ); // hijack the main loop
      while ( have_posts() ) : the_post();
    ?>
      <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
          

       <?php endwhile; ?>
      <?php wp_reset_query();?> 
    </section>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>