<article class="writeup">
  <div class="masthead">
    <ul class="tags">
      <? 
        $postid = get_the_ID();
        $url = get_site_url();
        $tags = get_the_terms( $postid, 'canon_tags');
        if ($tags && !is_wp_error($tags)) {
          foreach($tags as $tag) {
            echo "<li><a href='$url#$tag->name'>$tag->name</a></li>";
          }
        }
      ?>
    </ul>
    
    <h1 class="title">
      <a href="<? the_permalink(); ?>"><? the_title(); ?></a>
    </h1>
    <ul class="meta">
      <li class="year"><? $date = date_create_from_format('Ymd',get_field('paper_year')); echo $date->format('d M Y'); ?></li>
      <li class="author"><? the_field('paper_author'); ?> et al.</li>
      <li class="journal"><? the_field('paper_journal'); ?></li>            
    </ul>
    <div class="link"><a href="http://www.ncbi.nlm.nih.gov/pubmed/<? the_field('paper_id'); ?>"><i class="icon-link"></i>&nbsp;PubMed</a></div>
  </div>

  <? if (is_single()) : if($post->post_content != "") { the_content(); } else { echo "<p>No review yet. Do you want to write it?</p>"; } else : ?>
  
    <? if (has_excerpt()) : ?>
      <div class="excerpt"><? the_excerpt(); ?></div>
    <? endif; ?>

    <? if(in_category('reviews')) : ?>

      <a class="button" href="<? the_permalink(); ?>"><i class="icon-redo2"></i> READ REVIEW</a> <a class="button" href="#"><i class="icon-bubbles"></i> DISCUSS</a>

    <? endif; ?>
  
  <? endif; ?>
  


</article>