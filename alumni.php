<?php

require 'config.php';

$view_users_query = "select * from alamni";
			$result = mysql_query($view_users_query);
			
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
      
          
      <li><a href="donation1.php">Donation</a></li>
      <li class="active"><a href="alumni.php">Alumni</a></li>
      <li><a href="donor.php">Donors</a></li>
      <li ><a href="gallery.html">Gallery</a></li>
	  <li ><a href="contact.html">Contact Us</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!--*******************************************-->
<center>
<div><caption>The name of a few employeed Ex-students both in teaching job and other Govt. service may be mentoined as follows.</caption></div>



 
</div>

<div class="cover slide_in">
  <div class="left_gate"><br /><br /><br /><br /><br /><br /><strong>plz touch</strong></div>
  <div class="right_gate"><br /><br /><br /><br /><br /><br /><strong>to open</strong></div>
<table>
<thead><tr><th>NAME</th><th>QUALIFICATION</th><th>DISTRICT</th><th>PRESENT<BR /> PROFESSION</th></tr></thead>
<tbody>
<?php 	while($list = mysql_fetch_array($result))
			{
				
				
				  $name1=$list['name'];  
			 $qua=$list['quali'];
			 $dist=$list['dist'];
			 $preprof=$list['preprof'];
			 ?>
			 
			 <tr>
		<td><?php echo $name1; ?></td><td><?php echo $qua;?></td>
		<td><?php echo $dist; ?></td><td><?php echo $preprof;?></td>
	</tr>
	<?php
		}
		?>


<!--
<tr><td>RATAN KR. DAS</td><td>B.A., SPL.B-ED</td><td>HOOGHLY</td><td>Teacher,spl.school</td></tr>
<tr><td>NANDITA BHATTACHARYA</td><td>M.A.,HIST,MUSIC,SPL-B.ED</td><td>kolkata</td><td>Teacher,spl.School</td></tr>
<tr><td>TAPASI DAS</td><td>B.A.,SPL-B.ED</td><td>BURDWAN</td><td>Teacher</td></tr>
<tr><td>ABHIJIT MUKHERJEE</td><td>B.A.,SPL-B.ED</td><td>HOWRAH</td><td>an employee of spl. School</td></tr>
<tr><td>HARENDRANATH DAS</td><td>M.A.,HIST</td><td>24pgs(n)</td><td>School teacher</td></tr>
<tr><td>SUPRITI ROYCHOWDHURY</td><td>M.A.,BENGALI</td><td>birbhum</td><td>School teacher</td></tr>
<tr><td>ALOKE SARKAR</td><td>B.A.</td><td>HOOGHLY</td><td>School teacher</td></tr>
<tr><td>RANJIT BERA</td><td>M.A.,POL.SC</td><td>HOWRAH</td><td>School teacher</td></tr>
<tr><td>SUSANTA KR. SHIT</td><td>M.A.,HIST</td><td>MIDNAPORE(W)</td><td>School teacher</td></tr>
<tr><td>TUKLAL ROY</td><td>M.A.,BENGALI</td><td>24PGS(N)</td><td>School teacher</td></tr>
<tr><td>SANDHYA HAZRA</td><td>B.A.</td><td>HOOGHLY</td><td>State govt.</td></tr>
<tr><td>ANIRBAN MUKHERJEE</td><td>M.A.,ENGLISH,B.ED</td><td>HOOGHLY</td><td>School teacher</td></tr>
<tr><td>RABI KUNDU</td><td>M.A.,POL.SC</td><td>KOLKATA</td><td>School teacher</td></tr>
<tr><td>SUKUMAR KAIBARTA</td><td>M.A.</td><td>KOLKATA</td><td>Central govt.</td></tr>

<tr><td>PADMA SARKAR</td><td>M.A.,HIST</td><td>HOWRAH</td><td>School teacher</td></tr>
<tr><td>RADHA SARKAR</td><td>M.A.,MUSIC</td><td>HOWRAH</td><td>NGO</td></tr>
<tr><td>HEMANTO BANARJEE</td><td>B.A.,BENGALI HONS</td><td>BURDWAN</td><td>School teacher</td></tr>
<tr><td>CHABI BAG</td><td>B.A.,SPL-B.ED</td><td>HOOGHLY</td><td>para teacher</td></tr>
<tr><td>AMITA GHOSH</td><td>CLASS 8</td><td>NADIA</td><td>govt. service</td></tr>
<tr><td>LAXMI NARAYAN ADHIKARI</td><td>M.A.,HISTORY</td><td>HOOGHLY</td><td>School teacher</td></tr>
<tr><td>PRADIP JHA</td><td>M.A.,HISTORY</td><td>HOOGHLY</td><td>School teacher</td></tr>
<tr><td>SUBIR DAS</td><td>MADHYAMIK</td><td>KJOLKATA</td><td>Central govt.</td></tr>
<tr><td>CHANDAN MONDOL</td><td>M.A.,HISTORY</td><td>MIDNAPORE(E)</td><td>School teacher</td></tr>
<tr><td>ATANU DAS</td><td>B.A.</td><td>HOOGHLY</td><td>Primary School Teacher</td></tr>
<tr><td>MD. FIROJ</td><td>HIGHER SECONDARY</td><td>HOOGHLY</td><td>Primary School teacher</td></tr>
<tr><td>TAPAN SHEE</td><td>MA.A,ENGLISH</td><td>HOOGHLY</td><td>School teacher</td></tr>
<tr><td>SUBHAS SHOW</td><td>M.A.</td><td>HOOGHLY</td><td>Primary School teacher</td></tr>
-->
</tbody>
</table>

  
    
</div>

</center>








<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Louis Braille Memorial School For The Sight Less(High)</a></p>
    <p class="fl_right">Powred by <a target="_blank" href="#" title="My Website Templates"><b><u>  Sovon & Aminuddin</u></b></a></p>
  </div>
</div>

</body>
</html>