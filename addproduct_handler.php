<?php
session_start();
include("connect.php");

if(isset($_POST['AddProductBtn']));
	{
		$target_dir= "images/";
		$target_file= $target_dir . basename($_FILES['imagefile']['name']);

		$productname = $_POST['prodname'];
		$prodprice = $_POST['prodprice'];

		$sql = "INSERT INTO products(product_name,product_image,product_price)VALUES('$productname','$target_file','$prodprice')";
		mysqli_query($db,$sql);
	}

	header("Location: adminproducts.php");


?>