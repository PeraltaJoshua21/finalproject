<?php
// including the database connection file
include("connect.php");
if(isset($_GET['update']))
{ 
	$id=$_GET['update'];
	$fname=$_GET['fname'];
	$lname=$_GET['lname'];
	$address= $_GET['address'];
    $email= $_GET['email'];
    $password= $_GET['password'];
  
    
    $delete_query="UPDATE users SET fname='$fname', lname='$lname', address='$address',email='$email',password='$password' WHERE account_id=$id";//delete query
    $run=mysqli_query($db,$delete_query);
    if($run)
    {
        
            echo "<script>alert('Update Success!')</script>";

    }
}       
?>

<?php
//getting id from url
$id = isset($_GET['id']) ? $_GET['id']:'';

$check= "SELECT * FROM accounts WHERE account_id='$id'"; 

$result = mysqli_query($db, $check);
 
while($res = mysqli_fetch_array($result))
{
	$fname = $res['fname'];
	$lname = $res['lname'];
    $address = $res['address'];
	$email = $res['email'];
    $password = $res['password'];
}
?>