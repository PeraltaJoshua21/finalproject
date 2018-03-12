<?php include("headeradmin.php");?>
<div class="jumbotron">

<form>
  <h2 style="text-align: center;"> LIST OF PRODUCTS </h2>
  <hr />
  <div class="container">
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: relative">
        <thead>

        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Add Product</th>
            <th>Delete Product</th>
          
        </tr>
        </thead>

<?php
        include("connect.php");
        $view_users="SELECT * from shirts";
        $run=mysqli_query($db,$view_users);

        while($row=mysqli_fetch_array($run))
        {
            $prod_id=$row[0];
            $prod_name=$row[1];
            $image=$row[2];
            $price=$row[3];
          
         
        ?>

        <tr>
            <td><?php echo $prod_id;  ?></td>
            <td><?php echo $prod_name;  ?></td>
            <td><?php echo $image;  ?></td>
            <td><?php echo $price;  ?></td>

             
            <td><a class="btn btn-danger" href="deleteproduct_handler.php?del=<?php echo $prod_id ?>">Delete Product</a></td> 
        </tr>
      <?php } ?> 
    </table>
        </div>
</div>
</form>
</div>

<?php include("footer.php");?>