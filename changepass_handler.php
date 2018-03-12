<?php
session_start();
include("connect.php");	

 $email = $_SESSION['email'];

if($email)
{
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{	
		$oldpassword = $_POST['currentpass'];
		$newpassword = $_POST['newpass'];
		$confirmnewpass = $_POST['confirmnewpass'];

		

		$queryget = mysqli_query($db, "SELECT password FROM customer WHERE email='$email'");
		$row = mysqli_fetch_assoc($queryget);

		$oldpassworddb = $row['password'];

		if($oldpassword==$oldpassworddb){
			if($newpassword==$confirmnewpass){
				$querychange = mysqli_query($db, "UPDATE customer SET password='$newpassword' WHERE email='$email'");
				
				header("location: successchangepass.php");
				
			}
			else{
 				echo "<script>alert('Password does not match! Try again')</script>";
 				echo "<script>window.open('changepassword.php','_self')</script>";
	        	
			}
		
		}

	}
}
?>
