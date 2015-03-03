<? get_header(); ?>

<div id="content-wrap" class="container"><div id="content">  
 
  <? 
    if(is_category('blog')) { 
      $h2class = "sep-light";
    } else { 
      $h2class = "sep"; 
    } 
  ?>
  
  <h2 class="<?= $h2class ?>"><? single_cat_title( '', true ); ?></h2>
  
  <? if (have_posts()) : while (have_posts()) : the_post(); ?> 

    <? if ('canon' == get_post_type()) { $template = "writeup"; } else { $template = "blog"; } ?>
    <? get_template_part('index', $template); ?>

  <? endwhile; endif; ?>

</div><!-- content -->
  
<? get_sidebar(); ?>
  
</div>

<? get_footer(); ?>