<?php include("connect.php");
include("headerproducts.php");
$order_array = $_SESSION['shopping_cart'];

print_r($order_array);
$count = count($order_array); //counts the number of array inside
//Test to see if I got the customer id
$customer_id = $_SESSION['cus_id'];
$total_amount = $_SESSION['total_price'];
// $customer_name = $_SESSION['cus_name'];
// echo "</br>".$customer_id."</br>";

if(isset($_POST['OrderBtn']));
{
	$cusname = $_POST['cusname'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];

	// echo $customer_name."</br>";
	// echo $count."</br>";

	foreach ($order_array as $order_arrays) {
		
		//Specific info in the array
		$prod_id = $order_arrays['prod_id'];
		$qty = $order_arrays['qty'];
		// echo $prod_id."</br>";
		// echo $qty."</br>";

		//Instantiate new order detail
		$sql_order = "INSERT INTO order_details(orderDetails_id,prod_id,qty) VALUES (NULL,'$prod_id','$qty')";
		$result_1 = mysqli_query($db,$sql_order);
		// var_dump($result_1);
		// echo "</br>";

		//Retrieve Order details so that it will be placed in the customer_order table
		$sql_order_details = "SELECT * FROM order_details WHERE prod_id = '$prod_id'";
		$result_details = mysqli_query($db,$sql_order_details);
		$order_details = mysqli_fetch_assoc($result_details);
		$retrieved_order_details = $order_details["orderDetails_id"];
		//echo $retrieved_order_details;
		//echo "</br>";
		//var_dump($result_details);
		//echo "</br>";
		
		//Update Customer_order with needed details
		$sql = "INSERT INTO customer_order (order_id, customer_id, orderDetails_id, cusname, contact_no, email, total_amount, order_status) VALUES (NULL, '$customer_id', '$retrieved_order_details', '$cusname', '$contact', '$email', '$total_amount', '0')";
		$result_2 = mysqli_query($db,$sql);
		//echo $sql."</br>";
		//echo $result_2."</br>";		
		//var_dump($result_2);
		//echo "</br>";

		//Subtract from stocks
		$sql_stocks_no = "SELECT * FROM product WHERE prod_id = $prod_id"; 
		$stock_no_result = mysqli_query($db,$sql_stocks_no); 
		$stock_no_fetch = mysqli_fetch_assoc($stock_no_result); 
		$retrieved_stock_no = $stock_no_fetch["stock"]; //Get stock number
		echo $retrieved_stock_no;
		//Subtract qty from retrieved stock number
		$new_stock = $retrieved_stock_no - $qty;
		// echo "</br>".$new_stock."</br>";
		//Update database to hold new number of stock
		$sql_subtracted_stocks = "UPDATE product SET stock = '$new_stock' WHERE prod_id = $prod_id";
		$subtracted_stock_result = mysqli_query($db,$sql_subtracted_stocks);
		// var_dump($subtracted_stock_result);
		
	}
	
	
	


	$_SESSION['email']=$email;
	header("Location:successbook.php");
}



?>
