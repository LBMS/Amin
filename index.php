<?php

require 'config.php';

$view_users_query = "select * from event";
			$result = mysql_query($view_users_query);
			$res=mysql_num_rows($result);
			
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




<!---- dnt copy----------------------->
<script language=JavaScript> var message="churi kora valo na...akdom koro na"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
<!-- dnt copy------------------------->

<style type="text/css">
#box1{
width:75%;
height:40%;
background:orange;
border-width:4px 30px 4px 30px;
border-style: solid;
border-color: #56c6d9 #56c6d9 #fe2192 #fe2192;
border-radius:0 120px 0 120px;
-moz-border-radius:0 120px 0 120px;
-webkit-border-radius:0 120px 0 120px;
 }
 .shadow-sample {
    -moz-transition-duration: 0.8s;
    -webkit-transition-duration:0.8s;
    border: 1px solid #DDDDDD;
    margin: 20px 10px;
    padding: 10px;
    width: 258px;
	border-radius:7px 7px 7px 7px;
	background-color:#090;
	
}
.shadow-sample a{
	text-decoration:none;
	}
.shadow-sample:hover{
border-bottom-left-radius:50% 35px;
box-shadow:-5px 10px 15px rgba(0,0,0,0.25);
position: relative;
color:#006;
background-color:#F60;

}
#box{
margin:10px; 
width:239px;


}
p
{
	color:#06F;
}

 
  
</style>
</head>
<audio src="images/amra.mp3"  loop="true" autoplay="true"></audio>
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
      <li class="active"><a href="index.php">Homepage</a></li>
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
      <li><a href="alumni.php">Alumni</a></li>
      <li><a href="donor.php">Donors</a></li>
      <li ><a href="gallery.html">Gallery</a></li>
	  <li ><a href="contact.html">Contact Us</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<table style="width:auto; border-collapse:collapse; table-layout:auto; vertical-align:top; margin-bottom:15px; border:0px solid #CCCCCC; color:#00F; " ><tr><td width="75%">
<div id="sliderFrame">
        <div id="slider">
            <a href="#">
                <img src="images/h1.jpg" alt="School Gate" />
            </a>
            <a class="lazyImage" href="images/h2.jpg" title="Musical Instrument"></a>
            <a href="#">
                <b data-src="images/h3.jpg" data-alt="travailing"></b>
            </a>
            <a class="lazyImage" href="images/h7.jpg" title="Taking certificate"></a>
            <a class="lazyImage" href="images/h5.jpg" title="Braille Instrument"></a>
            <a class="lazyImage" href="images/h6.jpg" title="Examination time"></a>
            <a class="lazyImage" href="images/h9.jpg" title="Taking State Award 2012">															</a>
            <a class="lazyImage" href="images/h8.jpg" title="Library"></a>
            
        </div>
        
       
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb"><img src="images/t1.jpg" alt="School Gate"/></div>
            <div class="thumb"><img src="images/t2.jpg" /></div>
            <div class="thumb"><img src="images/t3.jpg" /></div>
            <div class="thumb"><img src="images/t7.jpg" /></div>
            <div class="thumb"><img src="images/t5.jpg" /></div>
            <div class="thumb"><img src="images/t6.jpg" /></div>
           <div class="thumb"><img src="images/t9.jpg" /></div>
            <div class="thumb"><img src="images/t8.jpg" /></div>
            
        </div>
    </div>
    </td><td width="25%">
    
   
   <div  class="starbursts">
		<a href="donation1.php" class="starburst6"><span><span><span><span>DONATE<br />NOW</span></span></span></span></a>
           
	</div><hr style="margin-top:70px; margin-right:20px;">
    <!--
    </div>
	<br><div id="box1">
<h1>join with us </h1>
</div>
  -->
  <div style="background:#FFF; margin-right:20px;" align="center" >
   <img src="fancybox/alphabets1/s.gif" border=0 width="8%" ><img src="fancybox/alphabets1/t.gif" border=0 width="8%"><img src="fancybox/alphabets1/a.gif" border=0 width="10%"><img src="fancybox/alphabets1/t.gif" border=0  width="8%"><img src="fancybox/alphabets1/e.gif" border=0  width="10%">&nbsp;&nbsp;
   <img src="fancybox/alphabets1/a.gif" border=0 width="10%"><img src="fancybox/alphabets1/w.gif" border=0 width="10%"><img src="fancybox/alphabets1/a.gif" border=0 width="10%"><img src="fancybox/alphabets1/r.gif" border=0 width="10%"><img src="fancybox/alphabets1/d.gif" border=0 width="10%">  
  <br />
  <img src="fancybox/alphabets1/f.gif" border=0 width="8%" ><img src="fancybox/alphabets1/o.gif" border=0 width="8%"><img src="fancybox/alphabets1/r.gif" border=0 width="10%">
  <img src="fancybox/alphabets1/b.gif" border=0 width="8%" ><img src="fancybox/alphabets1/e.gif" border=0 width="8%"><img src="fancybox/alphabets1/s.gif" border=0 width="10%"><img src="fancybox/alphabets1/t.gif" border=0  width="8%">
  <br />
  <img src="fancybox/alphabets1/i.gif" border=0 width="8%" ><img src="fancybox/alphabets1/n.gif" border=0 width="8%"><img src="fancybox/alphabets1/s.gif" border=0 width="10%"><img src="fancybox/alphabets1/t.gif" border=0  width="8%"><img src="fancybox/alphabets1/i.gif" border=0  width="8%"><img src="fancybox/alphabets1/t.gif" border=0 width="8%" ><img src="fancybox/alphabets1/u.gif" border=0 width="8%"><img src="fancybox/alphabets1/t.gif" border=0 width="8%"><img src="fancybox/alphabets1/i.gif" border=0  width="8%"><img src="fancybox/alphabets1/o.gif" border=0  width="10%"><img src="fancybox/alphabets1/n.gif" border=0  width="10%">
  <br />
 <font color=#ff0000 size="10">2</font><font color=#bfad3f size="10">0</font><font color=#7ffe7f size="10">1</font><font color=#3fc6bf size="10">2</font>
  
  
  
  
   
   </div> 
   <div style="background:#0FF; margin-top:2px; margin-right:20px; border:thick solid #009" >

<?php 
$handle = fopen("counter.txt", "r");
if(!$handle){
 echo "could not open the file" ;
}
else {
	$counter = ( int ) fread ($handle,20) ;
	fclose ($handle) ;
	$counter++ ;
	echo" <strong> -> you are visitor no :  </strong>".  $counter  ;
$handle =  fopen("counter.txt", "w" ) ;
fwrite($handle,$counter) ;
fclose ($handle) ;
	}
?>

</div>

   
   </td></tr></table>
    <!-- ####################################################################################################### -->
  </div>
</div>
<div><hr /></div>
<!-- ####################################################################################################### -->

<table style="margin-left:40px;"><tr><th>

<div class="shadow-sample" align="left">
<div id="box">
<font color="#FFFFFF"><h3><B> SUCCESS STORIES</B></h3><hr /></font>
<h5><p><font color="#FFFFFF">We equip our students with education, knowledge skills and self-confidence to help them realize their potential and become successful individuals.<br /><br /></font></p></h5>
<center><A href="alumni.php"><input type="submit" value="Learn More" style="background-color:#0FF; border-radius:5px 15px 5px 15px; color:#F00;" /></A></center>
</div>
</div></th>
<!--*******-->
<th><div class="shadow-sample" >
<div id="box" >
<font color="#FFFFFF"><h3><B> GET INVOLVED<br /><br /></B></h3><hr /></font>
<h5><p><font color="#FFFFFF">"We Live On What You Give"- This statement is painted boldly in Louis Braille Memorial School Donation Box. These are bright, large boxes with slots for different types of...</font></p></h5>
<center><a href="involved.html"><input type="submit" value="Learn More" style="background-color:#0CC; border-radius:5px 15px 5px 15px; color:#F00;"/></A></center>
</div>
</div></th>
<th><div class="shadow-sample" >
<div id="box" >
<font color="#FFFFFF"><h3><B>Events<br /></B></h3><hr /></font>
<table borber="0" align="center">
<?php 	
while($list = mysql_fetch_array($result))
			{
				
				
				  $name1=$list['name'];  
			 $mail=$list['date'];
			 
			
			 ?>
<tr><td><a href="eventdes.php?id=<?php echo $list['id'];?>">[click]</a>  <?php echo $name1; ?><?php echo $mail;?><hr /> </td></tr>
<?php
		}
		?>
</table>

</div>
</div><div></th></tr></table>








<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">Quick Links</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="adminlogin.php">Administrator</a></li>            
            <li><a href="donation1.php">Donate</a></li>
           </ul>
        </div>
	
	
       
       <a href="gallery.html"> <h2 class="title">Latest Gallery Images</h2></a>
        <div id="hpage_gallery">
          <ul class="clear">
            <li><img src="images/song.jpg" alt="" /></li>
            <li class="last"><img src="images/dance.jpg" alt="" /></li>
            <li><img src="images/an1.jpg" alt="" /></li>
            <li class="last"><img src="images/lan.jpg" alt="" /></li>
          </ul>
        </div>
         <h2 class="title">Virtual Tour</h2>
        <div id="hpage_socialize">
          <div class="imgholder"><img src="images/edu.jpg" alt="" />   <img src="images/edu.jpg" alt="" /></div>
                <p>Educational tours / excursions are organized every year for increasing exposure and vision of blind students separately for primary students at local level and at famous historical place/ Hill station for middle & senior students. </p>
                
		  

        </div>
      </div>
      <!-- ############### -->
      <div class="fl_right">
        <h2 class="title">Keep Up With What's Happening</h2>
        <div id="hpage_latestnews">
           <p align="justify">L.B.M SCHOOL is a professional organization which believes in providing equal opportunities to all categories of people with disabilities.Consistent with the philosophy, it works for providing education, employment opportunities, equal rights and quality life for them. LBMS, understands that gainful employment plays an essential part in the life of a person because it gives him status and binds him to the society. Acceptance of disabled persons at work can be viewed as society's acceptance of these Persons without discrimination. However, many people with disabilities are still unable to obtain gainful occupation and are dependent on others. Our Employment and Placement services is a step towards providing employment as well as self-employment opportunities for people with disability, so that they can be financially independent and self sufficient. since 1977, LBMS has continuously strived to provide employment Opportunities to people with disability. During the last five years, it has been successful in providing employment to as many as 1500 people with Usability who are presently employed in public as well as private sectors and ire capable of handling important assignments in banks, railways, hospitals, restaurants, etc. They are also excellent in their work as telephone operators, computer programmers, mobile repairers, liftman, etc. We also understand the importance of self-employment and provide Micro Credit for individuals who want to be self-employed. So far as many as 900 individuals are earning a regular livelihood from our self employment programmers.</p>
          
        </div>
      
        <div id="hpage_specials" class="clear">
         
              <h2 class="title">Sporting Activities</h2>
             <div id="hpage_socialize">
                <p><strong></strong> <a href="activities.html">At Ariyadoho</a></p>
                <div class="imgholder"><img src="images/spo.jpg" alt="" /></div>
                <p>Event for partially blind Run.</p>
              
                <p><strong></strong> <a href="activities.html"> Chess </a></p>
                <div class="imgholder"><img src="images/chess.jpg" alt="" /></div>
                <p>Blind Chess board </p>
              </div>
           
            
          
        </div>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<div>



</div>


<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Louis Braille Memorial School For The Sight Less(High)</a></p>
    <p class="fl_right">Powred by <a target="_blank" href="#" title="My Website Templates"><b><u>  Sovon & Aminuddin</u></b></a></p>
  </div>
</div>

</body>
</html>