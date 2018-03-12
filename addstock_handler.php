<?php
session_start();
include("connect.php");
$called_id = $_SESSION['product_id'];

if(isset($_POST['addStock']));
	{
		// echo $called_id;
		$stock = $_POST['stock'];	
		$sql = "UPDATE product(stock)
				SET('$stock')";
		
		$result=mysqli_query($db,$sql);

				// echo $sql;
		

				
	}

	echo "<script>alert('Stocks added!')
	 		window.location='supplierhome.php'</script>";


?>