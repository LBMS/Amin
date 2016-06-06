<?php
$database="mca";
$tablename="member_reg";
$connection=@mysql_connect("localhost",root,"") or die(@mysql_error());
$con=@mysql_select_db($database,$connection) or die(@mysql_error());
$sql="insert into  $tablename(id,password,firstname,lastname,mail,gender,location,phone,comments) values('$_POST[id]','$_POST[password]','$_POST[fname]','$_POST[lname]','$_POST[mail]','$_POST[m]','$_POST[loc]','$_POST[phone]','$_POST[cmt]')";
$result=@mysql_query($sql) or die(@mysql_error());
header("location:index.html");
?>