<?php include("headerproducts.php");?>
<br><br><br>
                <div style="clear:both"></div>  
                <br />  
                <h3 style="text-indent: 8em;">Order Details</h3>  
                <div class="container">
                <div class="table-responsive">  
                     <table class="table table-bordered table-hover table-striped" style="table-layout: relative">  
                          <tr>  
                               <th width="20%">Item Name</th>    
                               <th width="20%">Price</th>  
                                <th width="20%">Quantity</th>  
                               <th width="20%">Total</th>  
                               <th width="20%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["prod_name"]; ?></td> 
                               <td>P <?php echo $values["price"]; ?></td> 
                                <td><?php echo $values["qty"]; ?></td>  
                                
                               <td> <?php echo number_format($values["qty"] * $values["price"], 2); ?></td>  
                               <td><a class="btn btn-danger" href="shirts.php?action=delete&id=<?php echo $values["prod_id"]; ?>"><span>Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["qty"] * $values["price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">P <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
        
           <br />  
           <center><a href="payment.php" class="btn btn-success">Proceed to Payment</a></center>

<?php include("footer.php");?>