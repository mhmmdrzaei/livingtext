<?php get_header();  ?>

<div class="main">
  <div class="container">
    <section class="entry-content" aria-label="latest version">
    <?php $args = array( 'post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => 1 );
      query_posts( $args ); // hijack the main loop
      while ( have_posts() ) : the_post();
    ?>
     <!--  <div class="line"></div> -->
      <section class="mainPost">
        <?php
        the_content();
        ?>
      </section>
      <div class="line"></div>
          

       <?php endwhile; ?>
      <?php wp_reset_query();?> 
    </section>
    <h1>Archives</h1>
    <ul id='archives' aria-label="Living Text Archives" >
    <?php $args = array( 'post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => -1 );
      query_posts( $args ); // hijack the main loop
      while ( have_posts() ) : the_post();
    ?>
    
      <li class="archive">
        <div class="circle"></div>
       <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
      </li>


          

       <?php endwhile; ?>
    </ul>
      <?php wp_reset_query();?> 


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>