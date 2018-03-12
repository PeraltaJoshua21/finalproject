<?php
include("connect.php");
$order_id=$_GET['del'];
$deleteorder_query="DELETE from orders WHERE order_id='$order_id'";
$run=mysqli_query($db,$deleteorder_query);
if($run)
{

	header('Location: listorders.php');
}

?>