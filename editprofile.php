<?php include("headerhome.php");

?>
<br><br><br>
<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #5cb85c;">
                        <div class="panel-title" style="color: white;"><b>Edit Profile</b></div>
                       
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form class="form-horizontal" action="editprofile_handler.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="fname"  placeholder="First Name" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="lname"  placeholder="Last Name" required>
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input type="text" class="form-control" name="address" placeholder="Address" required>                                        
                                    </div>

                                     <div style="margin-bottom: 25px" class="input-group">

                                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                <select class="form-control" name="campus">
                                    <option selected="select">Campus Name</option>
                                    <option value="Talamban Campus">Talamban Campus</option>
                                    <option value="North Campus">North Campus</option>
                                    <option value="South Campus">South Campus</option>
                                    <option value="Downtown Campus">Downtown Campus</option>
                                </select>
                                
                            </div>        
                                


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div style="margin-left:85px;">
                                    <div style="margin-top:10px" class="form-group">

                             <button type="submit" value="update" class="btn btn-success" style="width: 200px;">Update Profile </button>
                             <button type="reset" value="reset" class="btn btn-danger" style="width: 200px;">Cancel </button>

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



