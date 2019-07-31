<?php get_header(); ?>

<div class="main">
  <div class="container">
       <div class="line"></div>
      <section class="mainPost">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


            <?php
            the_content();
            ?>
        </div><!-- #post-## -->

      <?php endwhile; // end of the loop. ?>
             <div class="entry-utility">
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
               </section>
          <div class="line"></div>
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