 <?php

require 'config.php';

$view_users_query = "select * from stuff";
			$result = mysql_query($view_users_query);
			//$i=0;
			//echo $result;
		/*	$count=mysql_num_rows($result);
			if($count>0)*/
		//	{
			
			
				//$f_phno=$list[2];  
			//$f_address=$list[3];}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LBMS - Stuff list</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
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
      <li class="active"><a href="#">Profile</a>
        <ul>
          <li><a href="about_us.html">About Us</a></li>
           <li><a href="awareness.html">Awareness Program</a></li>
          <li><a href="award.php">Awards</a></li>
          <li><a href="mission.html">Mission</a></li>
          <li><a href="activities.html">Activities</a></li>
          <li class="active"><a href="stuff.php">Stuff List</a></li>
		 
        </ul>
      </li>
      <li><a href="admissionEntry.html">Admission</a></li>
      <li><a href="result.php">Result</a></li>
      
          
      <li><a href="donation1.php">Donation</a></li>
      <li><a href="alumni.php">Alumni</a></li>
      <li><a href="donor.php">Donors</a></li>
      <li ><a href="gallery.html">Gallery</a></li>
	  <li ><a href="contact.html">Contact Us</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
  
  <div>

  
  
  
  
<table class="hoverTable">
<caption><B>--STUFF LIST--</B></caption>
	<tr>
		<th><center>NAME</center></th><th><center>DESIGNATION</center></th><th><center>QUALIFICATION</center></th><th><center>DATE OF JOINING</center></th>
	
	</tr>
	<?php 	while($list = mysql_fetch_array($result))
			{
				
				
				  $name1=$list['name'];  
			 $add1=$list['deg'];
			  $add2=$list['qua'];
			   $j2=$list['joining'];
			 ?>
    <tr>
		<td><?php echo $name1; ?></td><td><?php echo $add1;?></td><td><?php echo $add2;?></td><td><?php echo $j2;?></td>
	</tr>
	<?php
		}
		?>
</table>

</div>
  
  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
  
    <!-- ####################################################################################################### -->
    
  </div>
</div>
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