<?php
session_start();
include("connect.php");

if(isset($_POST['AddProductBtn']) && $prod_type = 'Caps');
	{
		$target_dir= "images/";
		$target_file= $target_dir . basename($_FILES['imagefile']['name']);

		$prod_name = $_POST['prod_name'];
		$price = $_POST['price'];
		$prod_type = $_POST['prod_type'];

		$sql = "INSERT INTO product(prod_name,image,price,prod_type)VALUES('$prod_name','$target_file','$price','$prod_type')";
		mysqli_query($db,$sql);
	}

	echo "<script>alert('Product added!')
			window.location='supplier_caps.php'</script>";


?>