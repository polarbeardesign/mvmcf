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

    <h2>Newsletters</h2>
    <div class="row">
    <div class="cell" style="width: 30%;">
    <p>Current</p>
    <a href="newsletters/mvmcf_News_letter_2015_web.pdf"><img hspace="1" alt="The Madison Valley Medical Center Newsletter" vspace="1" src="img/mvmcf_News_letter_2015_web.jpg" width="170" height="220" alt="2015 Newsletter" /></a>

    </div>
    <div class="cell" style="border-left: 1px solid #ddd; padding: 0 2em; width: 60%;">
        <p><a href="newsletters/mvmcf_News_letter_2015_web.pdf">MVMCF Newsletter 2015</a></p>
    </div></div>

  </article>

  <section class="sidebar">
      
      <?php include("sb_donate.php"); ?>
      
      <h1>What's New?</h1>

      <a href="newsletters/MVMCF2015_Annual_Report_web_FY_2014.pdf" target="_blank"><img border="0" alt="FY14 Annual Report" src="img/Annual_Report_FY2014.jpg" width="169"style="display: block; margin: 0 auto;" longdesc="newsletters/MVMCF2015_Annual_Report_web_FY_2014.pdf" /></a>

      <p style="text-align: center;"><a href="newsletters/MVMCF2015_Annual_Report_web_FY_2014.pdf" target="_blank">FY14 Annual Report</a></p>

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