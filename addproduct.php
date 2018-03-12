<?php include("headeradmin.php");?>

 <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #5cb85c;">
                        <div class="panel-title" style="color: white;"><b>Add a Product</b></div>
                       
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form class="form-horizontal" action="addproduct_handler.php" method="POST"  enctype="multipart/form-data">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="prodname"  placeholder="Product Name" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-upload"></i></span>
                                        &nbspSelect image to upload:<input type="file" name="imagefile" id="fileToUpload">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input type="text" class="form-control" name="prodprice"  placeholder="Product Price" required>                                        
                                    </div>

                                    <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-md-6 col-md-offset-3 controls">
                                       <button type="submit" value="AddProductBtn" class="btn btn-success form-control" style="width: 200px;">Add a Product</button>
            
                                    </div>
                                </div>
                            
                        </div>
                            



                            </form>    

                        </div>                     
                    </div>  
                </div>
<?php include("footer.php");?>