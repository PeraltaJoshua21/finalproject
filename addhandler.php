<?php
session_start();
include("connect.php");

if(isset($_POST['AddProductBtn']));
	{
		$target_dir= "images/";
		$target_file= $target_dir . basename($_FILES['imagefile']['name']);

		$prod_name = $_POST['prod_name'];
		$prod_desc = $_POST['prod_desc'];
		$price = $_POST['price'];
		$prod_type = $_POST['prod_type'];
	//	$supplier_id
		// $sql_retrieve_id = "SELECT supplier_id FROM supplier";
		// $retrieve_result = mysqli_query($db, $sql_retrieve_id);
		// var_dump($retrieve_result);


		$sql = "INSERT INTO product(prod_name,prod_desc,image,price,prod_type,supplier_id)
				VALUES('$prod_name','$prod_desc', '$target_file','$price','$prod_type', 1)";
		
		$result=mysqli_query($db,$sql);

				// echo $sql;
		

				
	}

	echo "<script>alert('Product added!')
	 		window.location='adminhome.php'</script>";


?>