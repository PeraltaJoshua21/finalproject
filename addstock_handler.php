<?php
session_start();
include("connect.php");
$called_id = $_SESSION['product_id'];
$supplier_username = $_SESSION['username'];

if(isset($_POST['addStock']));
	{
		// echo $called_id;



		$stock = $_POST['stock'];	
		$sql = "UPDATE product
				SET stock = '{$stock}' WHERE prod_id = {'$called_id'}";
		
		$result=mysqli_query($db,$sql);

				// echo $sql;
		

				
	}

	echo "<script>alert('Stocks added!')
	 		window.location='supplierhome.php'</script>";


?>