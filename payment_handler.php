<?php include("connect.php");

if(isset($_POST['OrderBtn']));
{
	$cusname = $_POST['cusname'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];

	$sql = "INSERT into customer_order(item_cusname,item_contact,item_cusemail) VALUES ('$cusname', '$contact', '$email')";
	mysqli_query($db,$sql);

				$_SESSION['email']=$email;
				header("Location:successbook.php");
}



?>