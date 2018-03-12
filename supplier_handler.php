<?php 
	session_start();
	include("connect.php");

	if(isset($_POST['loginbtn']));
	{
		 	$username=$_POST['username'];
		    $password=$_POST['password'];

		    $check="SELECT * from supplier WHERE username='$username' AND password='$password'";

		    $run=mysqli_query($db,$check);

		     if(mysqli_num_rows($run))
	    {
	        echo "<script>window.open('supplierhome.php','_self')</script>";

	        $_SESSION['username']=$username;

	    }
	    else
	    {
	        echo "<script>alert('Username Or Password Is Incorrect!')
	        		window.location='supplierlogin.php'</script>";

	    }

	   
	}

?>