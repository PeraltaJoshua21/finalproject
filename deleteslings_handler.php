<?php
include("connect.php");

$delete_id=$_GET['del'];
$delete_query="DELETE  from slings WHERE product_id='$delete_id'";
$run=mysqli_query($db,$delete_query);
if($run)
{
	header("Location:slingshandler.php");
}

?>