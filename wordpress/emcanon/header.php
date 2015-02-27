<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EM:Canon</title>
    <?php wp_head(); ?>

    <!-- Stylesheet -->
    <link href="<? bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    
  <body>    
    
    <div id="wrap">
      
      <nav id="menu">
        <a href="<? bloginfo('url'); ?>"><img id="menu-logo" src="<? bloginfo('template_url'); ?>/img/logo-white.svg" /></a>
        <ul id="spymenu">
          <li id="homelink"><a href="<? bloginfo('url'); ?>">HOME</a></li>
          <? $url = get_site_url(); ?>
          <li><a href="<?= $url ?>#latest">latest</a></li>
          <?            
            $tags = get_terms('canon_tags');
            if ($tags && !is_wp_error($tags)) {
              foreach ($tags as $tag) {
                echo "<li><a href='$url#$tag->name'>$tag->name</a></li>";
              }
            }
          ?>
<!--          <li><a href="#">About Us</a></li>-->
        </ul>
        <div class="tagline">A collection of the most important <br>papers in <br><strong>Emergency Medicine</strong></div>
      </nav>

      <div id="header">
        <a id="menu-toggle"><i class="icon-menu"></i></a>
        <img src="<? bloginfo('template_url'); ?>/img/logo-white.svg" alt="EMCanon" />
      </div>

      <div id="content">