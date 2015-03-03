<div id="sidebar">
  
  <div id="canon-menu">
    <h2>SECTIONS</h2>
    <ul>
      
      <li><a href="<?bloginfo('url'); ?>/category/blog">BLOG</a></li>
      <li><a href="<?bloginfo('url'); ?>/category/reviews">REVIEWS</a></li>
      <?
        $sections = get_terms('section');
        if ($sections && !is_wp_error($sections)) : foreach ($sections as $section) :
      ?>

        <li><a href="<?= get_term_link($section); ?>"><?= $section->name; ?></a></li>

      <? endforeach; endif; ?>

      <li><a href="<? bloginfo('url'); ?>/canon/">EVERYTHING</a></li>

    </ul>
  </div>
  
  <h2 class="sep-light">UPCOMING REVIEWS</h2>
  <ul>
    <li><a>Validity of a set of clinical criteria to rule out injury to the cervical spine in patients with blunt trauma. National Emergency X-Radiography Utilization Study Group.</a></li>
    <li><a>End-tidal carbon dioxide and outcome of out-of-hospital cardiac arrest.</a></li>
    <li><a>Ability of CT to alter decision making in elderly patients with acute abdominal pain.</a></li>
  </ul>
  
  <h2 class="sep-light">GET INVOLVED</h2>
  <p>Do you love evidenced-based medicine as much as we do? Are you interested in writing a review? Contact us.</p>
  
</div>