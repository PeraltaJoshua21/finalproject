<?php

		$db = mysqli_connect("localhost", "root", "","finalproject");

		if(isset($_POST['SignUpBtn']));
		{

			$fname = mysqli_real_escape_string($db,$_POST['fname']);
			$lname = mysqli_real_escape_string($db,$_POST['lname']);
			$address = mysqli_real_escape_string($db,$_POST['address']);
			$email = mysqli_real_escape_string($db,$_POST['email']);
			$password = mysqli_real_escape_string($db,$_POST['password']);
			$password2 = mysqli_real_escape_string($db,$_POST['password2']);
			$contact_no = mysqli_real_escape_string($db,$_POST['contact_no']);
			$campus = mysqli_real_escape_string($db,$_POST['campus']);
			

			if($password == $password2){
				$password = ($password);
				$sql = "INSERT INTO customer(fname,lname,address,email,password,contact_no,campus)VALUES('$fname','$lname','$address','$email','$password','$contact_no', '$campus')";

				mysqli_query($db,$sql);
				$_SESSION['email']=$email;
				header("Location:success.php");
			}else{
				echo"<script>alert('Password Did Not Match!')</script>";
			}
		}
?>
