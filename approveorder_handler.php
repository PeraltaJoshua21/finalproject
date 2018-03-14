<?php include("connect.php");
include("headerproducts.php"); 
$prod_id = $_GET['prod_id'];

$sql_change_flag = "UPDATE customer_order SET order_status = 1";
$result_change_flag = mysqli_query($db,$sql_change_flag);

header("Location: listorder.php");


?>