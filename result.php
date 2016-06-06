<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LBMS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
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
      <li class="active"><a href="result.php">Result</a></li>
      
          
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
      
<p align="center">
<h1><div class="heading">Examination Result </div></h1>
		<center>
		<div align="center"><span class="txt">For Students Class Wise</span></div>
       <br>  <hr>
       
       
       
    <form name="frm" method="post" action="">
Class<select name="class">
<option value="">Choose your class</option>
<option value="Pre">Pre</option>
<option value="1">Class1</option>
<option value="2">Class2</option>
<option value="3">Class3</option>
<option value="4">Class4</option>
<option value="5">Class5</option>
<option value="6">Class6</option>
<option value="7">Class7</option>
<option value="8">Class8</option>
<option value="9">Class9</option>
<option value="10">Class10</option>
</select>
<br>

Roll<input type="text" name="roll"><br>
<input type="submit" name="btn" value="Submit">
</form>
<br><br><br><br>
<?php
if(isset($_REQUEST['btn']))
{
	$class=$_POST['class'];
	$roll=$_POST['roll'];
	$con=new mysqli("localhost","root","","mca") or die($con->connect_error);
	
	$sql="select * from result";
	$r=$con->query($sql);
	while($row=$r->fetch_array())
	{
		if($class==$row['class'] && $roll==$row['roll'])
		{
		?>
        <table border="1px solid black">
        <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Roll</th>
        <th>Mathematics</th>
        <th>Bengali</th>
        <th>English</th>
        <th>History</th>
        <th>Geography</th>
        <th>Science</th>
        <th>Total</th>
        <th>Remark</th>
        </tr>
        
            <tr>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['class'];?></td>
            <td><?php echo $row['roll'];?></td>
            <td><?php echo $row['math'];?></td>
            <td><?php echo $row['beng'];?></td>
            <td><?php echo $row['eng'];?></td>
            <td><?php echo $row['hist'];?></td>
            <td><?php echo $row['geo'];?></td>
            <td><?php echo $row['sce'];?></td>
            <td><?php echo $t=($row['math']+$row['beng']+$row['eng']+$row['hist']+$row['geo']+$row['sce']);?></td>
           <td> <?php
            if($t>=150)
			{
				 echo "Pass";
			}
			else
			{
				echo "Fail";
			}
			?>
            </td>  </tr>
			<tr><td rowspan="11" align="center">
			<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
			
		</td>	
			</tr>
            
          </table>
            <?php
		}
		
	}
}
?>

    
 <br>
<br><br><br><br><br>
<br><br><br><br>   
    
    
    
    </p>
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


<!-- liteAccordion is Homepage Only --> 
<script type="text/javascript" src="layout/scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script> 
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title
    firstSlide: 1, // displays slide (n) on page load
	activateOn: "click", // click or mouseover
    autoPlay: false, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides
    slideSpeed: 800, // slide animation speed
    cycleSpeed: 6000, // time between slide cycles
});
</script>
</body>
</html>