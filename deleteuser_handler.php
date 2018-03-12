<?php
include("connect.php");
$delete_id=$_GET['del'];
$delete_query="DELETE  from customer WHERE customer_id='{$_GET['del']}'";
$run=mysqli_query($db,$delete_query);

if($run)
{
	echo "<p>Account deleted</p>";
	header('Location: accounts.php');
}



?>