<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LBMS</title>

<link href="themes/5/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/5/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
	<link href="layout/styles/starburst.css" rel="stylesheet" type="text/css" />
    



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
      <li class="active"><a href="#">Profile</a>
        <ul>
          <li><a href="about_us.php">About Us</a></li>
           <li><a href="awareness.php">Awareness Program</a></li>
          <li><a href="entryaward.php">Awards</a></li>
          <li><a href="mission.php">Mission</a></li>
          <li><a href="activities.php">Activities</a></li>
          <li><a href="entrystuff.php">Stuff List</a></li>
		 <li class="active"><a href="entryevent.php">Add Event</a></li>        </ul>
      </li>
      <li><a href="admission.php">Admission</a></li>
      <li><a href="entryresult.php">Result</a></li>
      
          
      <li><a href="#">Donation</a></li>
      <li><a href="entryalumni.php">Alumni</a></li>
      <li><a href="entrydonor.php">Donors</a></li>
      <li ><a href="gallery.php">Gallery</a></li>
	  <li ><a href="showfdbk.php">Contact Us</a></li>
	  <li ><a href="index.php"><img src="images/logout1.png" width="50px" height="15px"  /></a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>

<!-- ####################################################################################################### -->
<style>
table
{
	border:2px solid #F6F;
	padding:10px;
	width:420px;
	height:300px;

	box-shadow:10px 10px 10px #CC6699;
	color:#30F;
}
th
{
	color:#03F;
	background-color:#F90;
}
.Odd
{
	background-color:#C99;
}
.Even
{
background-color:#0FF;
	
}
</style>





<?php
$count=0;
$cls=null;
$con=new MYSQLi("localhost","root","","mca") or die($con->connect_error);
$sql="select * from event";
$r=$con->query($sql);
?>
<br /><br /><br /><br /><br />
<table border="0" align="center"><tr>
<th >name</th>
<th >date</th>

<th>description</th>
<th >#</th></tr>
<?php
while($row=$r->fetch_assoc())
{
	if($count%2==0)
	$cls="Even";
	else
	$cls="Odd";
	$count++;
	?>
	<tr class="<?php echo $cls;?>">
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['date']; ?></td>
    
	 <td><?php echo $row['description']; ?></td>
        <td><a href="del.php?d=<?php echo $row['id'];?>">Delete</a>&nbsp;&nbsp;<a href="#">Edit</a></td></tr>
    <?php
}
?>
</table>
<!--*********************************************************-->
<table border="2px" height="500px" width="500px" align="center">
<tr>
<th>
<form name="frm" method="post">
name:<input type="text" name="n1"><br/><br>
date: <input type="date" name="n2" ><br/><br/>	
Description: <input type="text" name="n4"><br/><br/>

<input type="submit" name="btn" value="submit">
</form>
<?php
if(isset($_REQUEST['btn']))
{
	$n=$_POST['n1'];
	$add=$_POST['n2'];
	
	$ds=$_POST['n4'];
	 
	$con=new MySQLi("localhost","root","","mca") or die($con->connect_error);
	$sql="insert into event(name,date,description) values('$n','$add','$ds')";
	if($con->query($sql)==TRUE)																																												
	{
		echo "<script>alert('Inserted')</script>";
	}
	else
	{
echo "<script>alert('Not Inserted')</script>";		
	}
	$con->close();
}
?>

</th>
</tr></table>









<br /><br /><br /><br />







<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Louis Braille Memorial School For The Sight Less(High)</a></p>
    <p class="fl_right">Powred by <a target="_blank" href="#" title="My Website Templates"><b><u>  Sovon & Aminuddin</u></b></a></p>
  </div>
</div>

</body>
</html>