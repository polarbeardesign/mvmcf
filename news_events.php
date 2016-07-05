<!DOCTYPE html>
<html>
  <title></title>

  <script type="text/javascript">
  var doc = document.documentElement;
  doc.setAttribute('data-useragent', navigator.userAgent);
  </script>

  <link rel="stylesheet" href="inc/ie-hacks.css" type="text/css" media="screen">
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">

  
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
</head>

<body>

<div id="container">

<header>
    <?php include('inc/header.php') ?>
</header>

<nav>
  <?php include('inc/nav.php') ?>
</nav>

<section class="main">
  <article>

    <h1>Newsletters &amp; Events</h1>
    <hr />

<img src="img/Madisonian_ad_website.jpg" width="100%" />
    <hr />

    <h2>Newsletters</h2>
    <div class="row">
    <div class="cell" style="width: 30%;">
    <p>Current</p>
    <a href="newsletters/MV_Newsletter_2016_ONLINE.pdf"><img hspace="1" alt="The Madison Valley Medical Center Newsletter" vspace="1" src="img/2016_newsletter_thumb.jpg" width="169" height="217" alt="2016Newsletter" /></a>

    </div>
    <div class="cell" style="border-left: 1px solid #ddd; padding: 0 2em; width: 60%;">
        <p><a href="newsletters/MV_Newsletter_2016_ONLINE.pdf">MVMCF Newsletter 2016</a></p>
    </div></div>

  </article>

  <section class="sidebar">
      
      <?php include("sb_donate.php"); ?>
      
      <h1>What's New?</h1>

      We would like to thank all our donors for more than $100,000.00 raised during the Annual Holiday Appeal. 

      <?php include("sb_mvmc.php"); ?>
  </section>
</section>

<footer>
  <div class="copyright">
    <?php include('inc/footer.php') ?>
  </div>
</footer>

</div>

</body>

</html>