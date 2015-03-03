<? get_header(); ?>

<div id="content-wrap" class="container"><div id="content"> 

  <?  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h2 class="sep-light">FROM THE BLOG</h2>
    <div class="review">

      <? get_template_part('index', 'blog'); ?>

    </div>

  <? endwhile; endif; ?>
  
</div><!-- content -->
  
<? get_sidebar(); ?>
  
</div>

<? get_footer(); ?>