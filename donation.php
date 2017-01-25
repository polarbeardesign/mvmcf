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
    <h1>Donate Now</h1>

    <p>Funds raised through the Madison Valley Medical Center Foundation provide for programs and services that would not be possible without the support of a caring community. We want the Medical Center to continue providing you with the highest quality health care today and in the future. Your gift makes a difference and is the easiest way to make an impact today.</p>

    <div style="padding-left: 250px;">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="MB2WRTZD3DWK4">
    <input type="image" src="photos/donate_button.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
    </div>

    <p>Our donation system's security measures keep your personal information safe. MADISON VALLEY MEDICAL CENTER FOUNDATION INC works with PayPal to securely process your online credit card donation.  Donors do not need a PayPal account to process their donation, as PayPal Accepts All Major Credit Cards. This transaction will appear on your credit card statement as. "MADISONVALL" .  Our Privacy Policy - <a href="privacypolicy.php">click here to view our complete privacy policy</a>.</p>

    <p>Contributions can be made online above or mailed directly to:</p>

    <p style="padding-left: 3em;"><strong>MVMC Foundation</strong><br />
    PO Box 993<br />
    Ennis, MT 59729</p>

    <h2>Gift Designation</h2>

    <p>Your donation will go where it is needed most, unless you specify a particular location for it to be used. Under the direction of the Board of Directors, Madison Valley Medical Center Foundation retains control over the use and distribution of donated funds in furtherance of its mission.</p>

    <h2>Good Stewardship</h2>

    <p>We take seriously our responsibility to contributors, to those residents in our community counting on our help, to be wise stewards of funds entrusted to us. See our annual report and Form 990 financial statement for more information.</p>

    <p>The Madison Valley Medical Center Foundation (EIN 81- 0453395) is organized as a Montana charitable public benefit corporation as described in Internal Revenue Code section 501(c)(3). Donors are entitled to a charitable income tax deduction; the tax code requires us to state that no goods or services were exchanged for the contribution.</p>

    <p>Print and Mail Forms provided below for your convenience.</p>
    <p>You will need Acrobat Reader to view these forms.</p>

    <p><a href="forms/partner_form.pdf">Printable "Partner" Donation Form</a> - print and mail this form with your gift. We will send you your partner I'm A Partner Donation Formbumper sticker with your receipt. We hope you will display the bumper sticker prominently and encourage community support for the Madison Valley Medical Center.</p>


    <p><a href="forms/partner_form.pdf">Printable Credit Card Donation Form</a> - print and mail this form with your cc information (or donate online line above). If you prefer to make your credit card donation by telephone, please call the MVMC Foundation Office at 406-682-6641. We will need your name as it appears on the card, the credit card billing address, credit card expiration date and your telephone number.</p>
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