<?php
$id=$_REQUEST['d'];
$con=new MYSQLi("localhost","root","","mca") or die($con->connect_error);
$sql="delete from admission where id=$id";
$r=$con->query($sql);
if($r==1)
{
	header("location:admission.php");
}
?>