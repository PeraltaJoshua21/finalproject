<?php 
	session_start();
	include("connect.php");

	if(isset($_POST['LogInBtn']));
	{
		 	$email=$_POST['email'];
		    $password=$_POST['password'];

		    $check="SELECT * from customer WHERE email='$email' AND password='$password'";

		    $run=mysqli_query($db,$check);

		     if(mysqli_num_rows($run))
	    {
	        echo "<script>window.open('home.php','_self')</script>";

	        $_SESSION['email']=$email;

	    }
	    else
	    {
	        echo "<script>alert('Username Or Password Is Incorrect!')</script>";
	        echo "<script>window.open('login.php','_self')</script>";
	    }
	}

?>