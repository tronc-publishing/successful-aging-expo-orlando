<?php

  function makeNavLinks($navType) {
    $pages = ['index', 'schedule', 'entertainment', 'exhibitors', 'location', 'contact-us'];

    foreach($pages as $page) {
      switch ($page) {
        case 'index':
          $title = 'Home';
          break;
        case 'contact-us':
          $title = 'Contact Us';
          break;
        default:
          $title = ucwords($page);
          break;
      }

      $class = $page == basename($_SERVER['PHP_SELF'], '.php') ? 'active' : '';

      switch($navType) {
        case 'mobile':
          echo "<li class=\"{$class}\"><a href=\"{$page}.php\">{$title}</a></li>";
          break;
        case 'desktop':
          if ($page == 'contact-us') { $class = ''; }
          echo "<li><a class=\"section-link {$class}\" href=\"{$page}.php\">{$title}</a></li>";
          break;
      }
    }
  }

?>

<!doctype html>
<html>
    <head class="no-js" lang="en">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="Chicago Tribune">

        <title>Orlando Sentinel Successful Aging Expo Orlando | Orlando Sentinel</title>
        <meta name="description" content="The Orlando Sentinel invites you to our Successful Aging Expo on Sunday, February 18, 2018 featuring expert speakers and exhibitors.">
        <link rel="shortcut icon" href="images/favicon.png" />

        <link type="text/css" rel="stylesheet" href="css/normalize.css" />
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="css/desResponsive-grid.css" />
        <link type="text/css" rel="stylesheet" href="css/slick/slick.css" />
        <link type="text/css" rel="stylesheet" href="css/slick/slick-theme.css" />
        <link type="text/css" rel="stylesheet" href="css/form.css" />
        <link type="text/css" rel="stylesheet" href="css/main.css" />

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-109856271-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>

      <nav id="mobileNav">
        <div class="mobileBox">
          <ul>
            <?php makeNavLinks('mobile'); ?>
          </ul>
        </div>
      </nav>

      <div class="theme-wrap">

        <header id="header" class="whtBar">
          <div class="container flex alpha omega clearfix">
            <nav id="mainNav" class="clearfix" role="navigation">
              <div class="logo">
                <a href="index.php"><img src="images/successful-aging-expo-orlando-sentinel-logo.png" alt="Orlando Sentinel Successful Aging Expo - Logo" /></a>
              </div>
              <div class="subMenu">
                <ul>
                  <?php makeNavLinks('desktop'); ?>
                </ul>
                <div class="mobileBtn fr">
                  <a class="mNavBtn" href="#">
                    <span class="hamNav">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                  </a>
                </div>
              </div>
            </nav>
          </div>
        </header>
