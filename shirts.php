<?php include("headerproducts.php");
include("connect.php"); 
session_start();
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "prod_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'prod_id'             =>     $_GET["id"],  
                     'prod_name'           =>     $_POST["hidden_name"],  
                     'price'          =>     $_POST["hidden_price"],
                     'qty'            =>     $_POST["quantity"]
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="shirts.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'prod_id'         =>     $_GET["id"],  
                'prod_name'       =>     $_POST["hidden_name"],  
                'price'      =>     $_POST["hidden_price"],
                'qty'        =>     $_POST["quantity"] 
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["prod_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="orderdetailsshirts.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
          


<br><br><br><br>
  <a class="btn btn-primary" href="orderdetailsshirts.php"> View Cart </a>
 <div class="container" style="width:1000px;">  
                <h3 align="center">USC Shirts</h3><br />  
                <?php  
                $query = "SELECT * FROM product WHERE prod_type ='Shirts'";  
                $result = mysqli_query($db, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="shirts.php?action=add&id=<?php echo $row["prod_id"]; ?>">  
                          <div style="border:1px solid #5cb85c; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["prod_name"]; ?></h4>  
                               <h4 class="text-danger">P <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["prod_name"]; ?>" /> 
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"/>
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?> 
         
<?php include("footer.php");?>