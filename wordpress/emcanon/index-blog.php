<article class="blog">
  
  <h1 class="title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h1>
  
  <div><span class="date"><? the_date('d M Y'); ?></span> by <span class="author"><a><? the_author(); ?></a></span></div>

  <? if (is_single()) : the_content(); else : ?>
    <div class="excerpt"><? the_excerpt(); ?></div>
  <? endif; ?>

</article>