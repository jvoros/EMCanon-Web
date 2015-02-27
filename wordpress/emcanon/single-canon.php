<? 
  get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

  <h2 class="sep">A CLASSIC IN EMERGENCY MEDICINE</h2>
  <div class="review">
  
<?  
  get_template_part( 'index', 'writeup' );
  endwhile; endif;
?>

  </div>
  
<?
get_footer(); 
?>