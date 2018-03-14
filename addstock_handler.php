<?php
session_start();
include("connect.php");
$called_id = $_SESSION['product_id'];
$supplier_username = $_SESSION['username'];
if(isset($_POST['addStock']));
	{		
		//echo $supplier_username;
		//echo "</br>";
		echo $called_id;
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
		//echo "</br>";

		//Retrieve number of Stock
		$sql_get_stock = "SELECT stock FROM product WHERE supplier_id = '$retrieved_id' AND prod_id = '$called_id'";
		$retrieved_stock = mysqli_query($db,$sql_get_stock);
		
		$row_stock = mysqli_fetch_assoc($retrieved_stock);
		$db_stock = $row_stock["stock"];
		//echo $db_stock;
		//echo "</br>";

		$stock_array = array($stock, $db_stock);
		$sum_stock_number = (int)array_sum($stock_array);
		//echo $sum_stock_number;
		//echo "</br>";

		$sql = "UPDATE product
				SET stock = '$sum_stock_number'
				WHERE supplier_id = '$retrieved_id' AND prod_id = '$called_id'";
		
		$result=mysqli_query($db,$sql);
		//echo $result;
		//echo "</br>";
		//var_dump($result);
		
				
	}
	echo "<script>alert('Stocks added!')
	 		window.location='supplier_shirts.php'</script>";
?>