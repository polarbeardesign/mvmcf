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

  </article>

  <section class="sidebar">
      
      <?php include("sb_donate.php"); ?>
      
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