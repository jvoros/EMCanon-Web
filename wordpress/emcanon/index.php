<? get_header(); ?>

<div class="canon">
  
  <!-- latest -->
  <section id="latest">

    <h2 class="sep">LATEST REVIEWS</h2>

    <div class="writeups">

      <? 
        $latest = new WP_Query('post_type=canon&category_name=reviews&posts_per_page=2');
        if ( $latest->have_posts() ) : while ( $latest->have_posts() ) : $latest->the_post();

        get_template_part( 'index', 'writeup' );

        endwhile; endif; wp_reset_postdata();
      ?>
      
    </div>

  </section>
  
  <?
    $tags = get_terms('canon_tags');
    if ($tags && !is_wp_error($tags)) : foreach ($tags as $tag) :
  ?>      
  
  <section id="<?= $tag->name; ?>">
  
    <h2 class="sep"><?= $tag->name; ?></h2>
    
    <div class="writeups">
      <?
        $wu_args = array(
          'posts_per_page' => -1,
          'order' => 'DESC',
          'meta_key' => 'paper_year',
          'orderby' => 'meta_value',
          'post_type' => 'canon',
          'tax_query' => array(
            array(
              'taxonomy' => 'canon_tags',
              'field' => 'slug',
              'terms' => $tag->slug
              )
            ),
          );
        $wu = new WP_Query($wu_args);
        if ( $wu->have_posts() ) : while ( $wu->have_posts() ) : $wu->the_post();

        get_template_part( 'index', 'writeup' );

        endwhile; endif; wp_reset_postdata();
      ?>
    </div>
    
  </section>  
  
  <?
    endforeach; endif;
  ?>

</div>

<? get_footer(); ?>