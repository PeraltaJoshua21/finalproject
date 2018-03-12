<?php
session_start();
if(!$_SESSION['username'])
{
    header("Location: delboylogin.php");
}
?>

<html>
	<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1, shrink-to-fit-no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
	  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/form-elements.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"> 
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<title> </title>
	</head>

<body style="background-image: url('background.png'); background-repeat: no-repeat; background-size: 100% 100%;">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img alt="Brand" img width="200px" height="50px" src="images/projectlogo.png" style="position:relative;top:-15px">
      </a> 
    </div>
</nav>

<br><br><br><br>
  <div class="sidebar-nav">
    <div class="well" style="width:300px; padding: 8px 0; position: relative;">
    <ul class="nav nav-list"> 
      <li class="nav-header"><b>Delivery Menu</b></li>        
      <li><a href="delboyhome.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
         
            <li class="active"><a href="delboylist.php"><i class="glyphicon glyphicon-shopping-cart"></i> Orders</a></li>
     
          <li class="divider"></li>
      <li><a href="delboylogout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
    </ul>
  </div>

</div>