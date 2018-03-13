<?php
session_start();
include("connect.php");
$called_id = $_SESSION['product_id'];
$supplier_username = $_SESSION['username'];
if(isset($_POST['addStock']));
	{		
		//echo $supplier_username;
		//echo "</br>";
		//echo $called_id;
		//echo "</br>";
		//Get supplier ID from supplier table
		$sql_id = "SELECT supplier_id FROM supplier WHERE username = '$supplier_username' ";
		$result_id = mysqli_query($db,$sql_id);
		//Extract id from the supplier and set to variable
		$row = mysqli_fetch_assoc($result_id);
		$retrieved_id = $row["supplier_id"];
		
		$stock = $_POST['stock'];
		//echo "</br>";
		//echo $stock;
			
		$sql = "UPDATE product
				SET stock = '$stock'
				WHERE supplier_id = '$retrieved_id'";
		
		$result=mysqli_query($db,$sql);
		//var_dump($result);
		
				
	}
	echo "<script>alert('Stocks added!')
	 		window.location='supplier_shirts.php'</script>";
?>