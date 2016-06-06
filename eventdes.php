<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LBMS</title>

<link href="themes/5/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/5/js-image-slider.js" type="text/javascript"></script>
   
	<link href="layout/styles/starburst.css" rel="stylesheet" type="text/css" />
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
</head>
<audio src="images/amra.mp3"  loop="true" autoplay="true"></audio>
<body id="top">
<div class="wrapper row1" style="border:thick solid #009">
  <div id="header" class="clear" >
    <div class="fl_left" >
      <h1><a href="index.php">Louis Braille Memorial School For The Sight Less(High)</a></h1>
      <p>Makla,Uttarpara,Hooghly</p>
    </div>
   <p align="right" id="pic"> <img src="images/logout.png" width="60px" height="60px"  /></p>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li ><a href="index.php">Homepage</a></li>
      <li><a href="#">Profile</a>
        <ul>
          <li><a href="about_us.html">About Us</a></li>
           <li><a href="awareness.html">Awareness Program</a></li>
          <li><a href="award.php">Awards</a></li>
          <li><a href="mission.html">Mission</a></li>
          <li><a href="activities.html">Activities</a></li>
          <li><a href="stuff.php">Stuff List</a></li>
		  <li class="active"><a href="event.php">Events</a></li>
        </ul>
      </li>
      <li><a href="admissionEntry.html">Admission</a></li>
      <li><a href="result.php">Result</a></li>
      
          
      <li><a href="donation.php">Donation</a></li>
      <li><a href="alumni.html">Alumni</a></li>
      <li><a href="donor.php">Donors</a></li>
      <li ><a href="gallery.html">Gallery</a></li>
	  <li ><a href="contact.html">Contact Us</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>




<div  style="margin-left:30px; margin-top:40px; ">
<?php
include('config.php');
$_SESSION['id']=$_GET['id'];
$id1=$_SESSION['id'];
$sql="select * from event where id='$id1'";
$res=mysql_query($sql);
$r=mysql_fetch_assoc($res);
echo($r['description']);

?>
</div>
<div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Louis Braille Memorial School For The Sight Less(High)</a></p>
    <p class="fl_right">Template by <a target="_blank" href="#" title="My Website Templates">My Templates</a></p>
  </div>
</div>

</body>
</html>