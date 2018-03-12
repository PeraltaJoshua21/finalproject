<?php 
	session_start();
	include("connect.php");

	if(isset($_POST['LogInBtn']));
	{
		 	$username=$_POST['username'];
		    $password=$_POST['password'];

		    $check="SELECT * from admin WHERE username='$username' AND password='$password'";

		    $run=mysqli_query($db,$check);

		     if(mysqli_num_rows($run))
	    {
	        echo "<script>window.open('adminhome.php','_self')</script>";

	        $_SESSION['username']=$username;

	    }
	    else
	    {
	        echo "<script>alert('Username Or Password Is Incorrect!')</script>";
	        echo "<script>window.open('adminhome.php','_self')</script>";
	    }

	   
	}

?>