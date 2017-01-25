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
    <h1>Press Room</h1>

    <h2>Press Releases</h2>

    <div class="row news-item">
      <div class="news-pic">
        <a href="#">
          <img src="photos/160930_Montag_Rohrback_Davenport_Check.jpg" alt="Big Check" >
        </a>
      </div>
      <div class="news-title">
        <p>Kim Montag, President Madison Valley Medical Center Foundation Board of Directors presents Allen Rohrback Madison Valley Medical Center CEO and Dr. Maura Davenport a check for $225,000.00 that is restricted to the Medical Center's Women's Health/ Mammography program. Since the program's inception in January 2016, the Madison Valley Medical Center has seen more than 175 patients.</p>
        <p><em>Sep 30, 2016</em></p>
      </div>
    </div>

    <div class="row news-item">
      <div class="news-pic">
        <a href="#">
          <img src="photos/160930_Oliver_Plaque_Presentation.jpg" alt="recognition plaque" >
        </a>
      </div>
      <div class="news-title">
        <p>Kim Montag, President Madison Valley Medical Center Foundation Board of Directors presents Mary G. Oliver with a recognition plaque for 10 years of service with the Foundation. On behalf of the Foundation Board and Staff, we thank you for all you have done as a Board of Director to uphold and advance the Madison Valley Medical Center Foundation's Mission. You have been an inspiration to us all. Congratulations on a job well done!</p>
        <p><em>Sep 8, 2016</em></p>
      </div>
    </div>
  
     <div class="row news-item">
      <div class="news-pic smaller-pic">
        <a href="news/3_22_2016_Trapp_Elected_Vice_President_of_Montana_Healthcare_Communications_and_Development_Association.pdf">
          <img src="photos/hs_c_trapp_528_640.jpg" alt="Christie Trapp" >
        </a>
      </div>
      <div class="news-title">
        <p><a href="news/3_22_2016_Trapp_Elected_Vice_President_of_Montana_Healthcare_Communications_and_Development_Association.pdf">Trapp Elected Vice President of Montana Healthcare Communications & Development Association</a></p>
        <p><em>Mar 25, 2016</em></p>
      </div>
    </div> 
  
    
  </article>

  <section class="sidebar">
      
      <?php include("sb_donate.php"); ?>
      
      <h1>What's New?</h1>

       

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