<?php include("headeradmin.php");

include("connect.php");
if(isset($_GET['submit']))
{ 
    $id=$_GET['id'];
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $address= $_GET['address'];
    $email= $_GET['email'];
    $password= $_GET['password'];
  
    
    $update_query= "UPDATE accounts SET fname='$fname', lname='$lname', address='$address',email='$email',password='$password' WHERE account_id='$id'";
    $run=mysqli_query($db,$update_query);
    if($run)
    {
        
            echo "<script>alert('User Information Updated Successfully!')</script>";

    }
}       

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

<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #5cb85c;">
                        <div class="panel-title" style="color: white;"><b>Update Account Information</b></div>
                    
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form class="form-horizontal" action="edituser_handler.php" method="GET">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="fname"  placeholder="First Name" value="<?php echo $fname;?>">                                       
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="lname"  placeholder="Last Name" value="<?php echo $lname;?>">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $address;?>" >                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="E-mail Address" value="<?php echo $email;?>">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="Password" 
                                 		value="<?php echo $password;?>">                                        
                                    </div>

                                <div style="margin-top:10px" class="form-group">
            

                                    <div style="margin-left:85px;">
                                    <div style="margin-top:10px" class="form-group">
                                
                		
                             <input type="hidden" name="id" value="<?php echo $account_id;?>"> </input>
                             <input type="submit" name="submit" value="Update" class="btn btn-success" style="width: 200px;"> </input>
                             <input type="reset" value="Cancel"  class="btn btn-danger" style="width: 200px;"></input>

                         </div>
                                 </div>
                                    
                                    </div>
                                </div>  
                            </form>     



                        </div>                     
                    </div>  
        </div>
<?php
include("footer.php");
?>



