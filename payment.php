<?php include("headerproducts.php");?>
<br><br><br><br>
<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #5cb85c;">
                        <div class="panel-title" style="color: white;"><b>Customer Details</b></div>
                       
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form class="form-horizontal" action="payment_handler.php" method="POST">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="cusname"  placeholder="Customer Name" required>                                        
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input type="text" class="form-control" name="contact"  placeholder="Contact Number" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="E-mail Address" required>
                                    </div>
                        



                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-md-4 col-md-offset-2 controls">
                                       <button type="submit" value="OrderBtn" class="btn btn-success form-control" style="width: 350px;">CLICK TO ORDER</button>
            
                                    </div>
                                </div>  
                            </form>     



                        </div>                     
                    </div>  
        </div>
<?php include("footer.php");?>