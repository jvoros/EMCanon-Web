<? get_header(); ?>

<div id="content-wrap" class="container"><div id="content">  
  
  <!-- latest -->
  <section id="latest">

    <h2 class="sep">LATEST REVIEWS</h2>

    <? 
      $latest = new WP_Query('post_type=canon&category_name=reviews&posts_per_page=1');
      if ( $latest->have_posts() ) : while ( $latest->have_posts() ) : $latest->the_post();

      get_template_part( 'index', 'writeup' );

      endwhile; endif; wp_reset_postdata();
    ?>
      
  </section>
  
  <!-- blog -->
  <section id="blog">  

    <h2 class="sep-light">FROM THE BLOG</h2>
    
    <? 
      $blog = new WP_Query('category_name=blog&posts_per_page=1');
      if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post();

      get_template_part( 'index', 'blog' );

      endwhile; endif; wp_reset_postdata();
    ?>

  </section>

      
  <!-- recent -->
  <section id="recent">
  
    <h2 class="sep">RECENT REVIEWS</h2>
    
    <? 
      $recent = new WP_Query('post_type=canon&category_name=reviews&posts_per_page=2&offset=1');
      if ( $recent->have_posts() ) : while ( $recent->have_posts() ) : $recent->the_post();

      get_template_part( 'index', 'writeup' );

      endwhile; endif; wp_reset_postdata();
    ?>
  
  </section>
  
</div><!-- content -->
  
<? get_sidebar(); ?>
  
</div>

<? get_footer(); ?>