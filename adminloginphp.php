<?php
if(isset($_REQUEST['submit']))
{
	$email=$_POST['n1'];
	$pass=$_POST['n2'];
	$con=new mysqli("localhost","root","","mca") or die($con->connect_error);
	$sql="select username,password from admin";
	$r=$con->query($sql);
	$row=$r->fetch_assoc();
	if($email==$row['username'] && $pass==$row['password'])
	{
		header("location:home.php");
	}
	else if($email!=$row['username']) 
		{
			
        echo "<script>alert('Username  is incorrect!')</script>";
		echo "<script>window.location:'adminlogin.php'</script>";
          
		}
		else if( $pass!=$row['password'])
		{
			
       echo "<script>alert('Password is incorrect!')</script>";

		}
}

?>