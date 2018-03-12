<?php include('headerlogin.php');
    
    session_start();
    include('connect.php');
?>

 <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #5cb85c;">
                        <div class="panel-title" style="color: white;"><b>Sign Up</b></div>
                       
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form class="form-horizontal" action="signup_handler.php" method="POST">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="fname"  placeholder="First Name" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input type="text" class="form-control" name="address"  placeholder="Address" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="E-mail Address" required>
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" name="password"  placeholder="Password" required>                                        
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" name="password2"  placeholder="Confirm Password" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input type="text" class="form-control" name="contact_no" placeholder="Contact Number" required>
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

                                    <div class="col-md-12 controls">
                                       <button type="submit" value="SignUpBtn" class="btn btn-success form-control" style="width: 500px;">Sign Up</button>
            
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                           You already have an account? 
                                        <a href="login.php"> Sign In Here</a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>

<?php include("footer.php");
?>