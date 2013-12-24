<!--<header class="banner navbar navbar-default navbar-static-top" role="banner"> -->
<header class="header">
  <div class="container">
    
    <div class="row">
      <div class="col-sm-7">
        <div class="logo-wrapper">
          <a href="<?php echo home_url(); ?>/">
            <h1 class="logo large-inverse-logo">Claire Tastes</h1>
          </a>
        </div>
      </div>
      <div class="col-sm-5 hidden-xs">
        <div class="social">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
            <i class="fa fa-rss fa-stack-1x "></i>
          </span>

          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
            <i class="fa fa-twitter fa-stack-1x "></i>
          </span>

          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
            <i class="fa fa-instagram fa-stack-1x "></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</header>

<nav class="hidden-xs" id="topnav" role="navigation">
  <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => ''));
    endif;
  ?>
</nav> 

