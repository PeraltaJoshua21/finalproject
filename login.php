 <?php 
 include ("headerlogin.php");

  
 ?>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #5cb85c;">
                        <div class="panel-title" style="color: white;"><b>Sign In</b></div>
                       
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form class="form-horizontal" method="POST" action="login_handler.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="email" class="form-control" name="email"  placeholder="E-mail Address" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-md-12 controls">
                                      <button type="submit" value="submit" name="LogInBtn" class="btn btn-success" style="width: 500px;">Login </button>
            
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account? 
                                        <a href="signup.php"> Sign Up Here</a><br><br><br>
                                        <a href="adminlogin.php"> Admin Login </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     
                        </div>                     
                     </div>  
                 </div>

<?php include("footer.php");
