<?php

include('inc/db_conn.php');

date_default_timezone_set("America/Chicago");

//==========================
// For days
//==========================

$sql_hours = "SELECT ";
$sql_hours .= "DATE_FORMAT(start_time, '%b %D') AS start_date ";
$sql_hours .= "FROM time_slots ";
$sql_hours .= "GROUP BY start_date ";
$sql_hours .= "ORDER BY start_time";

$total_hours = @mysql_query($sql_hours, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
$total_found_hours = @mysql_num_rows($total_hours);

$last_start_date = '';

do {

  if ($row['start_date'] != '')
  {
  if ($row['start_date'] != $last_start_date) 
   {
    $display_block_date .="<td><strong>" . $row['start_date'] . "</strong></td>";
    }
  }
}
while ($row = mysql_fetch_array($total_hours));

//==========================
// For time slots
//==========================

$sql_time_slots = "SELECT ";
$sql_time_slots .= "id, ";
$sql_time_slots .= "DATE_FORMAT(start_time, '%b %d') AS start_date, ";
$sql_time_slots .= "DATE_FORMAT(start_time, '%H:%i') AS start_time_f, ";
$sql_time_slots .= "DATE_FORMAT(end_time, '%H:%i') AS end_time_f ";
$sql_time_slots .= "FROM time_slots ";
$sql_time_slots .= "ORDER BY start_time_f, start_time";

$total_time_slots = @mysql_query($sql_time_slots, $connection) or die("Error #". mysql_errno() . ": " . mysql_error());
$total_found_time_slots = @mysql_num_rows($total_time_slots);
$row_color=($row_count%2)?$row_1:$row_2;

$last_hour = '';
$last_date = '';

do {

  if ($row['start_time_f'] != '')
  {
  if ($row['start_time_f'] != $last_hour) 
   {
$display_block .="<tr>
  <td><input type=\"checkbox\" name=\"time_slot_" . $row['id'] . "\" value=\"" . $row['id'] . "\">" . $row['start_time_f'] . "</td>";
  $last_hour = $row['start_time_f'];
    }
    else 
    {
$display_block .="
  <td><input type=\"checkbox\" name=\"time_slot_" . $row['id'] . "\" value=\"" . $row['id'] . "\">" . $row['start_time_f'] . "</td>";
  $last_hour = $row['start_time_f'];
    }
  if ($row['start_date'] == "Mar 31")
  {
  $display_block .="
  </tr>
  ";
  }
}
}
while ($row = mysql_fetch_array($total_time_slots));





//  <tr>
//    <td><input type=\"checkbox\" name=\"time_slot\" value=\"$value 00:00\">00:00</td>
//  </tr>


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<!-- DW6 -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Madison Valley Medical Center Foundation</title>
<meta name="description" content= "Madison Valley Medical Center (MVMC) Foundation supporting high quality health care with modern services and qualified professionals"/>
<meta name="keywords" content= "Madison Valley Medical Center Foundation, MVMCF, MVMC, Madison Valley Medical Center, MADISON VALLEY MEDICAL CENTER, Montana Healthcare,
Montana Hospital Foundations, Ennis Montana, Ennis, 59729" />
<META name="Donita_Powell_Ennis_Montana_406-682-4477"/>
<link rel="stylesheet" href="emx_nav_left.css" type="text/css">
<link rel="stylesheet" href="inc/gorge_styles.css" type="text/css">
<script type="text/javascript">
<!--
var time = 3000;
var numofitems = 7;

//menu constructor
function menu(allitems,thisitem,startstate){ 
  callname= "gl"+thisitem;
  divname="subglobal"+thisitem;  
  this.numberofmenuitems = 7;
  this.caller = document.getElementById(callname);
  this.thediv = document.getElementById(divname);
  this.thediv.style.visibility = startstate;
}

//menu methods
function ehandler(event,theobj){
  for (var i=1; i<= theobj.numberofmenuitems; i++){
    var shutdiv =eval( "menuitem"+i+".thediv");
    shutdiv.style.visibility="hidden";
  }
  theobj.thediv.style.visibility="visible";
}
				
function closesubnav(event){
  if ((event.clientY <48)||(event.clientY > 107)){
    for (var i=1; i<= numofitems; i++){
      var shutdiv =eval('menuitem'+i+'.thediv');
      shutdiv.style.visibility='hidden';
    }
  }
}
// -->
</script>
<style type="text/css">
<!--
.style1 {font-size: 90%}
.style2 {
	color: #FFFFFF;
	font-size: 90%;
}
.style3 {
	font-size: 100%;
	color: #000000;
}
.style8 {color: #666666}
.style9 {color: #999999}
.style13 {font-size: smaller}
.style22 {color: #8397B8}
.style17 {font-size: 75%}
.style23 {color: #FFFFFF}
.style25 {color: #334d55}
.style10 {color: #005fa9}
.style16 {color: #000000;
	font-weight: bold;
}
.style18 {color: #000000}
.style101 {color: #005fa9}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>

</head>
<body onmousemove="closesubnav(event);"> 
<div class="skipLinks">skip to: <a href="#content">page content</a> | <a href="pageNav">links on this page</a> | <a href="#globalNav">site navigation</a> | <a href="#siteInfo">footer (site information)</a> </div>
<div id="masthead"> 
  <h1 class="style1" id="siteName"><span class="style22">Welcome to the Madison Valley Medical Center Foundation</span>
    <!-- end globalNav --> 
  </h1>
 
</div> 
<!-- end masthead --> 
<div id="pagecell1"> 
  <!--pagecell1--> 
  <img alt="" src="tl_curve_white.gif" height="6" width="6" id="tl"> <img alt="" src="tr_curve_white.gif" height="6" width="6" id="tr"> 
  <div id="breadCrumb"></div> 
  <div id="pageName">
    <h2 class="style2 style3">&nbsp;</h2>
    <h2 class="style2 style3"><br>
      <br>
      <br>
      <br>
      <br>
      ...
      <br>
    </h2>
  </div> 
  <div id="pageNav"> 
     <div id="sectionLinks"> 
      <a href="index.htm">Home</a> <a href="aboutus.htm">About Us...</a>
      <a href="dollarsatwork.htm">Foundation Dollars <br>
      at Work</a>  <a href="donation.htm">Support the Foundation...</a> <a href="shopandsupport.htm">Shop &amp; Support</a> <a href="news_events.htm">Newsletters &amp; Events </a><a href="contactus.htm">Contact Us </a> <a href="http://www.mvmedcenter.org">Madison Valley <br>
      Medical Center</a></div> 
    <div class="relatedLinks">
      <p>Area Links <br>
        <br>
      <a href="http:\\www.ennischamber.com" title="Ennis Chamber">Ennis Chamber</a> <a href="http:\\www.madison.mt.gov" title="Madison County, MT">Madison County</a></p>
    </div> 
  </div> 
  <div id="content"> 
     <div class="feature">
<p>&nbsp;</p>
<h1>Gorge Fundraiser</h1>

<p>Enter your choice for the hour when the Madison river will gorge. Pick an hour, or several, and make your tax deductible donation to support the Madison Valley Medical Center Foundation (MVMCF). The individual correctly picking the hour the river gorges will win half the proceeds raised.</p>

<p>Use scroll bar at table bottom to scroll to future dates.</p>
<div class="story"> <img src="img/taken.gif" alt="slider" /> - boxes are taken, please make another selection   </div> 

<form id="gorge1" action="checkout.php" method="post">
<div class="row">
<div class="scrolls">
<div class="tables">
  <div class="cell">
<table width="100" class="hourly" cellspacing="0">
<tr >
  <?php echo $display_block_date ?>
</tr>
 <?php echo $display_block ?>
</table>
</div>
</div>
</div>
</div> 
<div style="clear: both;"></div>
<input type="submit" name="checkout" />
</form>

<!-- close row div -->




    <div class="story"> <img src="img/taken.gif" alt="slider" /> - boxes are taken, please make another selection   </div> 
</div> 
   <div id="siteInfo">     
     <div align="center" class="style8">
       <div align="left" class="style9"><span class="storyLeft"><a href="privacypolicy.htm">Privacy Policy</a> | <a href="sitemap.xml">Site Map</a> | &copy;2011 Madison Valley Medical Center Foundation, Inc. All rights reserved.</span></div>
     </div>
   </div> 
</div> 
<span class="storyLeft"><!--end pagecell1--> 
<br> 
<script type="text/javascript">
    <!--
      var menuitem1 = new menu(7,1,"hidden");
			var menuitem2 = new menu(7,2,"hidden");
			var menuitem3 = new menu(7,3,"hidden");
			var menuitem4 = new menu(7,4,"hidden");
			var menuitem5 = new menu(7,5,"hidden");
			var menuitem6 = new menu(7,6,"hidden");
			var menuitem7 = new menu(7,7,"hidden");
    // -->
    </script> 
</span>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22017961-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
