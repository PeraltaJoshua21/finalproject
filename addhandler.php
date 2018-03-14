<?php
session_start();
include("connect.php");

$supplier_username = $_SESSION['username'];
if(isset($_POST['AddProductBtn']));
	{

		$sql_id = "SELECT supplier_id FROM supplier WHERE username = '$supplier_username' ";
		$result_id = mysqli_query($db,$sql_id);
		$row = mysqli_fetch_assoc($result_id);
		$retrieved_id = $row['supplier_id'];
		// echo $retrieved_id;

		$target_dir= "images/";
		$target_file= $target_dir . basename($_FILES['imagefile']['name']);

		$prod_name = $_POST['prod_name'];
		$prod_desc = $_POST['prod_desc'];
		$price = $_POST['price'];
		$prod_type = $_POST['prod_type'];
		
		


		$sql = "INSERT INTO product(prod_name,prod_desc,price,prod_type,image,supplier_id)
				VALUES ('$prod_name','$prod_desc','$price', '$prod_type', '$target_file', '$retrieved_id')";
		
		$result=mysqli_query($db,$sql);
		// echo $result;
		// var_dump($result);			
		

				
	}

	echo "<script>alert('Product added!')
			window.location='supplier_shirts.php'</script>";


?>