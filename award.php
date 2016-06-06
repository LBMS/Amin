<?php

require 'config.php';


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LBMS - Awards</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
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
          <li class="active"><a href="award.php">Awards</a></li>
          <li><a href="mission.html">Mission</a></li>
          <li><a href="activities.html">Activities</a></li>
          <li><a href="stuff.php">Stuff List</a></li>
		 
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
    <!-- ####################################################################################################### -->
   
    
    
    <DIV><FONT SIZE="7" COLOR="GREEN" FACE="CURSIVE">
                    <CAPTION> OUR AWARDS </CAPTION>
     
    </FONT>
    
    </DIV>
    <FONT SIZE="3" COLOR="BLUE" FACE="COMIC SANS MS">
    <p>LBMS  has received a number of awards for its service to help blind and mentally ill people. It includes both organizational as well as individual awards. Organizational awards are for organization as a whole while individual awards are for contribution from one person to help the society.</p>
    <h3>&nbsp;    </h3>
    <h3 align="center">
      <p align="right">
      <marquee behavior="alternate">
          <img name="scp" src="images/h9.JPG" width="300" height="150" alt="" />
          <img name="scp" src="images/DSCN4618.JPG" width="150" height="150" alt="" />
          <img name="scp" src="images/h7.JPG" width="300" height="150" alt="" />
          
          </marquee>  
      
      </p>
       <FONT SIZE="3" COLOR="blue" FACE="COMIC SANS MS">
   <center>    
    <table width="80%" border="1">
    <caption><B>--List of Organizational Awards--</B></caption>
      <tr>
        <th >YEAR</th>        <th>NAME OF THE AWARD </th>
      </tr>
    
      <?php 	
	  $view_users_query = "select * from award"; 
			 $result = mysql_query($view_users_query);
			
	  
	  while($list = mysql_fetch_array($result))
			{
				
				
		  
			 $add=$list['date']; 
			 $name=$list['awrd']; 
			 			 ?>
    <tr>
		<td><?php echo $add; ?></td><td><?php echo $name; ?></td>
	</tr>
	<?php
		}
		?>
      
      
   
    </table></center></FONT><br /><br /><br /><br />
    <p>&nbsp;</p>
  </div>
</div>
 
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<br /><br /><br />
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Louis Braille Memorial School For The Sight Less(High)</a></p>
    <p class="fl_right">Powred by <a target="_blank" href="#" title="My Website Templates"><b><u>  Sovon & Aminuddin</u></b></a></p>
  </div>
</div>

</body>
</html>