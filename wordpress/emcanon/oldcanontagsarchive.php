<? get_header(); ?>

<div id="content-wrap" class="container"><div id="content">  
 
  <h2 class="sep"><?php single_tag_title(); ?></h2>
 
  <? if (have_posts()) : while (have_posts()) : the_post(); ?> 

      <? get_template_part('index', 'writeup'); ?>

  <? endwhile; endif; ?>

</div><!-- content -->
  
<? get_sidebar(); ?>
  
</div>

<? get_footer(); ?>