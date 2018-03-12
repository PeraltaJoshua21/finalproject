<?php include("headerchangepass.php");
?>
 <div class="container" style="margin-top: 100px;">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #5cb85c;">
                        <div class="panel-title" style="color: white;"><b >Change Password</b></div>
                       
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form class="form-horizontal" method="POST" action="changepass_handler.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input style="height: 30px;" type="password" class="form-control" name="currentpass"  placeholder="Current Password" required="">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input  style="height: 30px;" type="password" class="form-control" name="newpass" placeholder="New Password" required="">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input  style="height: 30px;" type="password" class="form-control" name="confirmnewpass" placeholder="Confirm Password" required="">
                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                 	<div style="margin-left: 65px;">
                                      <button type="submit" value="submit" class="btn btn-success" style="width: 200px;">Change Password </button>
                                   
                                      <button type="reset" value="reset" class="btn btn-danger" style="width: 200px;">Cancel </button>
                                    </div>
                                </div>

                              
                            </form>   

                        </div>                     
                    </div>  
        </div>


<?php include("footer.php");
?>