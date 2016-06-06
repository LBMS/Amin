
<?php
require 'config.php';
?>
  
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LBMS - Admission</title>
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
      <li class="active"><a href="admissionEntry.html">Admission</a></li>
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
    <form action="pdf.php" method="post">

                    <table style="width:100%; border-collapse:collapse; text-transform:uppercase; table-layout:auto; vertical-align:top; margin-bottom:15px; border:2px solid #CCCCCC; box-shadow:3px 3px 3px 3px #6699FF; color:#00F; background-image:url(bg.jpg)">
                        <tr>
                            <td >
                                <label><b> 1.(A) FIRST NAME *</b></label>
                            </td>
                            <td>
                                <input  type="text" name="fname" maxlength="100" size="50" required></input>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>  (B)  LAST NAME *</b></label>
                            </td>
                            <td>
                                <input  type="text" name="lname" maxlength="100" size="50" required></input>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b> 2. (A) FATHER'S NAME *</b></label>
                            </td>
                            <td>
                                <input  type="text" name="fathername" maxlength="100" size="50" required></input>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    (B) MOTHERS'S NAME *</b></label>
                            </td>
                            <td>
                                <input  type="text" name="mothername" maxlength="100" size="50" required>
                            </td>
                        </tr>




                        <tr>
                            <td>
                                <label ><b>    (C) GUARDIAN NAME </b></label>
                            </td>
                            <td>
                                <input  type="text" name="guardianname" maxlength="100" size="50" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    (D) RELATION WITH STUDENT </b></label>
                            </td>
                            <td>
                                <input  type="text" name="relation" maxlength="100" size="50" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    (E) GUARDIAN PERMANENT ADDRESS <br>(WITH PIN NUMBER)</br> </b></label>
                            </td>
                            <td>
                                <textArea name="guardianadd" cols="46" rows="4" required> </textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    (F) PHONE NUMBER  </b></label>
                            </td>
                            <td>
                                 <input type="text" name="localadd" > 
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    (G)  EMAIL ADDRESS </b></label>
                            </td>
                            <td>
                                <input  type="text" name="landmark" maxlength="100" size="50">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    3.(A) GUARDIAN OCCOUPATION </b></label>
                            </td>
                            <td>
                                <input  type="text" name="guardianoccupation" maxlength="100" size="50">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    (B) FAMILY MEMBER NUMBER </b></label>
                            </td>
                            <td>
                                <input  type="text" name="member" maxlength="100" size="50">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    (C) HOW MANY DISABLE PERSON BELONGS <br>(IN THIS FAMILY)</br> </b></label>
                            </td>
                            <td>
                                <input  type="text" name="desable" maxlength="100" size="50" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    4.(A) STUDENTS DATE OF BIRTH <br>(SUBMIT WITH BIRTH CERTIFICATE)</br> </b></label>
                            </td>
                            <td>
                                <input  type="date" name="dob" maxlength="100" size="50" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    (B) PARTIALLY VISUAL IMPAIRED  OR NOT? </b></label>
                            </td>
                            <td>
                                <input  type="text" name="visibletype" maxlength="100" size="50" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    (C) AGE OF BLINDNESS </b></label>
                            </td>
                            <td>
                                <input  type="text" name="blindnessage" maxlength="100" size="50" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    (D) ANY OTHER DISABILITY(YES / NOT) </b></label>
                            </td>
                            <td>
                                <input  type="text" name="anydisability" maxlength="100" size="50" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    5.CATAGORY <br> IF (SC/ST/OBC ) COPY ENCLOSED </b></label>
                            </td>
                            <td>
                                <input  type="text" name="catagory" maxlength="100" size="50" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    6.NAME OF THE PRIVIOUS SCHOOL </b></label>
                            </td>
                            <td>
                                <input  type="text" name="previousschool" maxlength="100" size="50">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label ><b>    7.RESIDENCIAL OR DAYSCHOLAR </b></label>
                            </td>
                            <td>
                                <input  type="text" name="residentical" maxlength="100" size="50">
                            </td>
                        </tr>


                        <br>
                            </tr>
                            <tr>
                                <td COLSPAN="2" STYLE="TEXT-ALIGN:CENTER">
                                    <input TYPE="CHECKBOX" NAME="ASDF" VALUE="ASDF" required> CERTIFIED THAT ALL INFORMATION PROVIDED BY ARE TRUE AND CORRECT

                                        </br>
                                        </P>

                                       



                                                <br>

                                                    <p align=center>
                                                        <input TYPE="SUBMIT" VALUE="SUBMIT" name="btn"></p></br>
                                                </td>
                                                </tr>
                                                </table>
                                                </form>
    
   
  

   
   
   
   
   
   
   
   
   
    
    
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
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