<?php
include("headersupplier.php");
?>

<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #5cb85c;">
                        <div class="panel-title" style="color: white;"><b>Add Stocks</b></div>
                       
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form class="form-horizontal" action="addstock_handler.php" method="POST"  enctype="multipart/form-data">
                                    
                           

                        			<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                                        <input type="text" class="form-control" name="stock"  placeholder="Stock" required>                                        
                                    </div>

                            
                                   

                                    <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-md-6 col-md-offset-3 controls">
                                       <button type="submit" value="addStock" class="btn btn-success form-control" style="width: 200px;">Add stock</button>
		                            </div>
                                </div>
                            
                        </div>
                            



                            </form>    

                        </div>                     
                    </div>  
                </div>
<?php include("footer.php");?>





















?>