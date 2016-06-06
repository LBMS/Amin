<?php
$database="mca";
$tablename="contact";
$connection=@mysql_connect("localhost",root,"") or die(@mysql_error());
$con=@mysql_select_db($database,$connection) or die(@mysql_error());
$sql="insert into  $tablename(name,email,subject,msg) values('$_POST[n]','$_POST[e]','$_POST[s]','$_POST[m]')";
$result=@mysql_query($sql) or die(@mysql_error());
header("location:index.html");
?>