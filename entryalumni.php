<?php

require 'config.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LBMS</title>

<link href="themes/5/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/5/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
	<link href="layout/styles/starburst.css" rel="stylesheet" type="text/css" />
    
<link href="layout/styles/alumni.css" rel="stylesheet" type="text/css" />




<!---- dnt copy----------------------->
<script language=JavaScript> var message="churi kora valo na...akdom koro na"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
<!-- dnt copy------------------------->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
<style style="text/css">
  	.hoverTable{
		width:100%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	/* Define the default color for all the table rows */
	.hoverTable tr{
		background: #b8d1f3;
		text-align:center;
		text-transform:uppercase;
	}
	/* Define the hover highlight color for the table row */
    .hoverTable tr:hover {
          background-color: #ffff99;
    }
	caption {
  background-color: red;
  color: yellow;
  font-weight: bold;
	}
</style>




</head>

<body id="top">
<body id="top">
<div class="wrapper row1" style="border:thick solid #009">
  <div id="header" class="clear" >
    <div class="fl_left1" align="right" >
      <h1><a href="home.php">Louis Braille Memorial School For The Sight Less(High)</a></h1>
      <CENTER><p><FONT size="+1">SPONSORED BY GOVT. OF WEST BENGAL</FONT></p></CENTER>
    </div>
   <p align="left" > <img src="images/logout.png" width="80px" height="60px"  /></p>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li ><a href="home.php">Homepage</a></li>
      <li><a href="#">Profile</a>
        <ul>
          <li><a href="about_us.php">About Us</a></li>
           <li><a href="awareness.php">Awareness Program</a></li>
          <li><a href="entryaward.php">Awards</a></li>
          <li><a href="mission.php">Mission</a></li>
          <li><a href="activities.php">Activities</a></li>
          <li><a href="entrystuff.php">Stuff List</a></li>
		 <li><a href="entryevent.php">Add Event</a></li>        </ul>
      </li>
      <li><a href="admission.php">Admission</a></li>
      <li><a href="entryresult.php">Result</a></li>
      
          
      <li><a href="#">Donation</a></li>
      <li class="active"><a href="entryalumni.php">Alumni</a></li>
      <li><a href="entrydonor.php">Donors</a></li>
      <li ><a href="gallery.php">Gallery</a></li>
	  <li ><a href="showfdbk.php">Contact Us</a></li>
	  <li ><a href="index.php"><img src="images/logout1.png" width="50px" height="15px"  /></a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!--*******************************************-->
<center>
<div><caption>The name of a few employeed Ex-students both in teaching job and other Govt. service may be mentoined as follows.</caption></div>


<div>  
<table class="hoverTable">
<caption><B>--enter ALUMNI LIST--</B></caption>
<form method="post">
	<tr>
		<th><center>NAME</center></th><th><center>QUALIFICATION</center></th>
		<th><center>DISTRICT</center></th><th><center>PRESENT PROFESSION</center></th>
	</tr>
	
    <tr>
		<td><input type="text" name="name1" value=""></td><td><input type="text" name="quali" value=""></td><td><input type="text" name="dist" value=""></td><td><input type="text" name="preprof" value=""></td>
		
		</tr><tr><td colspan="4"><input type="submit" name="submit1" value="submit">
	</td></tr>
	
</table>

</div>
<?php
if(isset($_POST['submit1'])){
	 $name1=$_POST['name1'];
	$quali=$_POST['quali'];
	$dist=$_POST['dist'];
	$preprof=$_POST['preprof'];
 $sql="insert into alamni(`name`,`quali`,`dist`,`preprof`) values('$name1','$quali','$dist','$preprof')";
	 mysql_query($sql);
}
?>
 
</div>



</center>


<br><br><br><br><br><br><br><br><br><br><br><br><br>





<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Louis Braille Memorial School For The Sight Less(High)</a></p>
    <p class="fl_right">Powred by <a target="_blank" href="#" title="My Website Templates"><b><u>  Sovon & Aminuddin</u></b></a></p>
  </div>
</div>

</body>
</html>