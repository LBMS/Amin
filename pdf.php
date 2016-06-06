<?php

require 'config.php';
if(isset($_POST['btn']))
{
	$fname=$_POST['fname'];
 	$lname=$_POST['lname'];
 	$fathername=$_POST['fathername'];
 	$mothername=$_POST['mothername'];
 	$guardianname=$_POST['guardianname'];
 	$relation=$_POST['relation'];
 	$guardianadd=$_POST['guardianadd'];
 	$localadd=$_POST['localadd'];
 	$landmark=$_POST['landmark'];
 	$guardianoccupation=$_POST['guardianoccupation'];
 	$member=$_POST['member'];
 	$desable=$_POST['desable'];
 	$dob=$_POST['dob'];
 	$visibletype=$_POST['visibletype'];
 	$blindnessage=$_POST['blindnessage'];
 	$anydisability=$_POST['anydisability'];
 	$catagory=$_POST['catagory'];
 	$previousschool=$_POST['previousschool'];
 	$residentical=$_POST['residentical']; 
	
				
				
		
	 $sql="insert into admission(firstname,lastname,fathername,mothername,guardianname,relation,address,guardianadd,studentlandmark,guardianoccupation,familymember,desableperson,dob,visibletype,blindnessage,anydisability,category,previousschool,residentical) values('$fname','$lname','$fathername','$mothername','$guardianname','$relation','$guardianadd','$localadd','$landmark','$guardianoccupation','$member','$desable','$dob','$visibletype','$blindnessage','$anydisability','$catagory','$previousschool','$residentical')";
	 mysql_query($sql);
	
	

	
	
	


require("fpdf/fpdf.php");
		$pdf=new FPDF();
		$pdf->AddPage();

$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,50,"",1,2,'C');
$pdf->Cell(0,20,"WELCOME {$fname} {$lname}",1,2,'C');
$pdf->Cell(95,10,"FATHER'S NAME:",1,0,'L');
$pdf->Cell(95,10,"{$fathername}",1,1,'L');

$pdf->Cell(95,10,"MOTHERS'S NAME:",1,0,'L');
$pdf->Cell(95,10,"{$mothername}",1,1,'L');
$pdf->Cell(95,10,"GUARDIAN NAME:",1,0,'L');
$pdf->Cell(95,10,"{$guardianname}",1,1,'L');
$pdf->Cell(95,10,"RELATION WITH STUDENT",1,0,'L');
$pdf->Cell(95,10,"{$relation}",1,1,'L');
$pdf->Cell(95,10,"GUARDIAN PERMANENT ADDRESS:",1,0,'L');
$pdf->Cell(95,10,"{$guardianadd}",1,1,'L');
$pdf->Cell(95,10,"GUARDIAN OCCOUPATION:",1,0,'L');
$pdf->Cell(95,10,"{$guardianoccupation}",1,1,'L');
$pdf->Cell(95,10,"FAMILY MEMBER NUMBER",1,0,'L');
$pdf->Cell(95,10,"{$member}",1,1,'L');
$pdf->Cell(95,10,"NO OF DISABLE PERSON in family:",1,0,'L');
$pdf->Cell(95,10,"{$desable}",1,1,'L');
$pdf->Cell(95,10,"STUDENTS DATE OF BIRTH",1,0,'L');
$pdf->Cell(95,10,"{$dob}",1,1,'L');
$pdf->Cell(95,10,"PARTIALLY VISUAL IMPAIRED  OR NOT",1,0,'L');
$pdf->Cell(95,10,"{$visibletype}",1,1,'L');
$pdf->Cell(95,10,"AGE OF BLINDNESS",1,0,'L');
$pdf->Cell(95,10,"{$blindnessage}",1,1,'L');
$pdf->Cell(95,10,"ANY OTHER DISABILITY",1,0,'L');
$pdf->Cell(95,10,"{$anydisability}",1,1,'L');
$pdf->Cell(95,10,"CATAGORY",1,0,'L');
$pdf->Cell(95,10,"{$catagory}",1,1,'L');
$pdf->Cell(95,10,"NAME OF THE PRIVIOUS SCHOOL",1,0,'L');
$pdf->Cell(95,10,"{$previousschool}",1,1,'L');
$pdf->Cell(95,10,"RESIDENCIAL OR DAYSCHOLAR",1,0,'L');
$pdf->Cell(95,10,"{$residentical}",1,1,'L');




//$pdf->Cell(40,5,' ','LTR',0,'L',0);   // empty cell with left,top, and right borders

// Insert a logo in the top-left corner at 300 dpi
$pdf->Image('images/logo.png',10,10,190);
// Insert a dynamic image from a URL
/*$pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',60,30,90,0,'PNG');
*/

$pdf->Image('images/logo2.png',10,240,190);

			}//}
		
		$pdf->output();

?>