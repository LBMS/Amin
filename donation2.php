<?php

require 'config.php';

?>


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
<!-- liteAccordion is Homepage Only -->
<style type="text/css">
       
        #divleft{
            width:50%;
            float: left;
        }
        #divright{
            display: block;
            margin-left:50%;
        } 
		
		table
{
	border:2px solid #F6F;
	padding:10px;
	width:420px;
	height:300px;

	box-shadow:10px 10px 10px #CC6699;
	color:#30F;
	margin-top:40px;
	margin-left:50px;
}
th
{
	color:#F30;
	background-color:#0FF;
}
.Odd
{
	background-color:#C99;
}
		
		
</style> 
</head>

<body id="top">
<div class="wrapper row1" style="border:thick solid #009">
  <div id="header" class="clear" >
    <div class="fl_left1" align="right" >
      <h1><a href="index.php">Louis Braille Memorial School For The Sight Less(High)</a></h1>
      <CENTER><p><FONT size="+1">SPONSORED BY GOVT. OF WEST BENGAL</FONT></p></CENTER>
    </div>
   <p align="left" > <img src="images/logout.png" width="80px" height="60px"  /></p>
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
		 
        </ul>
      </li>
      <li><a href="admissionEntry.html">Admission</a></li>
      <li><a href="result.php">Result</a></li>
      
          
      <li class="active"><a href="donation1.php">Donation</a></li>
      <li><a href="alumni.php">Alumni</a></li>
      <li><a href="donor.php">Donors</a></li>
      <li ><a href="gallery.html">Gallery</a></li>
	  <li ><a href="contact.html">Contact Us</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->



<!-- login logout -->
<div id="divleft">
<table><tr><td>

<img src="images/halen.JPG" width="95%"></td></tr></table>


</div>


<div id="divright"  >

<form name="signup" action="" method="post">
<table border="0">
<tr>
<th>FIRST NAME:</th><TD><input type="text" name="fname" required="required" /></TD></tr>
<tr>
<th>LAST NAME:</th><TD><input type="text" name="lname" required="required" /></TD></tr>
<tr>
<th>GENDER:</th><TD><input TYPE="radio" name="gender" required="required" />MALE
<input TYPE="radio" name="gender" required="required" />FEMALE</TD></tr>
<tr>
<th>EMAIL:</th><TD><input type="email" name="email" required="required" /></TD></tr>
<tr>
<th>PASSWORD:</th><TD><input type="password" name="password" required="required" /></TD></tr>
<tr>
<th>MOBILE:</th><TD><input type="text" name="mobile" required="required" /></TD></tr>
<tr align="center">
<TD colspan="2"><input type="submit" name="submit1" value="signup"/></TD></tr>
</table>
</form>
</div>
<?php
if(isset($_POST['submit1'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile']; 
	
$sql="insert into member_reg(`password`,`firstname`,`lastname`,`mail`,`gender`,`phone`) values('$password','$fname','$lname','$email','$gender','$mobile')";
	 mysql_query($sql);
header("location:donation1.php");
}
?>
		<!-- end lohin logout -->
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Louis Braille Memorial School For The Sight Less(High)</a></p>
    <p class="fl_right">Powred by <a target="_blank" href="#" title="My Website Templates"><b><u>  Sovon & Aminuddin</u></b></a></p>
  </div>
</div>

</body>
</html>