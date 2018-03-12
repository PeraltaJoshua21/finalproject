<?php
session_start();
include("connect.php");

$email = $_SESSION['email'];

if($email){
	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$newfname = $_POST['newfname'];
		$newlname = $_POST['newlname'];
		$newadd = $_POST['newadd'];
		$newcampus = $_POST['newcampus'];

		$query = mysqli_query($db,"SELECT fname, lname, address, campus from customer WHERE email = $email ");
		$row = mysqli_fetch_assoc($query);
	}
}
































?>