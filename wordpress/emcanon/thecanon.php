<?php
/*
Template Name: The Complete Canon
*/
?>

<? get_header(); ?>

<div id="content-wrap" class="container"><div id="content">  

<?
  $tags = get_terms('canon_tags');
  if ($tags && !is_wp_error($tags)) : foreach ($tags as $tag) :
?>

  <section id="<?= $tag->name; ?>">

    <h2 class="sep"><?= $tag->name; ?></h2>
      
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
  </section>

<? endforeach; endif; ?>

</div><!-- content -->
  
<? get_sidebar(); ?>
  
</div>

<? get_footer(); ?>