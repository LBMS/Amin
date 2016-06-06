<?php
$database="mca";
$tablename="admin";
$connection=@mysql_connect("localhost",root,"") or die(@mysql_error());
$con=@mysql_select_db($database,$connection) or die(@mysql_error());
$signin="select * from $tablename";
 $result=@mysql_query($signin) or die(mysql_error()); 

while($row=@mysql_fetch_array($result))
{
	if(($row['uid']==$_POST['username'])&&($row['pass']==$_POST['password'])) 
	{
		session_start();
		$_SESSION['valid']=$row[''];
		header("location:donor.php");
	}
	else
	{
		header("location:inde.html");
	}
}



?>