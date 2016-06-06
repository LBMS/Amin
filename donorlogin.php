<?php
if(isset($_REQUEST['submit']))
{
	 $email=$_POST['mail'];
	 $pass=$_POST['password']; 
	$con=new mysqli("localhost","root","","mca") or die($con->connect_error);
	$sql="select password,mail from member_reg";
	$r=$con->query($sql);
	$row=$r->fetch_assoc();
	if($email==$row['mail'] && $pass==$row['password'])
	{
		header("location:donation.html");
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