<?php 
session_start();
if(!$_SESSION['email'])
{
  header("Location:login.php");
}
?>
<html>
	<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1, shrink-to-fit-no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<title> </title>
	</head>

<body style="background-image: url('background.png'); background-repeat: no-repeat; background-size: 100% 100%;">

<nav id="nav_bar" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div>
        <a class="navbar-brand" href="home.php">  <img width="200px" height="50px" src="images/projectlogo.png" style="position:relative;top:4px"></a>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <br><li class="active"><a href="home.php">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="productPage.php">Products
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="shirts.php">Shirts</a></li>
              <li><a href="jackets.php">Jackets</a></li>
              <li><a href="slings.php">Slings</a></li>
              <li><a href="caps.php">Caps</a></li>
            </ul>
          </li>
          <li><a href="aboutus.php">About Us</a></li>
          

        </ul><br>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Profile</a>
            <ul class="dropdown-menu">
            <li style="margin-top: 5px; margin-left: 10px">Logged in as:<br> <?php echo $_SESSION['email']?></li>
            <hr>
            <li><a href="editprofile.php"><span class="glyphicon glyphicon-user "></span> Edit Profile </a></li>
            <li><a href="changepassword.php"><span class="glyphicon glyphicon-lock "></span> Change Password </a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>

            </ul>
          </li>
        </ul>
      </div>

    </div>
  </nav>